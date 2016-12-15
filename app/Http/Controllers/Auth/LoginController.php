<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use App\Helpers\ActivationService;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $activation_service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActivationService $activation_service)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->activation_service = $activation_service;
    }

    /**
     * Validate the user login request.
     *
     * Surcharge, element modiifié :  $this->username() => 'required'
     * Ajout de la vérification de l'email, on vérifie que l'email soit valide 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|email', 'password' => 'required',
        ]);
    }

    /**
     * Create the response for when a request fails validation.
     *
     * Surcharge, element modifié : redirect->to()
     * Si Email ou mot de passe ne respectent pas les règles de validations 
     * Redirige sur la page d'accueil au lieu de la page ou formulaire a été soumis
     * Inutile si traitenement en Ajax
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function buildFailedValidationResponse(Request $request, array $errors)
    {
        if ($request->expectsJson()) {
            return new JsonResponse($errors, 422);
        }

        return redirect()->to($this->redirectTo)
                        ->withInput($request->input())
                        ->withErrors($errors, $this->errorBag());
    }

     /**
     * Get the failed login response instance.
     *
     * Surcharge, element modifié : redirect()->back()
     * Si email ou mot de passe pas valide
     * Redirige sur la page d'accueil au lieu de la page ou formulaire a été soumis
     * Inutile si traitenement en Ajax
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect($this->redirectTo)
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => \Lang::get('auth.failed'),
            ]);
    }


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->status != "Actif") {
            $this->activation_service->sendMailActivation($user);
            auth()->logout();
            return back()->with(['warning' => \Lang::get('auth.account_confirmation')]);
        }
        return redirect()->intended($this->redirectTo);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Commandes;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Lang;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \App\Users::with('roles', 'villes')->where('status', '=', 'Actif')->get();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = \App\Users::with('roles', 'villes')->where('id', '=', $user->id)->first();
        $pays = \App\Pays::where('id', '=', $user->villes->id_pays)->first();
        $adresse = \App\Adresses::with('users', 'pays', 'villes')->where('id_user', '=', $user->id)->first();

        // BelongToMany (Table Pivot)
        $commandeProduit = \App\Commandes::with('produits', 'tva')->where('id_user', '=', $user->id)->get();

        foreach($commandeProduit as $x){
            foreach($x->produits as $y){
                $total = $y->sum('prix');
                if($x->tva->id_pays === $adresse->id_pays){
                    $ttc = $total + $x->tva->multiplicate;
                    $tva = $x->tva->multiplicate;
                    $ht = $ttc - $x->tva->multiplicate;
                    $fraisPort = 0;
                }
            }
        }
        return view('admin.user.show', compact('user', 'pays', 'adresse', 'commandeProduit', 'ttc', 'ht', 'fraisPort', 'tva'));
    }

    public function detailCommande(Commandes $commande){
        $commande = \App\Commandes::with('users', 'tva', 'produits', 'adresse')->where('id', '=', $commande->id)->get();
        return view('admin.user.detailCommande', compact('commande'));
    }

    /**
     * @param Users $user
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function archive(Users $user, Request $request){
        $user->status = 'Archivé';
        $user->save();

        // AJAX
        $message = Lang::get('general.delete');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('user');
    }
}

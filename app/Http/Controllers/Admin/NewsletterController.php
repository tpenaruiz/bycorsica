<?php

namespace App\Http\Controllers\Admin;

use App\Newsletters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletter = \App\Newsletters::with('langues')->where('status', '=', 'Actif')->get();
        return view('admin.newsletter.index', compact('newsletter'));
    }

    /**
     * @param Newsletters $newsletter
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function archive(Newsletters $newsletter, Request $request){
        $newsletter->status = 'Archivé';
        $newsletter->save();

        // AJAX
        $message = Lang::get('general.delete');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('newsletter');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PatternMailRequest;
use App\Http\Requests\TypeMailRequest;
use App\PatternMail;
use App\TypeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class PatternMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = \App\TypeMail::get();
        $patternMail = \App\PatternMail::with('langues', 'type')->where('status', '=', 'Actif')->get();
        return view('admin.patternMail.index', compact('type', 'patternMail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langue = \App\Langues::pluck('libelle', 'id');
        $type = \App\TypeMail::pluck('type', 'id');
        return view('admin.patternMail.create', compact('langue', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatternMailRequest $request)
    {
        $patternMail = new \App\PatternMail;
        $patternMail->id_langue = $request->id_langue;
        $patternMail->id_type = $request->id_type;
        $patternMail->expediteur = $request->expediteur;
        $patternMail->destinateur = $request->destinateur;
        $patternMail->objet = $request->objet;
        $patternMail->contenu = $request->contenu;
        $patternMail->status = $request->status;
        $patternMail->save();

        return redirect('patternMail')->withFlashMessage(Lang::get('general.success'));
    }

    public function storeType(TypeMailRequest $request){
        $type = new TypeMail;
        $type->type = $request->type;
        $type->save();

        return redirect('patternMail')->withFlashMessage(Lang::get('general.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatternMail $patternMail, Request $request)
    {
        $patternMail->delete();

        // AJAX
        $message = Lang::get('general.delete');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('patternMail');
    }

    public function destroyType(TypeMail $typeMail, Request $request){
        $typeMail->delete();

        // AJAX
        $message = Lang::get('general.delete');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('patternMail');
    }
}

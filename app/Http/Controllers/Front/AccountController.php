<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersFrontRequest;
use App\Http\Requests\AddressFrontRequest;
use Carbon\Carbon;
use App\Adresses;
use Auth;

class AccountController extends Controller
{
    public function __construct(){
    	//code
    }

    public function index(Request $request){

    	$user = Auth::user();
        $pays = \App\Pays::pluck('nom_fr_fr', 'id');
        $ville = \App\Villes::pluck('libelle', 'id');
    	$adresses = \App\Adresses::where('id_user', '=', Auth::user()->id)->get();

        $listCadeaux = \DB::table('ProductForSurprise')
            ->join('produits', 'ProductForSurprise.id_produit', '=', 'produits.id')
            ->join('medias', 'produits.id_media', '=', 'medias.id')
            ->join('users', 'ProductForSurprise.id_user', '=', 'users.id')
            ->join('tva', 'produits.id_tva', '=', 'tva.id')
            ->select('*', 'produits.id AS idProd', 'medias.libelle AS mediaLibelle', 'ProductForSurprise.id AS ProductForSurpriseId', 'users.id AS idUser', 'produits.nom AS produitNom', 'produits.description AS produitDescription')
            ->get();

        // AJAX
        $list_pays = \App\Pays::orderBy('created_at', 'desc')->get();
        $list_ville = \App\Villes::with('pays')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return response()->json([
                'pays' => $list_pays,
                'villes' => $list_ville
            ]);
        }

        return view('front.account.index', compact('user', 'ville', 'pays', 'adresses', 'listCadeaux'));
    }

    public function infosUpdate(UsersFrontRequest $request){

        $user = \App\Users::find(Auth::user()->id);
        $user->prenom = $request->firstname;
        $user->nom = $request->secondname;
        $user->date_naissance = Carbon::parse($request->birthday);
        $user->email = $request->email;
        $user->save();

        if($request->ajax()){
            return response()->json(['status' => \Lang::get('general.success_update')]);
        }

        return redirect()->route('account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function addressCreate(Request $request)
    {
        $pays = \App\Pays::pluck('nom_fr_fr', 'id');
        $ville = \App\Villes::pluck('libelle', 'id');   
        
        // AJAX
        $list_pays = \App\Pays::orderBy('created_at', 'desc')->get();
        $list_ville = \App\Villes::with('pays')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return response()->json([
                'pays' => $list_pays,
                'villes' => $list_ville
            ]);
        }

        return View('front.account.address_create', compact('ville', 'pays'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function addressStore(AddressFrontRequest $request)
    {
        $ad = new \App\Adresses;
        $ad->id_user = Auth::user()->id;
        $ad->libelle = $request->libelle;
        $ad->prenom = $request->address_firstname;
        $ad->nom = $request->address_secondname;
        $ad->company = $request->company;
        $ad->telephone = $request->phone;
        $ad->telephone2 = $request->cellular;
        $ad->id_pays = $request->country;
        $ad->id_ville = $request->city;
        $ad->code_postal = $request->codepostal;
        $ad->adresse = $request->address;
        $ad->adresse_suppl = $request->adresse2;
        $ad->complement = $request->infocomplement;
        $ad->save();

        return redirect('account')->with('status', \Lang::get('general.addressCreated')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function addressEdit(Request $request, $address)
    {   
        $pays = \App\Pays::pluck('nom_fr_fr', 'id');
        $ville = \App\Villes::pluck('libelle', 'id');
        $adresse = \App\Adresses::where('id', '=', $address)->first();    
        
        // AJAX
        $list_pays = \App\Pays::orderBy('created_at', 'desc')->get();
        $list_ville = \App\Villes::with('pays')->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            return response()->json([
                'pays' => $list_pays,
                'villes' => $list_ville
            ]);
        }

        return view('front.account.address_edit', compact('ville', 'pays', 'adresse'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function addressUpdate(AddressFrontRequest $request, $address)
    {
        $ad = \App\Adresses::find($address);
        $ad->libelle = $request->libelle;
        $ad->prenom = $request->address_firstname;
        $ad->nom = $request->address_secondname;
        $ad->company = $request->company;
        $ad->telephone = $request->phone;
        $ad->telephone2 = $request->phone2;
        $ad->id_pays = $request->country;
        $ad->id_ville = $request->city;
        $ad->code_postal = $request->codepostal;
        $ad->adresse = $request->address;
        $ad->adresse_suppl = $request->adresse2;
        $ad->complement = $request->infocomplement;
        $ad->save();

        return redirect('account')->with('status', \Lang::get('general.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function addressDestroy(Request $request, $address)
    {   
        $ad = \App\Adresses::find($address);
        $ad->delete();

        $message = \Lang::get('general.addressDeleted');

        if ($request->ajax()) {
            return response()->json([
                'id' => $address,
                'message' => $message
            ]);
        }

        return redirect()->route('account');
    }

    public function list_cadeauxDestroy(Request $request ,$list_cadeaux){
        $maList = \App\ProductForSurprise::find($list_cadeaux);
        $maList->delete();

        // AJAX
        $message_list_cadeaux = "élement supprimer avec succès !";
        if($request->ajax()){
            return response()->json([
                'message_list_cadeaux' => $message_list_cadeaux
            ]);
        }
        return redirect()->route('account');
    }

}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LanguagesRequest;
use Illuminate\Support\Facades\Lang;

class LanguagesController extends Controller
{
    public function __construct()
    {
    	// code...
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

	    $files = array(); // Déclaration d'un tableau pour stocker les noms des fichiers
	    $path = realpath(base_path('resources/lang/fr')); // Chemin du répertoire de langue fr
	    
	    if($elements = scandir($path)){ // Liste les fichiers et dossiers d'un répertoire
	    	foreach ($elements as $element) {
	    		if($element != "." && $element !=".."){
	    			$files[] = $element; 
	    		}
	    	}
	    }

	    if(!empty($files)){ // Tri par ordre croissant
	    	sort($files);
	    }

    	return view('admin.languages.index')->with('files',$files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguagesRequest $request)
    {
    	$nom = $request->name;
    	$francais = $request->francais;
    	$english = $request->english;

        $pathFr = realpath(base_path('resources/lang/fr')); // Chemin du répertoire de langue fr
	    $pathEn = realpath(base_path('resources/lang/en')); // Chemin du répertoire de langue en

	    // Création en français
        $fichierFr = fopen($pathFr . '/' . $nom, "w+");
        fwrite($fichierFr, $francais);
        fclose($fichierFr);

	    // Création en anglais
        $fichierEn = fopen($pathEn . '/' . $nom, "w+");
        fwrite($fichierEn, $english);
        fclose($fichierEn);

        return redirect('languages')->withFlashMessage('Creation des fichiers effectuées avec succès');
    }

    public function update($key, Request $request)
    {
    	$files = array(); // Déclaration d'un tableau pour stocker les noms des fichiers
	    $pathFr = realpath(base_path('resources/lang/fr')); // Chemin du répertoire de langue fr
	    $pathEn = realpath(base_path('resources/lang/en')); // Chemin du répertoire de langue en

	    if($elements = scandir($pathFr)){ // Liste les fichiers et dossiers d'un répertoire
	    	foreach ($elements as $element) {
	    		if($element != "." && $element !=".."){
	    			$files[] = $element; 
	    		}
	    	}
	    }

	    // mise à jour en francais
	    $fichierFr = fopen($pathFr . '/' . $files[$key], "w+"); // Ouverture du fichier en mode lecture et écriture en placant le pointeur au début du fichier (contenu écrasé)
	    fwrite($fichierFr, $request->francais); // Ecrit le contenu dans le fichier 
	    fclose($fichierFr); // Fermeture du fichier

	    // mise à jour en anglais
	    $fichierEn = fopen($pathEn . '/' . $files[$key], "w+");
	    fwrite($fichierEn, $request->english);
	    fclose($fichierEn);

	    return redirect('languages')->withFlashMessage("Mise à jour des fichiers de langues effectué avec succès");
    }

    public function destroy(Request $request, $key)
    {
    	$files = array(); // Déclaration d'un tableau pour stocker les noms des fichiers
	    $pathFr = realpath(base_path('resources/lang/fr')); // Chemin du répertoire de langue fr
	    $pathEn = realpath(base_path('resources/lang/en')); // Chemin du répertoire de langue en

	    if($elements = scandir($pathFr)){ // Liste les fichiers et dossiers d'un répertoire
	    	foreach ($elements as $element) {
	    		if($element != "." && $element !=".."){
	    			$files[] = $element; 
	    		}
	    	}
	    }

	    // Suppression des fichiers
	    $fichierFr = $pathFr . '/' . $files[$key];
	    $fichierEn = $pathEn . '/' . $files[$key];
	    if (file_exists($fichierFr)) {
	    	unlink($fichierFr);
	    }
	    if(file_exists($fichierEn)){
	    	unlink($fichierEn);
	    }

	    // AJAX
        $message = Lang::get('general.delete');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('admin.languages');
    }
}

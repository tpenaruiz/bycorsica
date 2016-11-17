<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request){
        $users = \App\Users::with('roles', 'villes')
            ->where('nom', 'LIKE', '%'.$request->search.'%')
            ->orWhere('prenom', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->orWhere('id', 'LIKE', '%'.$request->search.'%')
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
        $users->setPath('users');

        return view('admin.users.index', compact('users'));
    }

    public function search(){

    }

    public function store(UsersRequest $request){
        $users = new \App\Users;
        $users->id_role = 2; // Administrateur
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->email = $request->email;
        $users->status = 'Actif';

        // TODO Provisoire seulement pour tester
        $users->id_ville = 2;

        // Générer un password par default
        $password = "";
        $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for($i = 0; $i < 12; $i++){
            $random_int = mt_rand();
            $password .= $charset[$random_int % strlen($charset)];
        }

        $users->password = \Hash::make($password.\Config::get('constante.salt'));
        $users->save();

        // TODO Faire l'envoie du mail au destinateur
        // ...

        return redirect()->route('users.index');
    }

    public function update($users){

    }

    public function statusOff($users){

    }

    public function statusOn($users){

    }

    public function destroy($users){

    }
}

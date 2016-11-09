<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController
{
    public function __construct()
    {
    }

    public function index(Request $request){
        $users = \App\Users::with('roles', 'villes')
            ->where('name', 'LIKE', '%'.$request->search.'%')
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

    public function store(){

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

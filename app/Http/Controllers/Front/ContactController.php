<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use App\Contacts;


class ContactController extends Controller
{
    public function __construct(){
        //
    }

     public function index(){

        $object = array();
        for ($i=0; $i <6 ; $i++) { 
            $key = 'general.object_' . $i;
            $object[\Lang::get($key)] = \Lang::get($key);
        }

        return view('front.contact.index', compact('object'));
    }

    public function post(ContactRequest $request){

        // Sauvegarde en bdd
        $contact = new \App\Contacts;
        $contact->object = $request->object;
        $contact->reference_commande = $request->reference_commande;
        $contact->email = $request->email;
        $contact->message =  $request->messag;
        $contact->save();

        // Envois du mail
        Mail::to("orb950@outlook.fr")->send(new Contact($contact));

        return redirect('/')->with('status', \Lang::get('general.contactSent'));
    }
}

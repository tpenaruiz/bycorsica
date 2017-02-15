<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyPurchaseController extends Controller
{
    public function __construct()
    {
    }

    public function updateQuantite(Request $request, $myPurchase){
        $myPurchase->quantite = $request->quantity;
        $myPurchase->save();

        // AJAX
        $message = \Lang::get('general.treatmentOk');
        $cleanBasket = \Lang::get('general.cleanBasket');
        if($request->ajax()){
            return response()->json([
                'message' => $message,
                'cleanBasket' => $cleanBasket
            ]);
        }
    }

    public function destroy(Request $request, $myPurchase){
        $myPurchase->delete();

        // AJAX
        $message = \Lang::get('general.deletePurchase');
        $cleanBasket = \Lang::get('general.cleanBasket');
        if($request->ajax()){
            return response()->json([
                'message' => $message,
                'cleanBasket' => $cleanBasket
            ]);
        }
        return redirect()->route('home');
    }
}

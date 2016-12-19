<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyPurchaseController extends Controller
{
    public function __construct()
    {
    }

    public function destroy(Request $request, $myPurchase){
        $myPurchase->delete();

        // AJAX
        $message = \Lang::get('general.deletePurchase');
        if($request->ajax()){
            return response()->json([
                'message' => $message
            ]);
        }
        return redirect()->route('home');
    }
}

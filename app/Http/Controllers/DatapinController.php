<?php

namespace App\Http\Controllers;

use App\Models\big;
use App\Models\bo;
use App\Models\data;
use App\Models\server;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DatapinController extends Controller
{
    function pinindex()
    {
        $product=data::where('network', 'data_pin')->first();
        return view('datapin');
    }
    function processdatapin(Request $request)
    {
        $request->validate([
            'productid'=>'required',
        ]);

        $user = User::find($request->user()->id);
            $product = big::where('id', $request->productid)->first();

        if ($user->apikey == '') {

            $amount = $product->tamount;
        } elseif ($user != '') {
            $amount = $product->ramount;
        }

        if ($user->wallet < $amount) {
            $mg = "You Cant Make Purchase Above" . "NGN" . $amount . " from your wallet. Your wallet balance is NGN $user->wallet. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";
            Alert::error('Insufficient Balance', $mg);

            return redirect(route('dashboard'));

        }
        if ($request->amount < 0) {

            $mg = "error transaction";
            Alert::error('Error', $mg);
            return redirect(route('dashboard'));

        }
        $bo = bo::where('refid', $request->id)->first();
        if (isset($bo)) {
            $mg = "duplicate transaction";
            Alert::error('Error', $mg);
            return redirect(route('dashboard'));

        } else {
            $user = User::find($request->user()->id);


            $gt = $user->wallet - $request->amount;


            $user->wallet = $gt;
            $user->save();

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccess.com.ng/api/datacard.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'network' =>01,
                    'no_of_pins' => 1,
                    'dataplan' => 165,
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: 904cc8b30fb06707862323030783481b", //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;

        }
    }


}

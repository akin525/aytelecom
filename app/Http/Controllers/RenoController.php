<?php

namespace App\Http\Controllers;

class RenoController
{
function renoproduct()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://renomobilemoney.com/api/listdata',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'apikey: RENO-62f23b335501d3.82459331',

            'Accept: application/json',
                    'Content-Type: application/json'
        )));
    $response = curl_exec($curl);

    curl_close($curl);
//    return $response;
    $data = json_decode($response, true);
//    foreach ($data as $plan) {
//        $name = $plan["plan"];
//        $amount = $plan["ramount"];
//    }

    return view('admin/sell', compact('data'));

    }

}

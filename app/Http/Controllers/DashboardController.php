<?php

namespace App\Http\Controllers;

use App\Models\ParkinglocationModel;
use Illuminate\Routing\Controller as BaseController;



class DashboardController extends BaseController
{
    
    function analytical(){
        $headers = [            
            'Content-Type: application/json',
        ];
        $payloads = [
            'resource_id' => 'fb42db12-7c82-40bb-8d3c-4f6119540edc',
            'limit'  => '25',
        ];

       

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, " https://www.data.brisbane.qld.gov.au/data/api/3/action/datastore_search");      
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"resource_id":"fb42db12-7c82-40bb-8d3c-4f6119540edc","filters":{},"limit":10,"offset":0,"total_estimation_threshold":1000}');

        if (curl_exec($ch) === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'Operation completed without any errors';
        }
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        dd($response);
      
    	return view('dashboard.analytical');
    }

    public function index()
    {
        $parking = ParkinglocationModel::get();
        return view('dashboard.analytical');
    }
}

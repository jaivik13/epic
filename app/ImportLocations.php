<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ImportLocations extends Model
{
    public static function insertData($data){

        $value=DB::table('parking_meter_location_brisbane')->where('meter_no', $data['meter_no'])->get();
       
        if($value->count() == 0){
             $insert = DB::table('parking_meter_location_brisbane')->insert($data);
        }
        
     }
}


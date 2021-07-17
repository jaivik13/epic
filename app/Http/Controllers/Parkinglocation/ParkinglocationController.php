<?php

namespace App\Http\Controllers\Parkinglocation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParkinglocationModel;

class ParkinglocationController extends Controller
{
         public function parkinglocation()
        {
           return response()->json(ParkinglocationModel::get(),200);
        }
}

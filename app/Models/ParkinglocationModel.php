<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkinglocationModel extends Model
{
    protected $table = 'parking_meter_location_brisbane';

    protected $fillable = [
        'meter_no',
        'category',
        'street',
        'suburb',
        'max_stay_hrs',
        'restrictions',
        'operational_day',
        'operational_time',
        'tar_zone',
        'tar_rate_weekday',
        'tar_rate_ah_we',
        'loc_desc',
        'veh_bays',
        'mc_bays',
        'mc_rate',
        'longitude',
        'latitude',
        'mobile_zone',
        'max_cap_chg',
        'created_at',
        'updated_at'
    ];
}

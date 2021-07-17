<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingMeterLocationBrisbaneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_meter_location_brisbane', function (Blueprint $table) {
            $table->bigIncrements('Parking_meter_id');
            $table->integer('meter_no');
            $table->string('category');
            $table->string('street');
            $table->string('suburb');
            $table->integer('max_stay_hrs');
            $table->string('restrictions');
            $table->string('operational_day');
            $table->string('operational_time');
            $table->string('tar_zone');
            $table->float('tar_rate_weekday');
            $table->float('tar_rate_ah_we');
            $table->string('loc_desc');
            $table->integer('veh_bays');
            $table->float('mc_rate');
            $table->float('mc_bays');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('mobile_zone');
            $table->string('max_cap_chg');
            $table->timestamps();
        });

        Schema::create('parking_meter_locations_metadata_brisbane', function (Blueprint $table) {
            $table->bigIncrements('parking_metadata_id');
            $table->string('Attribute');
            $table->string('Attribute_Description');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_meter_location_brisbane');
        Schema::dropIfExists('parking_meter_locations_metadata_brisbane');
    }
}

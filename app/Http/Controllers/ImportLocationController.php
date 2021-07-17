<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImportLocations;
use Illuminate\Support\Facades\Session;

class ImportLocationController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function uploadFile(Request $request)
  {

    if ($request->input('submit') != null) {

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152;

      // Check file extension
      if (in_array(strtolower($extension), $valid_extension)) {

        // Check file size
        if ($fileSize <= $maxFileSize) {

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location, $filename);

          // Import CSV to Database
          $filepath = public_path($location . "/" . $filename);

          // Reading file
          $file = fopen($filepath, "r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
            $num = count($filedata);

            // Skip first row (Remove below comment if you want to skip the first row)
            if ($i == 0) {
              $i++;
              continue;
            }
            for ($c = 0; $c < $num; $c++) {
              $importData_arr[$i][] = $filedata[$c];
            }
            $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach ($importData_arr as $importData) {

            $insertData = array(
              "meter_no" => $importData[0],
              "category" => $importData[1],
              "street" => $importData[2],
              "suburb" => $importData[3],
              "max_stay_hrs" => $importData[4],
              "restrictions" => $importData[5],
              "operational_day" => $importData[6],
              "operational_time" => $importData[7],
              "tar_zone" => $importData[8],
              "tar_rate_weekday" => $importData[9],
              "tar_rate_ah_we" => $importData[10],
              "loc_desc" => $importData[11],
              "veh_bays" => $importData[12],
              "mc_bays" => $importData[13],
              "mc_rate" => $importData[14],
              "longitude" => $importData[15],
              "latitude" => $importData[16],
              "mobile_zone" => $importData[17],
              "max_cap_chg" => $importData[18],
              "created_at" => date('Y-m-d H:i:s'),
              "updated_at" => date('Y-m-d H:i:s'));
            ImportLocations::insertData($insertData);
          }
          Session::flash('message','Import Successful.');
        } else {
          Session::flash('message','File too large. File must be less than 2MB.');
        }
      } else {
        Session::flash('message','Invalid File Extension.');
      }
    }

    // Redirect to index
    return redirect()->action('ImportLocationController@index');
  }
}

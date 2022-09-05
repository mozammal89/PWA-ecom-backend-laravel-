<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    //visitor details get method start
    public function GetVisitorDetails()
    {
        $ip_address = $_SERVER['REMOTE_ADDR']; // get user ip address
        date_default_timezone_set("Asia/Dhaka"); //set time zone
        $visit_time= date("h:i:sa"); //set time with format
        $visit_date =date("d-m-Y"); //set date with date format

        //eluqoant orm use inser visitor info
        $result = Visitor::insert([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);

        return response()->json(['data' => $result, 'message' => 'Data get successfully']);


    }

    //visitor details get method end
}

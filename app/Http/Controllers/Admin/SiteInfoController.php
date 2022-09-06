<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;

class SiteInfoController extends Controller
{
    //get site info method

    public function GetSiteinfo()
    {
        $result = SiteInfo::get();
        return response()->json(['data' => $result, 'message' => 'All data get successfully']);
    }
}

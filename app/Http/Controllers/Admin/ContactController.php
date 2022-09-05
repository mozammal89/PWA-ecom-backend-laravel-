<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // start post contact method

    public function PostContactDetails(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        date_default_timezone_set("Asia/Dhaka"); //set time zone
        $contact_time= date("h:i:sa"); //set time with format
        $contact_date =date("d-m-Y"); //set date with date format

        //eluqoant orm use inser visitor info
        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_date' => $contact_date,
            'contcat_time' => $contact_time
        ]);

        return response()->json(['data' => $result, 'message' => 'Contact Data store successfully']);
    }
    // end post contact method
}

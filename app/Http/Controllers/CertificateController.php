<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function admincertificateview(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $certificate=Certificate::where('name',"LIKE","%$search%")->get();
        }
        else{
            $certificate=Certificate::all();
        }

        $data=compact('certificate', 'search');

        return view('AdminPanel.certificate')->with($data);
}

}

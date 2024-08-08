<?php

namespace App\Http\Controllers;

use App\Models\ClientDetail;
use App\Models\Inquiry;
use App\Models\InternshipDetail;
use App\Models\Services;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome()
    {
        $totalClient = ClientDetail::count();
        $totalInterns = InternshipDetail::count();
        $totalServices = Services::count();

        return view('AdminPanel.index', compact('totalClient','totalInterns','totalServices'));

    }

    public function admininquiry()
    {
        $search=$request['search']??"";
        if($search!=""){
            $inquiry=Inquiry::where('name',"LIKE","%$search%")->get();
        }
        else{
            $inquiry=Inquiry::all();
        }

        $data=compact('inquiry', 'search');

        return view('AdminPanel.inquiry')->with($data);
    }

    public function adminintern()
    {
        $search=$request['search']??"";
        if($search!=""){
            $internship=InternshipDetail::where('name',"LIKE","%$search%")->get();
        }
        else{
            $internship=InternshipDetail::all();
        }

        $data=compact('internship', 'search');

        return view('AdminPanel.interndetail')->with($data);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\CareerApply;
use App\Models\Certificate;
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
        $Certificate = Certificate::count();

        return view('AdminPanel.index', compact('totalClient','totalInterns','totalServices','Certificate'));

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

    public function admincareerapplyview()
    {
        $search=$request['search']??"";
        if($search!=""){
            $careerapply=CareerApply::where('name',"LIKE","%$search%")->with('vacancy')->get();
        }
        else{
            $careerapply=CareerApply::all();
        }

        $data=compact('careerapply', 'search');

        return view('AdminPanel.careerapply')->with($data);
    }



}

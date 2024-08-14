<?php

namespace App\Http\Controllers;

use App\Models\AddVacancy;
use App\Models\Banner;
use App\Models\CareerApply;
use App\Models\Certificate;
use App\Models\ClientDetail;
use App\Models\InternshipDetail;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
//Home Page
    public function home()
    {
        $banner=Banner::all();

        $data=compact('banner');
        return view('frontend.index')->with($data);
    }

// Service Page
    public function services()
    {
        $services=Services::all();

        $data=compact('services');

        return view('frontend.Services')->with($data);
    }

// About Page
    public function about()
    {
        return view('frontend.about');
    }

// Contact Page
    public function contact()
    {
        return view('frontend.contact');
    }

//Contact Page Internship Form
    public function contact2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new InternshipDetail();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->message = $request->input('message');

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('Resumes', $fileName);
            $user->resume = $fileName;
        }

        $user->save();

        return redirect('/contact');
    }

// Career Page
    public function career(Request $request)
{
    $search = $request->input('search', '');

    $certificate = collect();

    if ($search != '') {
        $certificate = Certificate::where('Certificate_id', 'LIKE', "%$search%")->get();
    }
    $vacancy= AddVacancy::all();

    $data = compact('certificate', 'search','vacancy');

    return view('frontend.career')->with($data);
}

//Hiring Details (Post name displayed)
public function hiring()
    {
        $vacancy= AddVacancy::all();
        $data = compact('vacancy');

        return view('frontend.hiring')->with($data);
    }

// Specific Career Details
public function show($id)
{
    $vacancy = AddVacancy::findOrFail($id);

    return view('frontend.vacancy_show', compact('vacancy'));
}

//Apply Careere Form Data
public function applycareerformdata(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'contact' => 'required|numeric',
        'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        'linkedin_url' => 'nullable|string',
    ]);


    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    $user= new CareerApply();
    $user->vacancy_id=$request->input('vacancy_id');
    $user->name=$request->input('name');
    $user->email=$request->input('email');
    $user->contact=$request->input('contact');
    $user->linkedin_url=$request->input('linkedin_url');

    if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move('Career_Resume', $fileName);
        $user->resume = $fileName;
    }
    $user->save();

    return redirect('/career');

}


//Clients Details
public function clients()
    {
        $clientDetails = ClientDetail::all();

        return view('frontend.clients', compact('clientDetails'));
    }
    public function clients2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $clientdetail= new ClientDetail();
        $clientdetail->name=$request->input('name');
        $clientdetail->description = $request->input('description');
        $clientdetail->want_img = $request->input('want_img');
        if ($request->hasFile('Image')) {
            $file=$request->file('Image');
            $fileName = time() . "img." . $request->file('Image')->getClientOriginalExtension();
            $file->move('clientlogo', $fileName);
            $clientdetail->Image = $fileName;
        }

        $clientdetail->save();

        return redirect('/clients');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AddVacancy;
use App\Models\CareerApply;
use App\Models\Certificate;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function home()
    {
        return view('frontend.index');
    }
    public function services()
    {
        return view('frontend.Services');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function clients()
    {
        return view('frontend.clients');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

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

        $user = new Contact();
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

        // Redirect or return a success response
        return redirect('/contact');
    }
    // public function career(Request $request)
    // {
    //     $search=$request['search']??"";
    //     if($search!=""){
    //         $certificate=Certificate::where('name',"LIKE","%$search%")->get();
    //     }
    //     else{
    //         $certificate=Certificate::all();
    //     }

    //     $data=compact('certificate', 'search');

    //     return view('frontend.career')->with($data);

    // }

    public function career(Request $request)
{
    $search = $request->input('search', '');

    // Initialize an empty collection
    $certificate = collect();

    // If there's a search query, fetch matching results
    if ($search != '') {
        $certificate = Certificate::where('Name', 'LIKE', "%$search%")->get();
        // $certificate = Certificate::where('Certificate_Id', 'LIKE', "%$search%")->get();
    }
    $vacancy= AddVacancy::all();

    $data = compact('certificate', 'search','vacancy');

    return view('frontend.career')->with($data);
}

// public function hiring()
//     {
//         return view('frontend.hiring');
//     }
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

    // echo "<pre>";
    // print_r($request->all());
}
}


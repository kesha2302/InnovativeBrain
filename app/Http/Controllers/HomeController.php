<?php

namespace App\Http\Controllers;

use App\Models\InternshipDetail;
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

        // Redirect or return a success response
        return redirect('/contact');
    }
}

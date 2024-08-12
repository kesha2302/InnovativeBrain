<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\InternshipDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:10',
            // 'resume' => 'required|file|mimes:pdf|max:2048',
             'resume' => 'required|file|mimes:pdf|max:2048',
            'message' => 'required|string|max:600'
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public'); // Store in public storage
        }

        // if ($request->hasFile('resume')) {
        //     $resume = $request->file('resume');
        //     $resumeContent = file_get_contents($resume->getRealPath());
        //     $base64Resume = base64_encode($resumeContent);
        // }
        // if ($request->hasFile('resume')) {
        //     $resumePath = $request->file('resume')->store('resume', 'public'); // Store in public storage
        // }

        // Process the validated data and save to database
        InternshipDetail::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'resume' => $resumePath,

            // 'resume' => $request->input('resume'),
            // 'resume' => $resumePath,
            'message' => $request->input('message')
        ]);


        // Redirect to a success page
        return redirect('/contact');
    }
}

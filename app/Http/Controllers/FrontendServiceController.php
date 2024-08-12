<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Inquiry;

class FrontendServiceController extends Controller
{
    public function submitForm(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:10',
            'interested_in' => 'required|string'
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Process the validated data and save to database
        Inquiry::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'interested_in' => $request->input('interested_in')
        ]);

        // return redirect()->route('Services')->with('success', 'Inquiry submitted successfully!');
    // }
        // Redirect to a success page
        return redirect('/service');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admindetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class AdminSignupLoginController extends Controller
{
    public function adminregister()
    {
        return view('AdminPanel.register');
    }

    public function adminregisterdata(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6',

        ]);


        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $user= new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect('/Adminlogin');

        // echo "<pre>";
        // print_r($request->all());
    }

    public function adminlogin()
    {
        return view('AdminPanel.login');
    }

    public function adminlogindata(Request $request)
    {
        Log::info('adminlogindata method called');
        Log::info($request->all());

        if (!$request->has('email') || !$request->has('password')) {
            Log::error('Email or password not found in request');
            return redirect()->back()->with('error', 'Invalid email or password.');
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $credentials = $request->only('email', 'password');
        Log::info('Credential Info');
        Log::info($credentials);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->put('admin_id', $user->admin_id);
            Log::info($user->admin_id);
            return redirect('/Admin');
        }

        Log::error('Invalid email or password');
        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function resetpassword()
    {
        return view('AdminPanel.resetpassword');
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);


        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Reset the password directly
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/Adminlogin');
    }

    public function adminlogout(Request $request)
        {
            $request->session()->forget('admin_id');
            Auth::logout();
            return redirect('/Adminlogin');
        }
}

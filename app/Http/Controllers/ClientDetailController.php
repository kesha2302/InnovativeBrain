<?php

namespace App\Http\Controllers;

use App\Models\ClientDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientDetailController extends Controller
{
    public function clients()
    {
        $clientDetails = ClientDetail::all();

        // return view('frontend.clients');
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


        // Redirect or return a success response
        return redirect('/clients');
    }
}

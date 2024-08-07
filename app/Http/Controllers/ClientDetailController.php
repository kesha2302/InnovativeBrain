<?php

namespace App\Http\Controllers;

use App\Models\ClientDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientDetailController extends Controller
{
    public function adminclientdetailview(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $clientdetail=ClientDetail::where('name',"LIKE","%$search%")->get();
        }
        else{
            $clientdetail=ClientDetail::all();
        }

        $data=compact('clientdetail', 'search');

        return view('AdminPanel.clientdetail')->with($data);
    }

    public function adminclientdetailform()
    {
        $clientdetail = new ClientDetail();
        $url=url('/Adminclientdetailform2');
        $title="Client Detail Form";
        $data=compact('url','title','clientdetail');

        return view('AdminPanel.clientdetailform')->with($data);
    }

    public function clientdetaildata(Request $request)
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
        if ($request->hasFile('Image')) {
            $file=$request->file('Image');
            $fileName = time() . "img." . $request->file('Image')->getClientOriginalExtension();
            $file->move('clientlogo', $fileName);
            $clientdetail->Image = $fileName;
        }

        $clientdetail->save();

        return redirect('/Adminclientdetail');

    }

    public function clientdetailtrash()
    {
        $clientdetail=ClientDetail::onlyTrashed()->get();
        $data=compact('clientdetail');

        return view ("AdminPanel.clientdetailtrash")->with($data);
    }

    public function clientdetaildelete($id)
    {
        $clientdetail=ClientDetail::find($id);
        if(!is_null($clientdetail)){
            $clientdetail->delete();
        }
        return redirect('Adminclientdetail');
    }

    public function clientdetailrestore($id)
    {
        $clientdetail=ClientDetail::withTrashed()->find($id);
        if(!is_null($clientdetail)){
            $clientdetail->restore();
        }
        return redirect('Adminclientdetail');
    }

    public function clientdetailforcedelete($id)
    {
        $clientdetail=ClientDetail::withTrashed()->find($id);
        if(!is_null($clientdetail)){
            $clientdetail->forceDelete();
        }
        return redirect()->back();
    }

    public function clientdetailedit($id)
    {
        $clientdetail=ClientDetail::find($id);
        if(is_null($clientdetail)){
            return redirect('Adminclientdetail');
        }
        else
        {
            $url=url('/clientdetail/update')."/".$id;
             $title="Update Client Details";
            $data=compact('clientdetail','url','title');

            return view('AdminPanel.clientdetailform')->with($data);
        }

    }

    public function clientdetailupdate($id, Request $request)
    {
        $clientdetail=ClientDetail::find($id);

        $clientdetail->name=$request->input('name');
        $clientdetail->description = $request->input('description');

        $clientdetail->save();

        return redirect('Adminclientdetail');
    }
}

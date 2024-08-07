<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CertificateController extends Controller
{
    public function admincertificateview(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $certificate=Certificate::where('name',"LIKE","%$search%")->get();
        }
        else{
            $certificate=Certificate::all();
        }

        $data=compact('certificate', 'search');

        return view('AdminPanel.certificate')->with($data);
    }

    public function admincertificteform()
    {
        $certificate = new Certificate();
        $url=url('/Admincertificateform2');
        $title="Certificate Detail Form";
        $data=compact('url','title','certificate');

        return view('AdminPanel.certificateform')->with($data);
    }

    public function certificatedata(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Certificate_id' => 'required|integer',
            'Name' => 'required|string',
            'Technology' => 'required|string',
            'Duration' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $certificate= new Certificate();
        $certificate->Certificate_id=$request->input('Certificate_id');
        $certificate->Name=$request->input('Name');
        $certificate->Technology=$request->input('Technology');
        $certificate->Duration=$request->input('Duration');

        $certificate->save();

        return redirect('/Admincertificate');

    }

    public function certificatetrash()
    {
        $certificate=Certificate::onlyTrashed()->get();
        $data=compact('certificate');

        return view ("AdminPanel.certificatetrash")->with($data);
    }

    public function certificatedelete($id)
    {
        $certificate=Certificate::find($id);
        if(!is_null($certificate)){
            $certificate->delete();
        }
        return redirect('Admincertificate');
    }

    public function certificaterestore($id)
    {
        $certificate=Certificate::withTrashed()->find($id);
        if(!is_null($certificate)){
            $certificate->restore();
        }
        return redirect('Admincertificate');
    }

    public function certificateforcedelete($id)
    {
        $certificate=Certificate::withTrashed()->find($id);
        if(!is_null($certificate)){
            $certificate->forceDelete();
        }
        return redirect()->back();
    }

    public function certificateedit($id)
    {
        $certificate=Certificate::find($id);
        if(is_null($certificate)){
            return redirect('Admincertificate');
        }
        else
        {
            $url=url('/certificate/update')."/".$id;
             $title="Update Certificate Details";
            $data=compact('certificate','url','title');

            return view('AdminPanel.certificateform')->with($data);
        }

    }

    public function certificateupdate($id, Request $request)
    {
        $certificate=Certificate::find($id);

        $certificate->Certificate_id=$request->input('Certificate_id');
        $certificate->Name=$request->input('Name');
        $certificate->Technology=$request->input('Technology');
        $certificate->Duration=$request->input('Duration');


        $certificate->save();

        return redirect('Admincertificate');
    }

}

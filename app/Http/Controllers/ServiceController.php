<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function adminservicesview(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $services=Services::where('title',"LIKE","%$search%")->get();
        }
        else{
            $services=Services::all();
        }

        $data=compact('services', 'search');

        return view('AdminPanel.services')->with($data);
    }

    public function adminserviceform()
    {
        $services = new Services();
        $url=url('/Adminserviceform2');
        $title="Service Details Form";
        $data=compact('url','title','services');

        return view('AdminPanel.servicesform')->with($data);
    }

    public function servicedata(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $services= new Services();
        $services->title=$request->input('title');
        $services->description=$request->input('description');

        $services->save();

        return redirect('/Adminservices');

    }

    public function servicetrash()
    {
        $services=Services::onlyTrashed()->get();
        $data=compact('services');

        return view ("AdminPanel.servicetrash")->with($data);
    }

    public function servicedelete($id)
    {
        $service=Services::find($id);
        if(!is_null($service)){
            $service->delete();
        }
        return redirect('Adminservices');
    }

    public function servicerestore($id)
    {
        $service=Services::withTrashed()->find($id);
        if(!is_null($service)){
            $service->restore();
        }
        return redirect('Adminservices');
    }

    public function serviceforcedelete($id)
    {
        $service=Services::withTrashed()->find($id);
        if(!is_null($service)){
            $service->forceDelete();
        }
        return redirect()->back();
    }

    public function serviceedit($id)
    {
        $services=Services::find($id);
        if(is_null($services)){
            return redirect('Adminservices');
        }
        else
        {
            $url=url('/service/update')."/".$id;
             $title="Update Service Details";
            $data=compact('services','url','title');

            return view('AdminPanel.servicesform')->with($data);
        }

    }

    public function serviceupdate($id, Request $request)
    {
        $services=Services::find($id);
        $services->title=$request->input('title');
        $services->description=$request->input('description');

        $services->save();

        return redirect('Adminservices');
    }
}

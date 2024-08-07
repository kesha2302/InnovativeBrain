<?php

namespace App\Http\Controllers;

use App\Models\AddVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    public function admincareerview(Request $request)
    {
        $search=$request['search']??"";
        if($search!=""){
            $career=AddVacancy::where('post_for',"LIKE","%$search%")->get();
        }
        else{
            $career=AddVacancy::all();
        }

        $data=compact('career', 'search');

        return view('AdminPanel.career')->with($data);
    }

    public function admincareerform()
    {
        $career = new AddVacancy();
        $url=url('/Admincareerform2');
        $title="Career Detail Form";
        $data=compact('url','title','career');

        return view('AdminPanel.careerform')->with($data);
    }

    public function careerdata(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'post_for' => 'required|string',
            'experience' => 'required|string',
            'required_candidate' => 'required|integer',
            'skills_req' => 'required|string',
            'description' => 'required|string',
            'type_of_job' => 'required|string',
            'last_date' => 'required|date',
            'responsibility' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $career= new AddVacancy();
        $career->post_for=$request->input('post_for');
        $career->experience=$request->input('experience');
        $career->required_candidate=$request->input('required_candidate');
        $career->skills_req=$request->input('skills_req');
        $career->description=$request->input('description');
        $career->type_of_job=$request->input('type_of_job');
        $career->last_date=$request->input('last_date');
        $career->responsibility=$request->input('responsibility');

        $career->save();

        return redirect('/Admincareer');

    }

    public function careertrash()
    {
        $career=AddVacancy::onlyTrashed()->get();
        $data=compact('career');

        return view ("AdminPanel.careertrash")->with($data);
    }

    public function careerdelete($id)
    {
        $career=AddVacancy::find($id);
        if(!is_null($career)){
            $career->delete();
        }
        return redirect('Admincareer');
    }

    public function careerrestore($id)
    {
        $career=AddVacancy::withTrashed()->find($id);
        if(!is_null($career)){
            $career->restore();
        }
        return redirect('Admincareer');
    }

    public function careerforcedelete($id)
    {
        $career=AddVacancy::withTrashed()->find($id);
        if(!is_null($career)){
            $career->forceDelete();
        }
        return redirect()->back();
    }

    public function careeredit($id)
    {
        $career=AddVacancy::find($id);
        if(is_null($career)){
            return redirect('Admincareer');
        }
        else
        {
            $url=url('/career/update')."/".$id;
             $title="Update Career Details";
            $data=compact('career','url','title');

            return view('AdminPanel.careerform')->with($data);
        }

    }

    public function careerupdate($id, Request $request)
    {
        $career=AddVacancy::find($id);

        $career->post_for=$request->input('post_for');
        $career->experience=$request->input('experience');
        $career->required_candidate=$request->input('required_candidate');
        $career->skills_req=$request->input('skills_req');
        $career->description=$request->input('description');
        $career->type_of_job=$request->input('type_of_job');
        $career->last_date=$request->input('last_date');
        $career->responsibility=$request->input('responsibility');

        $career->save();

        return redirect('Admincareer');
    }
}

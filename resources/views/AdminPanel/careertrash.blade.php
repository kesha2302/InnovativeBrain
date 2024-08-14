@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Trash Career Vacancy</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">

                <a href="{{ url('/Admincareer') }}">
                    <button class="btn btn-dark ml-2">
                        View Career Vacancy</button>
                </a>
            </div>
        </div>
    </nav>




    <div class="card mt-2" style="width:60rem;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Vacancy Id</th>
                            <th style="width: 15%;">Post</th>
                            <th style="width: 10%;">Experience</th>
                            <th style="width: 10%;">Required Candidate</th>
                            <th style="width: 60%;">Skills</th>
                            <th style="width: 10%;">Description</th>
                            <th style="width: 10%;">Type of Job</th>
                            <th style="width: 10%;">Last Date</th>
                            <th style="width: 30%;">Responsibility</th>
                            <th style="width: 10%;">Created At</th>
                            <th style="width: 10%;">Updated At</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($career as $career )
                        <tr>
                            <td>{{$career->vacancy_id}}</td>
                            <td>{{$career->post_for}}</td>
                            <td>{{$career->experience}}</td>
                            <td>{{$career->required_candidate}}</td>
                            <td>{{$career->skills_req}}</td>
                            <td>{{$career->description}}</td>
                            <td>{{$career->type_of_job}}</td>
                            <td>{{$career->last_date}}</td>
                            <td>{{$career->responsibility}}</td>
                            <td>{{$career->created_at}}</td>
                            <td>{{$career->updated_at}}</td>
                            <td>
                                <a href="{{route('career.forcedelete',['id'=>$career->vacancy_id])}}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('career.restore',['id'=>$career->vacancy_id])}}">
                                  <button class="btn btn-primary">Restore</button>
                                </a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


   </div>
@endsection

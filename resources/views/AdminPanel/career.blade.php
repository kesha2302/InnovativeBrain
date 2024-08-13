@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Career Vacancy</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" type="search" value="{{$search}}" name="search"
                placeholder="Search by post" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Admincareer')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>
            <div class="d-flex">
                <button type="button" onclick="window.location='{{ url('/Admincareerform') }}'" class="btn btn-dark btn-circle font-rights me-md-2">
                    <i class="bi bi-plus"></i> Add
                </button>
                <a href="{{ url('/Admincareertrash') }}">
                    <button class="btn btn-danger ml-2" >
                        Trashed Data</button>
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
                            <th style="width: 20%;">Skills</th>
                            <th style="width: 40%;">Description</th>
                            <th style="width: 10%;">Type of Job</th>
                            <th style="width: 10%;">Last Date</th>
                            <th style="width: 40%;">Responsibility</th>
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
                            <td>
                                <ul>
                                    @php
                                        $skills_req = explode(',', $career->skills_req);
                                    @endphp
                                    @foreach ($skills_req as $skills)
                                        <li>{{ $skills }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{$career->description}}</td>
                            <td>{{$career->type_of_job}}</td>
                            <td>{{$career->last_date}}</td>
                            <td>{{$career->responsibility}}</td>
                            <td>{{$career->created_at}}</td>
                            <td>{{$career->updated_at}}</td>
                            <td>
                                <a href="{{route('career.delete',['id'=>$career->vacancy_id])}}">
                                <button class="btn btn-danger">Trash</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('career.edit',['id'=>$career->vacancy_id])}}">
                                  <button class="btn btn-primary">Update</button>
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

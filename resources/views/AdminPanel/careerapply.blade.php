@extends('AdminPanel.layout.main')

@section('main-container')
<h3 class='m-2'>Candidate Details </h3>
<h5 class="m-2">Details of Candidates who have applied for the career opening.</h5>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" value="{{$search}}" type="search"  name="search"
                placeholder="Search by name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Admincareerapply')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>

        </div>
    </nav>


    <div class="card mt-2" style="width:62rem;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 15%;">Id</th>
                            <th style="width: 15%;">Vacancy Name</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 20%;">Email</th>
                            <th style="width: 20%;">Contact</th>
                            <th style="width: 20%;">Resume</th>
                            <th style="width: 20%;">Linked Url</th>
                            <th style="width: 10%;">Upload Time</th>
                            <th style="width: 10%;">Update Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($careerapply as $ca )
                        <tr>
                            <td>{{$ca->careerapply_id}}</td>
                            <td>{{$ca->vacancy->post_for}}</td>
                            <td>{{$ca->name}}</td>
                            <td>{{$ca->email}}</td>
                            <td>{{$ca->contact}}</td>
                            <td>
                                @if($ca->resume)
                                    <a href="{{ url('Career_Resume/' . $ca->resume) }}" download="{{ $ca->resume }}">
                                        <button class="btn btn-sm btn-primary">Download</button>
                                    </a>
                                @else
                                    No Resume
                                @endif
                            </td>
                            <td>{{$ca->linkedin_url}}</td>
                            <td>{{$ca->created_at}}</td>
                            <td>{{$ca->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


   </div>
@endsection

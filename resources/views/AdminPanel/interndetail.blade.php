@extends('AdminPanel.layout.main')

@section('main-container')
<h3 class='m-2'>Interns Detail</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" value="{{$search}}" type="search"  name="search"
                placeholder="Search by name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Adminintern')}}">
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
                            <th style="width: 15%;">Intern Id</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 20%;">Email</th>
                            <th style="width: 20%;">Contact</th>
                            <th style="width: 50%;">Message</th>
                            <th style="width: 20%;">Resume</th>
                            <th style="width: 10%;">Upload Time</th>
                            <th style="width: 10%;">Update Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($internship as $intern )
                        <tr>
                            <td>{{$intern->intern_id}}</td>
                            <td>{{$intern->name}}</td>
                            <td>{{$intern->email}}</td>
                            <td>{{$intern->contact}}</td>
                            <td>{{$intern->message}}</td>
                            {{-- <td>{{$intern->resume}}</td> --}}
                            <td>
                                @if($intern->resume)
                                    <a href="{{ url('Resumes/' . $intern->resume) }}" download="{{ $intern->resume }}">
                                        <button class="btn btn-sm btn-primary">Download</button>
                                    </a>
                                @else
                                    No Resume
                                @endif
                            </td>

                            <td>{{$intern->created_at}}</td>
                            <td>{{$intern->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


   </div>
@endsection

@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Certificate Details</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" type="search" value="{{$search}}" name="search"
                placeholder="Search by name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Admincertificate')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>
            <div class="d-flex">
                <button type="button" onclick="window.location='{{ url('/Admincertificateform') }}'" class="btn btn-dark btn-circle font-rights me-md-2">
                    <i class="bi bi-plus"></i> Add
                </button>
                <a href="{{ url('/Admincertificatetrash') }}">
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
                            <th style="width: 10%;">No.</th>
                            <th style="width: 15%;">Certificate Id</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 20%;">Technology</th>
                            <th style="width: 20%;">Duration</th>
                            <th style="width: 10%;">Created_at</th>
                            <th style="width: 10%;">Updated_at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificate as $cd )
                        <tr>
                            <td>{{$cd->Id}}</td>
                            <td>{{$cd->Certificate_id}}</td>
                            <td>{{$cd->Name}}</td>
                            <td>{{$cd->Technology}}</td>
                            <td>{{$cd->Duration}}</td>
                            <td>{{$cd->created_at}}</td>
                            <td>{{$cd->updated_at}}</td>
                            <td>
                                <a href="{{route('certificate.delete',['id'=>$cd->Id])}}">
                                <button class="btn btn-danger">Trash</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('certificate.edit',['id'=>$cd->Id])}}">
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

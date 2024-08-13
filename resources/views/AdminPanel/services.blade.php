@extends('AdminPanel.layout.main')

@section('main-container')

 <div class='mt-3 container'>
    <h3>Services</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">


            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" value="{{$search}}" type="search"  name="search"
                placeholder="Search by service name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Adminservices')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>
            <div class="d-flex">
                <button type="button" onclick="window.location='{{ url('/Adminserviceform') }}'" class="btn btn-dark btn-circle font-rights me-md-2">
                    <i class="bi bi-plus"></i> Add
                </button>
                <a href="{{ url('/Adminservicetrash') }}">
                    <button class="btn btn-danger ml-2" >
                        Trashed Data</button>
                </a>
            </div>
        </div>
    </nav>


    <div class="card mt-2" style="width:62rem;">
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 15%;">Service Id</th>
                            <th style="width: 15%;">Title</th>
                            <th style="width: 60%;">Description</th>
                            <th style="width: 10%;">Created At</th>
                            <th style="width: 10%;">Updated At</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service )
                        <tr>
                            <td>{{$service->services_id}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td>{{$service->created_at}}</td>
                            <td>{{$service->updated_at}}</td>
                            <td>
                                <a href="{{route('service.delete',['id'=>$service->services_id])}}">
                                <button class="btn btn-danger">Trash</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('service.edit',['id'=>$service->services_id])}}">
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

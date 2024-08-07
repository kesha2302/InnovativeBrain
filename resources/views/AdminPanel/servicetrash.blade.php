@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-2 container'>
    <h3>Trash Packages</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">
                {{-- <button type="button" onclick="window.location='{{ url('/Adminpackageform') }}'" class="btn btn-dark btn-circle font-rights">
                    <i class="bi bi-plus"></i>
                </button> --}}
                <a href="{{ url('/Adminservices') }}">
                    <button class="btn btn-dark ml-2">
                        View Packages</button>
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
                            <th style="width: 15%;">Service Id</th>
                            <th style="width: 15%;">Title</th>
                            <th style="width: 60%;">Description</th>
                            <th style="width: 10%;">Created_at</th>
                            <th style="width: 10%;">Updated_at</th>
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
                                <a href="{{route('service.forcedelete',['id'=>$service->services_id])}}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('service.restore',['id'=>$service->services_id])}}">
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

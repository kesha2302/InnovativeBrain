@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-2 container'>
    <h3>Trash Services</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">
                <a href="{{ url('/Adminservices') }}">
                    <button class="btn btn-dark ml-2">
                        View Services</button>
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

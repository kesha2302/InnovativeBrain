@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Client Details</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <form class="d-flex" action="">
                <input class="form-control me-5 mr-sm-2" type="search" value="{{$search}}" name="search"
                placeholder="Search by name" aria-label="Search" style="width: 500px;">
                <button class="btn btn-dark">Search</button>
                <span style="margin-left: 10px;">
                    <a href="{{url('/Adminclientdetail')}}">
                        <button class="btn btn-dark" type="button">Reset</button>
                    </a>
                </span>
            </form>
            <div class="d-flex">
                <button type="button" onclick="window.location='{{ url('/Adminclientdetailform') }}'" class="btn btn-dark btn-circle font-rights me-md-2">
                    <i class="bi bi-plus"></i> Add
                </button>
                <a href="{{ url('/Adminclientdetailtrash') }}">
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
                            <th style="width: 10%;">Client Id</th>
                            <th>Image</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 40%;">Description</th>
                            <th style="width: 10%;">Created At</th>
                            <th style="width: 10%;">Updated At</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientdetail as $cd )
                        <tr>
                            <td>{{$cd->client_id}}</td>
                            <td><img src="{{asset('clientlogo/'.$cd->Image)}}" class="img-fluid rounded"
                                alt="Image" style="width: 500px; height:50px;"></td>
                            <td>{{$cd->name}}</td>
                            <td>{{$cd->description}}</td>
                            <td>{{$cd->created_at}}</td>
                            <td>{{$cd->updated_at}}</td>
                            <td>
                                <a href="{{route('clientdetail.delete',['id'=>$cd->client_id])}}">
                                <button class="btn btn-danger">Trash</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('clientdetail.edit',['id'=>$cd->client_id])}}">
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

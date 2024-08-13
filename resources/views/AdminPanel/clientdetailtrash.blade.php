@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Trash Client Details</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">

                <a href="{{ url('/Admincareer') }}">
                    <button class="btn btn-dark ml-2">
                        View Client Details</button>
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
                                <a href="{{route('clientdetail.forcedelete',['id'=>$cd->client_id])}}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('clientdetail.restore',['id'=>$cd->client_id])}}">
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

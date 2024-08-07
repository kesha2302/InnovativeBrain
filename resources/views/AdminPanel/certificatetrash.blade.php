@extends('AdminPanel.layout.main')

@section('main-container')
<div class='mt-3 container'>
    <h3>Certificate Trash</h3>
    <hr>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="d-flex">
                {{-- <button type="button" onclick="window.location='{{ url('/Adminpackageform') }}'" class="btn btn-dark btn-circle font-rights">
                    <i class="bi bi-plus"></i>
                </button> --}}
                <a href="{{ url('/Admincertificate') }}">
                    <button class="btn btn-dark ml-2">
                        View Certificate</button>
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
                            td>{{$cd->Certificate_id}}</td>
                            <td>{{$cd->Name}}</td>
                            <td>{{$cd->Technology}}</td>
                            <td>{{$cd->Duration}}</td>
                            <td>{{$cd->created_at}}</td>
                            <td>{{$cd->updated_at}}</td>
                            <td>
                                <a href="{{route('certificate.forcedelete',['id'=>$cd->Id])}}">
                                <button class="btn btn-danger">Delete</button>
                                </a>
                                </td>
                                <td>
                                <a href="{{route('certificate.restore',['id'=>$cd->Id])}}">
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

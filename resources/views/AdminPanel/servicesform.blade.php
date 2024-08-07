@extends('AdminPanel.layout.main')

@section('main-container')
<div class="card  mt-5 mx-auto shadow-lg" style="width:50rem;">

    <div class="card-header mt-2">
        <h3>{{$title}}</h3>
    </div>


        <div class="card-body">
            {{-- <form action="{{url('/')}}/Adminpackageform2" method="POST"> --}}
                <form action="{{url($url)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3" >
                    <label class="form-label">Service Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$services->title}}"/>
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{$services->description}}"/>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
            </form>
        </div>


</div>
@endsection

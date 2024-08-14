@extends('AdminPanel.layout.main')

@section('main-container')
<div class="card  mt-5 mx-auto shadow-lg" style="width:50rem;">

    <div class="card-header mt-2">
        <h3>{{$title}}</h3>
    </div>


        <div class="card-body">

                <form action="{{url($url)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3" >
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{$clientdetail->name}}"/>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{$clientdetail->description}}"/>
                    @error('descriptiom')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                @if(empty($clientdetail->Image))
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" name="Image" id="formFile">
                    @error('Image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                @endif


                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
            </form>
        </div>


</div>
@endsection

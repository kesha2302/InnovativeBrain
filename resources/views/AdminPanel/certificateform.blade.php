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
                    <label class="form-label">Certificate Id:</label>
                    <input type="text" name="Certificate_id" class="form-control" value="{{$certificate->Certificate_id}}"/>
                    @error('Cerrtificate_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="Name" class="form-control" value="{{$certificate->Name}}"/>
                    @error('Name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Technology:</label>
                    <input type="text" name="Technology" class="form-control" value="{{$certificate->Technology}}"/>
                    @error('Technology')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Duration:</label>
                    <input type="text" name="Duration" class="form-control" value="{{$certificate->Duration}}"/>
                    @error('Duration')
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

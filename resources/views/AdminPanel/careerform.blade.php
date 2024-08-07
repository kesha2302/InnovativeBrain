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
                    <label class="form-label">Post:</label>
                    <input type="text" name="post_for" class="form-control" value="{{$career->post_for}}"/>
                    @error('post_for')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Experience:</label>
                    <input type="text" name="experience" class="form-control" value="{{$career->experience}}"/>
                    @error('experience')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Required Candidate:</label>
                    <input type="text" name="required_candidate" class="form-control" value="{{$career->required_candidate}}"/>
                    @error('required_candidate')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Skills Required:</label>
                    <input type="text" name="skills_req" class="form-control" value="{{$career->skills_req}}"/>
                    @error('skills_req')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{$career->description}}"/>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Type Of Job:</label>
                    <input type="text" name="type_of_job" class="form-control" value="{{$career->type_of_job}}"/>
                    @error('type_of_job')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Last Date:</label>
                    <input type="text" name="last_date" class="form-control" value="{{$career->last_date}}"
                    placeholder="YYYY/MM/DD"/>
                    @error('last_date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3" >
                    <label class="form-label">Responsibility:</label>
                    <input type="text" name="responsibility" class="form-control" value="{{$career->responsibility}}"/>
                    @error('responsibility')
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

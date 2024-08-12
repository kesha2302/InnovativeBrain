@extends('frontend.layout.main')

@section('main-container')
<h2 class="text-center m-3">Vacancy Details</h2>

<div class="card mt-2 text-center" style="width: 100%;">
    <div class="card-body">
        <h4 class="card-title">Post: {{ $vacancy->post_for }}</h4>
        <p class="card-text">
            <strong>Experience Required:</strong> {{ $vacancy->experience }}<br>
            <strong>Skills Required:</strong> {{ $vacancy->skills_req }}<br>
            <strong>Description:</strong> {{ $vacancy->description }}<br>
            <strong>Type of Job:</strong> {{ $vacancy->type_of_job }}<br>
            <strong>Responsibility:</strong> {{ $vacancy->responsibility }}<br>
            <strong>Last Date to Apply:</strong> {{ $vacancy->last_date }}<br>
        </p>

        <a href="javascript:void(0);" style="background-color: #304a7f; color: white; padding: 15px 30px; font-size: 16px; text-decoration: none; border-radius: 30px; font-weight: bold; display: inline-block; transition: background-color 0.3s ease, transform 0.3s ease; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
        onmouseover="this.style.backgroundColor='grey'; this.style.transform='scale(1.05)';"
        onmouseout="this.style.backgroundColor='#004a7c'; this.style.transform='scale(1)';"
        onclick="document.getElementById('applyForm').style.display='block';">
         Apply
     </a>
    </div>
</div>

     <!-- Hidden Form -->
     <div id="applyForm" style="display:none; margin-top: 20px;">
        <div class="card mt-2  mx-auto rounded" style="width: 70rem;">
        <div class="card-body">
                <form action="{{url('/applyvacancyform')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="vacancy_id" value="{{ $vacancy->vacancy_id }}">


                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control"/>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="text" name="email" class="form-control"/>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact:</label>
                    <input type="text" name="contact" class="form-control"/>
                    @error('contact')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Resume:</label>
                    <input  type="file" name="resume" class="form-control"/>
                    @error('resume')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn Url:</label>
                    <input type="text" name="linkedin_url" class="form-control"/>
                    @error('linkedin_url')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="text-center">
                    <button type="submit" class="btn rounded-pill" style="background-color: #304a7f; color:aliceblue">Submit</button>
                    </div>
            </form>
        </div>
     </div>
     </div>


@endsection


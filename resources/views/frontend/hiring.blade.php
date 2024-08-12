@extends('frontend.layout.main')

@section('main-container')
<div style="background: linear-gradient(135deg, #1e3a8a, #002f4a); padding: 80px 20px; text-align: center; color: white; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
    <h2 style="font-size: 18px; font-weight: bold; color: #e0e0e0; margin: 0 0 10px; letter-spacing: 2px; text-transform: uppercase; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Open Positions</h2>
    <h1 style="font-size: 48px; font-weight: bold; color: white; margin: 0 0 20px; text-shadow: 0 4px 8px rgba(0, 0, 0, 0.4); background-color: rgba(255, 255, 255, 0.1); display: inline-block; padding: 10px 20px; border-radius: 10px;">
        Join our growing team!
    </h1>
    <p style="font-size: 18px; line-height: 1.8; margin: 0 0 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
        We develop and operationalize exceptional products, solutions, and ecosystems for Enterprise.
    </p>
</div>

<div style="margin-top: 20px; text-align: left; padding: 20px;">
    <a href="#" style="color: #002f4a; font-weight: bold; text-decoration: none;">Home</a>
    <span style="color: #6b7280;"> > </span>
    <a href="#" style="color: #002f4a; font-weight: bold; text-decoration: none;">Careers</a>
    <span style="color: #6b7280;"> > </span>
    <a href="#" style="color: #6b7280; text-decoration: none;">Open Positions</a>
</div>

<div class="card text-center">
    <div class="card-body">
        @if($vacancy->isEmpty())
            <p>No Vacancy Available</p>
        @else
        @foreach($vacancy as $vacancy)
        <div class="mb-2">
            <a href="{{ route('vacancy.show', $vacancy->vacancy_id) }}">
                {{$vacancy->post_for}}
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection

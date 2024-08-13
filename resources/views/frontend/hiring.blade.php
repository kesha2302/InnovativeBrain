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


<div class="card text-center" style="border: 1px solid #002f4a; border-radius: 10px; box-shadow: 0 4px 8px #002f4a; background-color: #f9f9f9; padding: 15px;">
    <div class="card-body" style="padding: 20px;">
        @if($vacancy->isEmpty())
            <p style="color: #ff0000; font-size: 18px; font-weight: bold; font-family: Arial, sans-serif;">No Vacancy Available</p>
        @else
        @foreach($vacancy as $vacancy)
        <div class="mb-2" style="margin-bottom: 10px; background-color: #e0f7fa; border-radius: 5px; padding: 10px;">
            <a href="{{ route('vacancy.show', $vacancy->vacancy_id) }}" style="text-decoration: none; color: #002f4a; font-size: 20px; font-weight: bold; display: block; transition: background-color 0.3s, color 0.3s;">
                {{$vacancy->post_for}}
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>


@endsection

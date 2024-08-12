@extends('frontend.layout.main')

@section('main-container')
<style>
    .pagelayer-row-holder {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .pagelayer-col {
        width: 100%;
        max-width: 1200px;
        padding: 20px;
        background-color: #004a7c;
        border-radius: 12px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        margin-bottom: 40px;
    }

    .pagelayer-col-holder {
        text-align: center;
    }
    .p-aib1329 .pagelayer-post-title {
        color: #ffffff;
        font-size: 50px;
        font-weight: 700;
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) and (min-width: 501px) {
        .p-aib1329 .pagelayer-post-title {
            font-size: 42px;
        }
    }

    @media (max-width: 500px) {
        .p-aib1329 .pagelayer-post-title {
            font-size: 34px;
        }
    }

    /* Breadcrumb Styles */
    .p-t6u5566 .pagelayer-breadcrumb-section a {
        color: #ffffff;
        text-decoration: none;
    }

    .p-t6u5566 .pagelayer-breadcrumb-section a:hover {
        color: #a8c8f4;
        text-decoration: underline;
    }

    .p-t6u5566 .pagelayer-breadcrumb-section {
        color: #ffffff;
        margin-bottom: 20px;
    }

    .p-t6u5566 .pagelayer-breadcrumb-sep {
        color: #ffffff;
    }
    .search-section {
        text-align: center;
        margin: 40px 0;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .search-section h2 {
        color: #004a7c;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-form input[type="search"] {
        width: 60%;
        padding: 10px 20px;
        font-size: 16px;
        border: 2px solid #004a7c;
        border-radius: 50px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .search-form input[type="search"]:focus {
        border-color: #a8c8f4;
        outline: none;
        box-shadow: 0 0 10px rgba(0, 74, 124, 0.2);
    }

    .search-form button {
        background-color: #004a7c;
        color: #ffffff;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .search-form button:hover {
        background-color: #002f4a;
    }

    .reset-button {
        margin-left: 10px;
    }

    .reset-button a button {
        background-color: #ff4a4a;
        color: #ffffff;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .reset-button a button:hover {
        background-color: #cc3a3a;
    }
    .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        background-color: #f4f4f4;
        padding: 20px;
    }

    .card-body {
        padding: 0;
    }

    .table-responsive {
        border-radius: 12px;
        overflow: hidden;
        margin: 20px 0;
    }

    .table {
        width: 100%;
        margin-bottom: 0;
        background-color: #ffffff;
    }

    .table thead th {
        background-color: #004a7c;
        color: #ffffff;
        font-weight: bold;
        text-align: center;
        padding: 15px;
        border: none;
    }

    .table tbody tr {
        transition: background-color 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table tbody td {
        text-align: center;
        padding: 15px;
        border: none;
        font-size: 16px;
        color: #333;
    }

    .table tbody td:first-child {
        border-radius: 12px 0 0 12px;
    }

    .table tbody td:last-child {
        border-radius: 0 12px 12px 0;
    }

    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table thead {
            display: none;
        }

        .table tbody tr {
            display: block;
            margin-bottom: 10px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .table tbody td {
            display: block;
            text-align: right;
            font-size: 14px;
            border-bottom: 1px solid #e9e9e9;
        }

        .table tbody td:last-child {
            border-bottom: 0;
        }

        .table tbody td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            color: #004a7c;
        }
    }
    h2 {
        color: #004a7c;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: center;
    }
</style>

<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
    <div class="p-hdr8599 pagelayer-col">
        <div class="pagelayer-col-holder">
            <div class="p-aib1329 pagelayer-post_title">
                <div class="pagelayer-post-title">Career</div>
            </div>
            <div class="p-t6u5566 pagelayer-breadcrumb">
                <span class="pagelayer-breadcrumb-section">
                    <a href="https://www.innobraintechnologies.in" rel="nofollow">Home</a>
                    <b class="pagelayer-breadcrumb-sep">&nbsp;»&nbsp;</b>
                    <span>Career</span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="search-section">
    <h2>Search Your Certificate Here</h2>
    <form class="search-form" action="">
        <input class="form-control" type="search" value="{{$search}}" name="search" placeholder="Search by name" aria-label="Search">
        <button class="btn">Search</button>
        <span class="reset-button">
            <a href="{{url('/career')}}">
                <button class="btn" type="button">Reset</button>
            </a>
        </span>
    </form>
</div>

@if($certificate->isNotEmpty())
<div class="card mt-2" style="width: 100%;">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificate as $cd)
                        <tr>
                            <td>{{$cd->Id}}</td>
                            <td>{{$cd->Certificate_id}}</td>
                            <td>{{$cd->Name}}</td>
                            <td>{{$cd->Technology}}</td>
                            <td>{{$cd->Duration}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif

{{-- Vacancy Details --}}

<div class="container" style="display: flex; align-items: center; justify-content: space-between; padding: 50px; background-color: white; max-width: 1200px; margin: 0 auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px;">
    <div class="text-section" style="flex: 1; padding-right: 20px;">
        <h1 style="font-size: 48px; margin: 0; color: #333;">
            <span class="highlight" style="color: #1b47da;">Careers</span><br>at InnoBrain
        </h1>
        <p style="font-size: 18px; color: #666; margin-top: 20px; line-height: 1.6;">
            We provide an opportunity to solve difficult problems creatively, and the infrastructure to ensure you are constantly developing.
        </p>
    </div>
    <div class="image-section" style="flex: 1; display: flex; justify-content: center; align-items: center;">
        <img src="https://img.freepik.com/premium-vector/flat-career-people-concept-design-team-work-concept_123447-3946.jpg?w=740" alt="Team meeting" style="width: 100%; max-width: 500px; height: auto; border-radius: 8px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    </div>
</div>

<div style="background: linear-gradient(135deg, #1e3a8a, #002f4a); padding: 60px 20px; text-align: center; color: white; border-radius: 10px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
    <h2 style="font-size: 14px; font-weight: bold; color: #e0e0e0; margin: 0 0 10px; letter-spacing: 2px; text-transform: uppercase; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);">Join Us</h2>
    <h1 style="font-size: 48px; font-weight: bold; color: white; margin: 0 0 20px; text-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);">We are Hiring!</h1>
    <p style="font-size: 18px; line-height: 1.8; margin: 0 0 30px; max-width: 800px; margin-left: auto; margin-right: auto;">
        Are you passionate about technology and want to work in high-performing teams? Join us! We work with multi-billion dollar Fortune 500 customers on cutting-edge technologies who demand nothing less than excellence from us. We are committed to building a workplace that fosters inclusivity along with productivity. We offer highly competitive benefits and compensation to our employees.
    </p>
    <a href="{{url('/hiring')}}" style="background-color: #c9c0c3; color: white; padding: 15px 30px; font-size: 16px; text-decoration: none; border-radius: 30px; font-weight: bold; display: inline-block; transition: background-color 0.3s ease, transform 0.3s ease; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
       onmouseover="this.style.backgroundColor='#ff4081'; this.style.transform='scale(1.05)';"
       onmouseout="this.style.backgroundColor='#c9c0c3'; this.style.transform='scale(1)';">
        View Open Positions
    </a>
</div>



@endsection


@extends('frontend.layout.main')

@section('main-container')

    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

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

        /* Post Title Styles */
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

        /* Inquiry Form Styles */
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            max-width: 900px;
            margin: 20px auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #004a7c;
            text-align: center;
            margin-bottom: 30px;
            font-size: 30px;
        }

        label {
            margin-bottom: 8px;
            color: #555555;
            font-weight: 600;
        }

        input, select {
            padding: 7px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 8px;
        }

        input:focus, select:focus {
            border-color: #004a7c;
            outline: none;
            box-shadow: 0 0 6px rgba(0, 74, 124, 0.5);
        }

        .form-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 700px;
}

form h2 {
    margin-bottom: 20px;
    color: #333;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
select:focus {
    border-color: #007BFF;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

button {
    background-color: #004a7c;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #00376b;
}

button.small {
    padding: 8px 12px;
    font-size: 12px;
}

        /* Main Container Styles */
        .main-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .left-column {
            width: 45%;
            background: url('frontend/img/service.png') no-repeat center center;
            background-size: cover;
            color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .left-column .service-item {
            margin-bottom: 20px;
            background-color: rgba(0, 74, 124, 0.7); /* Slightly darker overlay for readability */
            padding: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .left-column .service-item h3 {
            font-size: 24px;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .left-column .service-item h3 i {
            margin-right: 12px;
        }

        .right-column {
            width: 50%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .right-column h2 {
            font-size: 38px;
            color: #004a7c;
            margin-bottom: 20px;
        }

        .right-column .service-description {
            margin-bottom: 20px;
        }

        .right-column .service-description h3 {
            font-size: 28px;
            color: #004a7c;
            margin-bottom: 10px;

        }

        .right-column .service-description p {
            font-size: 18px;
            color: #555555;
            text-align: justify;
        }
    </style>
{{-- </head> --}}
{{-- <body> --}}
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
        <div class="p-hdr8599 pagelayer-col">
            <div class="pagelayer-col-holder">
                <div class="p-aib1329 pagelayer-post_title">
                    <div class="pagelayer-post-title">Services</div>
                </div>
                <div class="p-t6u5566 pagelayer-breadcrumb">
                    <span class="pagelayer-breadcrumb-section">
                        <a href="{{url('/')}}" rel="nofollow">Home</a>
                        <b class="pagelayer-breadcrumb-sep">&nbsp;»&nbsp;</b>
                        <span>Services</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="left-column">
            <div class="service-item">
                <h3><i class="fa fa-check-circle"></i> Requirement based IT Solutions</h3>
            </div>
            <div class="service-item">
                <h3><i class="fa fa-check-circle"></i> Software Tools & Technology Training</h3>
            </div>
            <div class="service-item">
                <h3><i class="fa fa-check-circle"></i> Summer / Winter Internship</h3>
            </div>
        </div>
        <div class="right-column ">
            <h2>Our Services</h2>
            @foreach($services as $service)
            <div class="service-description">
                <h3>{{$service->title}}</h3>
                <p>{{$service->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <br>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h3 class="section-title bg-white text-center px-3" style="font-size: 30px; color: #00008b;">Inquiry Form</h3>
    </div>
    <div class="form-container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('submit2.form') }}" method="POST">
            @csrf

            <label for="name">Your Name *</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email Id *</label>
            <input type="email" id="email" name="email" required>

            <label for="contact">Your Contact Number *</label>
            <input type="tel" id="contact" name="contact" required>

            <label for="interest">Interested in ?</label>
            <select id="interest" name="interested_in">
                <option value="IT Solutions">IT Solutions</option>
                <option value="Internship">Internship</option>
                <option value="IT Training">IT Training</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit" class="small">Submit</button>
        </form>
        <h5>Are you looking for an internship ?<a href="{{url('/contact')}}" style="color:#004a7c">Click Here</a> </h5>
    </div>

@endsection

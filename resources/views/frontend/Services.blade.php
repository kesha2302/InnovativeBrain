{{-- @extends('frontend.layout.main')

@section('main-container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - InnoBrain Technologies</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
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
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .pagelayer-col-holder {
            text-align: center;
        }

        /* Post Title Styles */
        .p-aib1329 .pagelayer-post-title {
            color: #ffffff;
            font-size: 48px;
            font-weight: 700;
            margin: 0;
        }

        @media (max-width: 768px) and (min-width: 501px) {
            .p-aib1329 .pagelayer-post-title {
                font-size: 40px;
            }
        }

        @media (max-width: 500px) {
            .p-aib1329 .pagelayer-post-title {
                font-size: 32px;
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
        }

        .p-t6u5566 .pagelayer-breadcrumb-sep {
            color: #ffffff;
        }

        /* Inquiry Form Styles */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            max-width: 700px;
            margin: 40px auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #004a7c;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        label {
            margin-bottom: 5px;
            color: #555555;
            font-weight: bold;
        }

        input, select {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 6px;
        }

        input:focus, select:focus {
            border-color: #004a7c;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 74, 124, 0.5);
        }

        button {
            background-color: #004a7c;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #00376b;
        }

        /* Main Container Styles */
        .main-container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            gap: 20px;
        }

        .left-column {
            width: 45%;
            background: url('frontend/img/service.png') no-repeat center center;
            background-size: cover;
            color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .left-column .service-item {
            margin-bottom: 20px;
            background-color: rgba(0, 74, 124, 0.6); /* Slightly darker overlay for readability */
            padding: 15px;
            border-radius: 8px;
        }

        .left-column .service-item h3 {
            font-size: 22px;
            display: flex;
            align-items: center;
        }

        .left-column .service-item h3 i {
            margin-right: 10px;
        }

        .right-column {
            width: 50%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .right-column h2 {
            font-size: 36px;
            color: #004a7c;
            margin-bottom: 20px;
        }

        .right-column .service-description {
            margin-bottom: 20px;
        }

        .right-column .service-description h3 {
            font-size: 26px;
            color: #004a7c;
            margin-bottom: 10px;
        }

        .right-column .service-description p {
            font-size: 18px;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
        <div class="p-hdr8599 pagelayer-col">
            <div class="pagelayer-col-holder">
                <div class="p-aib1329 pagelayer-post_title">
                    <div class="pagelayer-post-title">Services</div>
                </div>
                <div class="p-t6u5566 pagelayer-breadcrumb">
                    <span class="pagelayer-breadcrumb-section">
                        <a href="https://www.innobraintechnologies.in" rel="nofollow">Home</a>
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
        <div class="right-column">
            <h2>Our Services</h2>
            <div class="service-description">
                <h3>IT Solutions</h3>
                <p>We provide cutting-edge IT solutions. We specialize in delivering innovative technology solutions to businesses and organizations of all sizes. We are committed to delivering reliable, scalable and customized solutions that drive business success and empower our clients to thrive in today's digital world.</p>
            </div>
            <div class="service-description">
                <h3>IT Training</h3>
                <p>We specialize in providing comprehensive and cutting-edge training on a wide range of technologies. Our trainings are designed to equip individuals with the skills and knowledge needed to excel in the ever-evolving world of technology. From programming languages to web development, cloud computing to data analytics, we offer a diverse portfolio of training programs that cater to the needs of both beginners and experienced professionals.</p>
            </div>
            <div class="service-description">
                <h3>Internship</h3>
                <p>We offer internships that provide practical experience and exposure to real-world IT projects. Our internships are designed to help students and fresh graduates gain valuable skills and experience, and to prepare them for successful careers in the IT industry.</p>
            </div>
        </div>
    </div>
    <div class="form-container">
        <form action="#" method="POST">
            <h2>Inquiry Form</h2>
            <label for="name">Your Name *</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email Id *</label>
            <input type="email" id="email" name="email" required>

            <label for="contact">Your Contact Number *</label>
            <input type="tel" id="contact" name="contact" required>

            <label for="interest">Interested in ?</label>
            <select id="interest" name="interest">
                <option value="IT Solutions">IT Solutions</option>
                <option value="Internship">Internship</option>
                <option value="IT Training">IT Training</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
@endsection --}}
@extends('frontend.layout.main')

@section('main-container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - InnoBrain Technologies</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        }
    </style>
</head>
<body>
    <div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
        <div class="p-hdr8599 pagelayer-col">
            <div class="pagelayer-col-holder">
                <div class="p-aib1329 pagelayer-post_title">
                    <div class="pagelayer-post-title">Services</div>
                </div>
                <div class="p-t6u5566 pagelayer-breadcrumb">
                    <span class="pagelayer-breadcrumb-section">
                        <a href="https://www.innobraintechnologies.in" rel="nofollow">Home</a>
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
        <div class="right-column">
            <h2>Our Services</h2>
            <div class="service-description">
                <h3>IT Solutions</h3>
                <p>We provide cutting-edge IT solutions. We specialize in delivering innovative technology solutions to businesses and organizations of all sizes. We are committed to delivering reliable, scalable and customized solutions that drive business success and empower our clients to thrive in today's digital world.</p>
            </div>
            <div class="service-description">
                <h3>IT Training</h3>
                <p>We specialize in providing comprehensive and cutting-edge training on a wide range of technologies. Our trainings are designed to equip individuals with the skills and knowledge needed to excel in the ever-evolving world of technology. From programming languages to web development, cloud computing to data analytics, we offer a diverse portfolio of training programs that cater to the needs of both beginners and experienced professionals.</p>
            </div>
            <div class="service-description">
                <h3>Internship</h3>
                <p>We offer internships that provide practical experience and exposure to real-world IT projects. Our internships are designed to help students and fresh graduates gain valuable skills and experience, and to prepare them for successful careers in the IT industry.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h3 class="section-title bg-white text-center px-3" style="font-size: 30px; color: #00008b;">Inquiry Form</h3>
    </div>
    <div class="form-container">
        <form action="{{ route('submit.form') }}" method="POST">
            @csrf
            <h2>Inquiry Form</h2>
            <label for="name">Your Name *</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email Id *</label>
            <input type="email" id="email" name="email" required>

            <label for="contact">Your Contact Number *</label>
            <input type="tel" id="contact" name="contact" required>

            <label for="interest">Interested in ?</label>
            <select id="interest" name="interest">
                <option value="IT Solutions">IT Solutions</option>
                <option value="Internship">Internship</option>
                <option value="IT Training">IT Training</option>
                <option value="Other">Other</option>
            </select>

            <button type="submit" class="small">Submit</button>
        </form>
        <h5>Are you looking for an internship ?<a href="">Click Here</a> </h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@endsection

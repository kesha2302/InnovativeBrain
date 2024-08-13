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


.contact-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-item {
    text-align: center;
    flex: 1;
    margin: 0 px;
}

.contact-icon {
    width: 80px;
    height: 80px;
    margin-bottom: 10px;
}

h3 {
    margin: 10px 0;
    font-size: 22px;
    color: #333;
}

p {
    margin: 20px 0;
    font-size: 18px;
    color: #555;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
    height: 50px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

.content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    padding: 20px;
}

.image-container img {
    max-width: 100%;
    height: 650px;
    width: 600px
}

.form-container {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 450px;
}

.tab-button {
    background-color: #4a90e2;
    color: #fff;
    border: none;
    padding: 10px 20px;
    margin-bottom: 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input, textarea {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

button[type="submit"] {
    background-color: #357ab8;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

button[type="submit"]:hover {
    background-color: #357ab8;
}

.tab-title {
    background-color: #357ab8; /* Change to blue */
    color: #fff;
    padding: 10px 20px;
    font-size: 20px;
    text-align: center;
    /* border-radius: 5px 5px 0 0; */
    margin: 0 -20px 20px -20px;
}

</style>
<body>
<div class="contact-container">
        <div class="contact-item">
            <img src="https://www.pngkey.com/png/full/207-2072722_address-symbol-png-download-date-time-venue-icon.png" alt="Address Icon" class="contact-icon">
            <h3>Address</h3>
            <p>313, Bakrol Square, Bakrol Rd, Vallabh Vidyanagar, Anand, Gujarat - 388120</p>
        </div>
        <div class="contact-item">
            <img src="https://static.vecteezy.com/system/resources/previews/014/441/078/original/phone-call-icon-design-in-blue-circle-png.png" alt="Phone Icon" class="contact-icon">
            <h3>Phone</h3>
            <p>+91 9998202023 / +91 7990523663</p>
        </div>
        <div class="contact-item">
            <img src="https://th.bing.com/th/id/OIP.DVda2Oj2Y36nKEp9RNu2DgAAAA?rs=1&pid=ImgDetMain" alt="Email Icon" class="contact-icon">
            <h3>Email</h3>
            <p>inquiry@innobraintechnologies.in</p>
        </div>
    </div>

</header>
<div class="content">
    <div class="image-container">
        <img src="https://iatp.iusd.org/sites/iatp/files/images/pages/squareimages/student-internship.jpg" alt="Office Image">
    </div>
    <div class="form-container">
        <h2 class="tab-title" style="background-color: #004a7c">Internship</h2>
        <form action="{{ url('/contact2') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Name*</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>

            <label for="contact">Contact No.*</label>
            <input type="text" id="contact" name="contact" required>

            <label for="resume">Upload Resume *</label>
            <input type="file" id="resume" name="resume" required>

            <label for="message">Message</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit" style="background-color: #004a7c">Submit</button>
        </form>
    </div>
</div>
</body>

@endsection

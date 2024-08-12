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
        .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card img {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .card-body {
        padding: 20px;
        background-color: #f7f9fc;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 10px;
        color: #004a7c;
        text-align: center;
    }

    .card-text {
        font-size: 1rem;
        color: #333;
        text-align: center;
    }

    .card-text::before {
        content: "“";
        font-size: 2rem;
        vertical-align: top;
        color: #004a7c;
        margin-right: 5px;
    }

    .card-text::after {
        content: "”";
        font-size: 2rem;
        vertical-align: bottom;
        color: #004a7c;
        margin-left: 5px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 20px 0;
    }

    .col-md-4 {
        display: flex;
        justify-content: center;
        margin-bottom: 30px;
    }

    .col-md-4 .card {
        width: 100%;
        max-width: 350px;
    }
</style>
<div class="pagelayer-row-holder pagelayer-row pagelayer-auto pagelayer-width-auto">
    <div class="p-hdr8599 pagelayer-col">
        <div class="pagelayer-col-holder">
            <div class="p-aib1329 pagelayer-post_title">
                <div class="pagelayer-post-title">Our Clients</div>
            </div>
            <div class="p-t6u5566 pagelayer-breadcrumb">
                <span class="pagelayer-breadcrumb-section">
                    <a href="https://www.innobraintechnologies.in" rel="nofollow">Home</a>
                    <b class="pagelayer-breadcrumb-sep">&nbsp;»&nbsp;</b>
                    <span>Clients</span>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($clientDetails as $client)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('clientlogo/' . $client->Image) }}" class="card-img-top" alt="{{ $client->name }}">
                 <div class="card-body">
                        <h5 class="card-title">{{ $client->name }}</h5>
                        <p class="card-text">{{ $client->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($clientDetails as $client)
            <div class="col-md-6 mb-4">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="{{ asset('clientlogo/' . $client->Image) }}" class="img-fluid" alt="{{ $client->name }}">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">{{ $client->name }}</h5>
                        <p class="card-text">{{ $client->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

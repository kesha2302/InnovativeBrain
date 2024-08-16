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

</div>
{{-- <div id="clientCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 800px; margin: auto;">
    <div class="carousel-inner">
        @foreach($clientDetails as $index => $client)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="5000">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 mb-4">
                            <div class="row align-items-center" style="background-color: #f9f9f9; padding: 15px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('clientlogo/' . $client->Image) }}" class="img-fluid" alt="{{ $client->name }}"
                                         style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover; border: 3px solid #8d959c; padding: 5px;">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="card-title" style="font-weight: bold; color: #333333; margin-bottom: 10px;">{{ $client->name }}</h3>
                                    <p class="card-text" style="color: #666; font-size: 14px;">{{ $client->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}
<div id="clientCarousel" class="carousel slide" data-bs-ride="carousel" style="max-width: 800px; margin: auto;">
    <div class="carousel-inner">
        @foreach($clientDetails->chunk(2) as $index => $clientPair)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="5000">
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach($clientPair as $client)
                            <div class="col-md-6 mb-4" style="padding-right: 15px; padding-left: 15px;"> <!-- Adjust margin here -->
                                <div class="row align-items-center" style="background-color: #f9f9f9; padding: 15px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('clientlogo/' . $client->Image) }}" class="img-fluid" alt="{{ $client->name }}"
                                             style="border-radius: 50%; width: 80px; height: 80px; object-fit: cover; border: 3px solid #8d959c; padding: 8px;">
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="card-title" style="font-weight: bold; color: #333333; margin-bottom: 10px;">{{ $client->name }}</h3>
                                        <p class="card-text" style="color: #666; font-size: 14px;">{{ $client->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


@endsection

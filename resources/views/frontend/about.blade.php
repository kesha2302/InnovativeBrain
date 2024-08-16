
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
                <div class="pagelayer-post-title">About Us</div>
            </div>
            <div class="p-t6u5566 pagelayer-breadcrumb">
                <span class="pagelayer-breadcrumb-section">
                    <a href="{{url('/')}}" rel="nofollow">Home</a>
                    <b class="pagelayer-breadcrumb-sep">&nbsp;»&nbsp;</b>
                    <span>About Us</span>
                </span>
            </div>
        </div>
    </div>
</div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <div style="margin: 20px 0;">
                            <h4 style="color: #004a7c; font-weight: 600;">Our Expertise</h4>
                            <div style="margin-bottom: 10px;">
                                <span style="display: block; font-weight: 600; margin-bottom: 5px;">Software Development</span>
                                <div style="background-color: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 90%; background-color: #004a7c; padding: 5px; color: #fff; text-align: center;">90%</div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <span style="display: block; font-weight: 600; margin-bottom: 5px;">Web Development</span>
                                <div style="background-color: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 85%; background-color: #004a7c; padding: 5px; color: #fff; text-align: center;">85%</div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <span style="display: block; font-weight: 600; margin-bottom: 5px;">IT Training</span>
                                <div style="background-color: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 95%; background-color: #004a7c; padding: 5px; color: #fff; text-align: center;">95%</div>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <span style="display: block; font-weight: 600; margin-bottom: 5px;">Intership</span>
                                <div style="background-color: #f0f0f0; border-radius: 5px; overflow: hidden;">
                                    <div style="width: 80%; background-color: #004a7c; padding: 5px; color: #fff; text-align: center;">80%</div>
                                </div>
                            </div>
                        </div>
<br>
                        <img class="img-fluid " src="frontend/img/ab.jpg" alt=""
                        style="max-height: 350px; width:530px;   border-radius: 15px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease-in-out;">


                    </div>
            </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4" style="color: #004a7c">InnoBrain Technologies</h1>
                    <p class="mb-4" style="text-align: justify; line-height: 1.5; letter-spacing: 1 px">"InnoBrain Technologies is a leading MSME registered IT company that specializes in cutting-edge software solutions and technology consulting services. With a focus on innovation, creativity and reliability, InnoBrain Technologies has established itself as a trusted partner for businesses seeking to leverage technology for competitive advantage. The company is passionate about delivering exceptional results and exceeding client expectations.</p>
                    <p class="mb-4" style="text-align: justify; line-height: 1.5; letter-spacing: 1 px">At InnoBrain Technologies, the range of services offered spans across multiple domains including software development, mobile app development, web development, data analytics and more. The company is known for its ability to understand the unique needs of each client and tailor solutions that align with their business goals and objectives. By leveraging the latest technologies and industry best practices, InnoBrain Technologies delivers state-of-the-art solutions that drive operational efficiencies, enhance customer experiences, and fuel business growth.</p>
                    <p class="mb-4" style="text-align: justify; line-height: 1.5; letter-spacing: 1 px"> With a commitment to excellence, InnoBrain Technologies maintains a customer-centric approach, placing client satisfaction at the forefront of their operations. The company's dedication to quality, timely delivery, and cost-effectiveness has earned them a strong reputation in the IT industry. As a forward-thinking IT company, InnoBrain Technologies continues to push the boundaries of innovation, helping businesses stay ahead in today's competitive digital landscape."</p>
                    <p class="mb-4" style="text-align: justify; line-height: 1.5; letter-spacing: 1 px"> We also provide Internship Opportunities with the aim to bridge the gap between Industry and Academia.</p>

                </div>
            </div>
        </div>
    </div>



@endsection

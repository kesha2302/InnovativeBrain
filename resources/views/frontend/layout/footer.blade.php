 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="{{url('/about')}}">About Us</a>
                <a class="btn btn-link" href="{{url('/contact')}}">Contact Us</a>
                <a class="btn btn-link" href="{{url('/contact')}}">FAQs & Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>313, 3rd Floor, Bakrol Square,
                    Bakrol Rd, V.V.Nagar-388120,
                    Dist. Anand, Gujarat</p>

                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://in.linkedin.com/company/innobrain-technologies"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-9998202023
                    <br> <i class="fa fa-phone-alt me-3"></i>+91-7990523663</p>

            </div>
            <div class="col-lg-3 col-md-6">

                    <h4 class="text-white mb-3"> Inquiry</h4>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>inquiry@innobraintechnologies.in</p>
                </div>
            </div>
        </div>
        <footer style="display: flex; justify-content: center; align-items: center; height: 50px; ">
            <p style="margin: 0;">© 2023 InnoBrain Technologies</p>
        </footer>
    </div>

<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>

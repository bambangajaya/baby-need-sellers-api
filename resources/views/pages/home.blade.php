@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <div class="hero-box-area">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area" id="product-preview">
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="about-us-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center">
                            <h2>Baby's Best.&nbsp;&nbsp;Store</h2>
                            <p>
                                <small>
                                Whether you're searching for your first baby, or looking for the best items for your growing family, our carefully curated selection has something for everyone.
                                Our dedicated team is passionate about helping you find the perfect baby essentials, and our warm, inviting environment encourages you to explore and discover.
                                Join our community of parents and let us support you on this wonderful journey. Visit us today and experience the joy of finding the best for your little one &#10084;
                                </small>
                               
                            </p>
                            <p class="mt-5">Find your window to the world! Or, even, 
                                <span class="text-color-primary">unlock hidden worlds, one page at a time!</span> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Video Area Start -->
        <div class="banner-video-area overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-video-box">
                            <img src="https://www.magd.ox.ac.uk/wp-content/uploads/2022/07/3027-052-2000x1000.jpg" alt="">
                            <div class="video-icon">
                                <a href="https://youtu.be/Na5KPnx0uS8?si=PPoJfum8xG-Jt8h9" class="popup-youtube"><i class="linear-ic-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Brand Area Start -->
        <div class="our-brand-area section-space--pb_90">
            <div class="container">_
                <div class="brand-slider-active">
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb1.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb2.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb3.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb4.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb5.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb6.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb7.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="assets/images/brand/partnerb8.jpg" class="img-fluid" alt="Brand Images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Brand Area End -->
    
    </div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection

       
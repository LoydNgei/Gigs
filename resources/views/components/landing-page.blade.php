<x-layout>
    <section>
        <div class="slider_area">
            <div class="single_slider d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="slider_text">
                                <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">100+ Jobs listed</h5>
                                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Job</h3>
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Find and post Gigs with a single click</p>
                                <div class="row mt-4"><div class="col-md-6 mb-3 mb-md-0"><div class="searching_text">
                                            <a href="{{ route('listing.show') }}" class="boxed-btn3 w-50">Browse Job</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="searching_text">
                                            <a href="{{ route('dashboard') }}" class="boxed-btn3 w-50">Post a Job</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
                <img src="{{ Vite::asset('resources/img/banner/illustration.png') }}" alt="">
            </div>
        </div>
    </section>
</x-layout>
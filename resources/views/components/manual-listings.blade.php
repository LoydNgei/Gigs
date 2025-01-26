<section>
    <div class="job_listing_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="slider_text">
                            <h1 class ="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Job Listing</h1>
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">100+ Jobs listed</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="brouse_job text-right">
                            <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                        </div>
                    </div>
                </div>
                <div class="job_lists">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="single_jobs white-bg d-flex justify-content-between">
                                <div class="jobs_left d-flex align-items-center">
                                    <div class="thumb">
                                        <img src="img/svg_icon/1.svg" alt="">
                                    </div>
                                    <div class="jobs_conetent">
                                        <a href="#"><h4>{{$listing->title}}</h4></a>
                                        <div class="links_locat d-flex align-items-center">
                                            <div class="location">
                                                <p><i class="fa fa-map-marker"></i>{{$listing->location}}</p>
                                            </div>
                                            <div class="location">
                                                <p> <i class="fa fa-clock-o"></i> Part-time</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jobs_right">
                                    <div class="apply_now">
                                        <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                        <a href="{{ route('listing.single') }}" class="boxed-btn3">Apply Now</a>
                                    </div>
                                    <div class="date">
                                        <p>Date line: 31 Jan 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
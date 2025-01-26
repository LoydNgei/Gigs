<x-layout>
    <div class="slider_area">
        <!-- Navbar -->
        <div class="navbar bg-primary text-white p-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0"></h5>
            <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-800 transition duration-300">
                <a href="{{ route('user.logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </button>            
            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <div class="single_slider d-flex align-items-center slider_bg_1">
            <div class="container">
                <!-- Welcome Message -->
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                Welcome, {{ auth()->user()->name }}
                            </h5>
                        </div>
                    </div>
                </div>

                <!-- Buttons Section -->
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="searching_text">
                            <a href="{{ route('listing.manage') }}" class="boxed-btn3 w-100">
                                Manage Listings
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="searching_text">
                            <a href="{{ route('listing.form') }}" class="boxed-btn3 w-100">
                                Post a Job
                            </a>
                        </div>
                    </div>
                        <div class="col-md-4 mb-3">
                            <div class="searching_text">
                                <a href="{{ route('user.applications') }}" class="boxed-btn3 w-100">
                                    See Applications
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Full-Screen Mode */
        .slider_area {
            background: #007bff;
            height: 100vh;
            padding: 0;
        } 

        /* Responsive Design */
        @media (max-width: 768px) {
            .boxed-btn3 {
                width: 80%;
                font-size: 0.9rem;
            }
            
            .slider_text h5 {
                font-size: 1.3rem;
            }
        } */
    </style>
</x-layout>

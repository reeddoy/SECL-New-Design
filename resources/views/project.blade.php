@extends('base')

@section('title', 'Projects | SECL')







@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Projects</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-company.html">Home</a></li>
                <li>Our Projects</li>
            </ul>
        </div>
    </div>
</div>


<section class="space">
    <div class="container">
        <div class="title-area text-center mb-40"><span class="sub-title">Latest Projects</span>
            <h2 class="sec-title">Let's See Our Latest Projects</h2>
        </div>
        <div class="filter-menu style2 indicator-active filter-menu-active">
            <button data-filter="*" class="tab-btn active" type="button">Show All Work</button> 
            <button data-filter=".cat1" class="tab-btn" type="button">Building Construction</button> 
            <button data-filter=".cat2" class="tab-btn" type="button">Interior</button> 
            <button data-filter=".cat3" class="tab-btn" type="button">Architecture</button> 
            <button data-filter=".cat4" class="tab-btn" type="button">Road & Bridge Construction</button>
        </div>

        <div class="row gallery-row filter-active">
            <div class="col-md-6 col-xl-auto filter-item cat1">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_1.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Construction</p>
                        <h3 class="box-title"><a href="project-details.html">Building Construction</a></h3><a
                            href="{{ asset('assets/img/project/project_3_1.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat2">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_2.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Industrial</p>
                        <h3 class="box-title"><a href="project-details.html">Industrial Design</a></h3><a
                            href="{{ asset('assets/img/project/project_3_2.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat3">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_3.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Architect</p>
                        <h3 class="box-title"><a href="project-details.html">Architect Design</a></h3><a
                            href="{{ asset('assets/img/project/project_3_3.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat4">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_4.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Residential</p>
                        <h3 class="box-title"><a href="project-details.html">Residential Design</a></h3><a
                            href="{{ asset('assets/img/project/project_3_4.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat4">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_5.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Contemporary</p>
                        <h3 class="box-title"><a href="project-details.html">Contemporary Villa</a></h3><a
                            href="{{ asset('assets/img/project/project_3_5.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat3">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_6.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Construction</p>
                        <h3 class="box-title"><a href="project-details.html">Building Construction</a></h3><a
                            href="{{ asset('assets/img/project/project_3_6.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat2">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_7.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Industrial</p>
                        <h3 class="box-title"><a href="project-details.html">Industrial Design</a></h3><a
                            href="{{ asset('assets/img/project/project_3_7.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat1">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_8.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Construction</p>
                        <h3 class="box-title"><a href="project-details.html">Residential Design</a></h3><a
                            href="{{ asset('assets/img/project/project_3_8.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-auto filter-item cat1 cat4">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('assets/img/project/project_3_9.jpg') }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">Industrial</p>
                        <h3 class="box-title"><a href="project-details.html">Contemporary Villa</a></h3><a
                            href="{{ asset('assets/img/project/project_3_9.jpg') }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="th-pagination text-center mt-80 mb-0">
            <ul>
                <li><a href=""><i class="fa-regular fa-arrow-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href=""><i class="fa-regular fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>




@endsection
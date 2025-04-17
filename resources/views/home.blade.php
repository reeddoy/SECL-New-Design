@extends('base')

@section('title', 'Home | SECL')







@section('content')
<div class="th-hero-wrapper hero-2" id="hero">
    <div class="swiper th-slider hero-slider-2" id="heroSlide2" data-slider-options='{"effect":"fade"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_2_1.jpg') }}"><img
                            src="{{ asset('assets/img/hero/hero_overlay_2.png') }}" alt="Hero Image"></div>
                    <div class="container">
                        <div class="hero-style2"><span class="sub-title style1" data-ani="slideinup"
                                data-ani-delay="0.2s">Building Dreams,
                                Crafting Realities</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Raising the Bar in
                                Construction</h1>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">The construction
                                industry encompasses the planning,
                                design, and execution of buildings,
                                infrastructure, and related
                                projects.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="contact.html"
                                    class="th-btn style1 th-icon">Get
                                    Started<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_2_2.jpg') }}"><img
                            src="{{ asset('assets/img/hero/hero_overlay_2.png') }}" alt="Hero Image"></div>
                    <div class="container">
                        <div class="hero-style2"><span class="sub-title style1" data-ani="slideinup"
                                data-ani-delay="0.2s">Building Dreams,
                                Crafting Realities</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Strength in
                                Construction</h1>
                            <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">Construction
                                companies offer a wide range of
                                services, such as pre-construction
                                planning, project management
                                architectural.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="contact.html"
                                    class="th-btn style1 th-icon">Get
                                    Started<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup hero_wrap d-none d-xxl-block" data-bottom="0%" data-left="0%"><img
            src="{{ asset('assets/img/shape/hero_shape_1.png') }}" alt="shape"></div>
    <div class="scroll-down"><a href="#about-sec" class="scroll-wrap"></a></div>
</div>
<div class="feature-area overflow-hidden space-top" id="feature-area">
    <div class="container">
        <div class="title-area"><span class="sub-title style1">Our
                Features</span>
            <h2 class="sec-title">Raising the Bar in
                Construction</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="feature-item th-ani">
                    <div class="feature-item_shape"></div>
                    <div class="feature-item_shape2"></div>
                    <div class="feature-item_icon"><img src="{{ asset('assets/img/icon/feature_1_1.svg') }}" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-title">Experienced Workers</h3>
                        <p class="feature-item_text">Compliance with
                            building codes, and work to achieve the
                            desired aesthetic and functional
                            goals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="feature-item th-ani">
                    <div class="feature-item_shape"></div>
                    <div class="feature-item_shape2"></div>
                    <div class="feature-item_icon"><img src="{{ asset('assets/img/icon/feature_1_2.svg') }}" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-title">35<span class="text-theme">+</span> Years
                            Experience</h3>
                        <p class="feature-item_text">It sounds like you
                            have accumulated a wealth of experience over
                            the course of 35+
                            years</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="feature-item th-ani">
                    <div class="feature-item_shape"></div>
                    <div class="feature-item_shape2"></div>
                    <div class="feature-item_icon"><img src="{{ asset('assets/img/icon/feature_1_3.svg') }}" alt="icon"></div>
                    <div class="media-body">
                        <h3 class="box-title">Award Winning
                            Company</h3>
                        <p class="feature-item_text">If
                            there's anything specific you'd like to
                            share or discuss about your award-winning
                            company</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="2%" data-left="0%"><img
            src="{{ asset('assets/img/shape/shape_3.png') }}" alt="shape"></div>
</div>
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="about-title-area">
            <div class="title-area text-center"><span class="sub-title">About Us Company</span>
                <h2 class="sec-title">Empowering Visions Through Solid
                    Construction</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="about-wrapper">
                    <p class="about-desc">Many modern construction
                        companies focus on sustainable building
                        practices, incorporating eco-friendly material
                        energy-efficient systems.</p>
                    <div class="checklist mb-40">
                        <ul>
                            <li>We provide 24/7
                                service</li>
                            <li>Qualified
                                Agents</li>
                            <li>Greate
                                Technology</li>
                            <li>35 Years
                                Experiance</li>
                        </ul>
                    </div><a href="about.html" class="th-btn th-icon">More
                        About Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="img-box2">
                    <div class="img1"><img src="{{ asset('assets/img/normal/about_2_1.jpg') }}" alt="About"></div>
                    <div class="img2"><img src="{{ asset('assets/img/normal/about_2_2.jpg') }}" alt="About"></div>
                    <div class="th-experience dance">
                        <div class="th-experience_content">
                            <h2 class="experience-year"><span class="counter-number">10</span>k</h2>
                            <p class="experience-text">Customers
                                Satisfied</p>
                        </div>
                    </div>
                    <div class="about-signature">
                        <div class="signature"><img src="{{ asset('assets/img/normal/signature.png') }}" alt="signature"></div>
                        <div class="content">
                            <h6 class="name">Benjamin
                                Dowd</h6><span class="desig">Founder of
                                Konta</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="counter-box-wrap">
                    <div class="counter-box">
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">2</span>k<span class="text">+</span>
                            </h3>
                            <p class="box-text">Project
                                Completed</p>
                        </div>
                    </div>
                    <div class="counter-box">
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">1.5</span>k<span
                                    class="text">+</span></h3>
                            <p class="box-text">Customer
                                Satisfied</p>
                        </div>
                    </div>
                    <div class="counter-box">
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">360</span><span
                                    class="text">+</span></h3>
                            <p class="box-text">Expert Team
                                Members</p>
                        </div>
                    </div>
                    <div class="counter-box">
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">85</span><span class="text">+</span>
                            </h3>
                            <p class="box-text">Awards
                                Winner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="0%" data-right="0%"><img
            src="{{ asset('assets/img/shape/shape_4.png') }}" alt="shape"></div>
</div>
<section class="overflow-hidden space" data-bg-src="{{ asset('assets/img/bg/service_bg_2.jpg') }}">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg-5">
                <div class="title-area text-center text-lg-start"><span class="sub-title style1">Our Services</span>
                    <h2 class="sec-title">We Provide Best Quality
                        Services For You<span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn"><a href="{{ url('/service') }}" class="th-btn th-icon">View
                        All Services<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
            </div>
        </div>
        <div class="service-accordion">
            <div class="row">
                <div class="col-lg-4">
                    <div class="th-accordion_images"><img class="active" src="{{ asset('assets/img/normal/ser_img_1.jpg') }}" alt>
                        <img src="{{ asset('assets/img/normal/ser_img_2.jpg') }}" alt>
                        <img src="{{ asset('assets/img/normal/ser_img_3.jpg') }}" alt>
                        <img src="{{ asset('assets/img/normal/ser_img_4.jpg') }}" alt>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-accordion-content" id="serviceAccordion">
                        <div class="accordion-item">
                            <div class="accordion-header" id="collapse-item-1">
                                <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <span class="accordion-item_info"><span class="accordion-item_wrapp"><span
                                                class="accordion-item_number">01</span>
                                            <span class="box-title">Building
                                                Construction</span>
                                        </span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></div>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <ul class="faq-text d-md-flex justify-content-between" style="width: 80%;">
                                        <li>Project Planning</li>
                                        <li>Project Management</li>
                                    </ul>
                                    <ul class="faq-text d-md-flex justify-content-between mt-2" style="width: 80%;">
                                        <li>Project Management</li>
                                        <li>Project Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="collapse-item-2">
                                <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <span class="accordion-item_info"><span class="accordion-item_wrapp"><span
                                                class="accordion-item_number">02</span>
                                            <span class="box-title">Architecture
                                                & Building</span>
                                        </span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></div>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-2" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <ul class="faq-text d-md-flex justify-content-between" style="width: 80%;">
                                        <li>Project Planning</li>
                                        <li>Project Management</li>
                                    </ul>
                                    <ul class="faq-text d-md-flex justify-content-between mt-2" style="width: 80%;">
                                        <li>Project Management</li>
                                        <li>Project Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="collapse-item-3"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3"><span class="accordion-item_info"><span
                                            class="accordion-item_wrapp"><span
                                                class="accordion-item_number">03</span>
                                            <span class="box-title">Interior
                                                Design</span> </span><i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></button></div>
                            <div id="collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-3" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <ul class="faq-text d-md-flex justify-content-between" style="width: 80%;">
                                        <li>Project Planning</li>
                                        <li>Project Management</li>
                                    </ul>
                                    <ul class="faq-text d-md-flex justify-content-between mt-2" style="width: 80%;">
                                        <li>Project Management</li>
                                        <li>Project Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="collapse-item-4"><button
                                    class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4"><span class="accordion-item_info"><span
                                            class="accordion-item_wrapp"><span
                                                class="accordion-item_number">04</span>
                                            <span class="box-title">House
                                                Renovation</span>
                                        </span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-4" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    <ul class="faq-text d-md-flex justify-content-between" style="width: 80%;">
                                        <li>Project Planning</li>
                                        <li>Project Management</li>
                                    </ul>
                                    <ul class="faq-text d-md-flex justify-content-between mt-2" style="width: 80%;">
                                        <li>Project Management</li>
                                        <li>Project Management</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space" data-overlay="title" data-opacity="9" data-bg-src="{{ asset('assets/img/bg/cta_bg_1.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="title-area text-center mb-0 text-lg-start"><span class="sub-title style1 mb-20">Get
                        Consultation</span>
                    <h2 class="sec-title text-white">Get A Free
                        Consultation Contact Us <span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-group justify-content-lg-end justify-content-center"><a href="{{ url('/contact_us') }}"
                        class="th-btn style1 th-icon">Get
                        Consultations<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    <a href="{{ url('/contact_us') }}" class="th-btn style3 th-icon">Work With Us<i
                            class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container">
        <div class="process-area" data-bg-src="{{ asset('assets/img/bg/process_bg_1.jpg') }}">
            <div class="process-content">
                <div class="title-area mb-25"><span class="sub-title style1">Work Process</span>
                    <h2 class="sec-title text-white">How It Work</h2>
                    <p class="sec-text">The pre-construction phase
                        involves site preparation, acquiring necessary
                        permits, and establishing a
                        construct.</p>
                </div>
                <div><a href="contact.html" class="th-btn style1 th-icon">Get In Touch<i
                            class="fa-regular fa-arrow-right ms-2"></i></a></div>
            </div>
            <div class="process-box_wrap">
                <div class="process-box">
                    <div class="process-box_icon"><img src="{{ asset('assets/img/icon/process_1_1.svg') }}" alt="service image">
                    </div>
                    <div class="process-box_content">
                        <p class="box-number">STEP -01</p>
                        <h3 class="box-title">Project Research</h3>
                        <p class="process-box_text">In the initial
                            phases, architects and designers play a
                            crucia</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="process-box_icon"><img src="{{ asset('assets/img/icon/process_1_2.svg') }}" alt="service image">
                    </div>
                    <div class="process-box_content">
                        <p class="box-number">STEP -02</p>
                        <h3 class="box-title">Design Build</h3>
                        <p class="process-box_text">Vulnerable for web
                            iterate process before meta
                            services</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="process-box_icon"><img src="{{ asset('assets/img/icon/process_1_3.svg') }}" alt="service image">
                    </div>
                    <div class="process-box_content">
                        <p class="box-number">STEP -03</p>
                        <h3 class="box-title">Starting Work</h3>
                        <p class="process-box_text">Of setting for web
                            iterate process before meta
                            services</p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="process-box_icon"><img src="{{ asset('assets/img/icon/process_1_4.svg') }}" alt="service image">
                    </div>
                    <div class="process-box_content">
                        <p class="box-number">STEP -04</p>
                        <h3 class="box-title">Finished Work</h3>
                        <p class="process-box_text">Getting on for web
                            iterate process before meta
                            services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-sec2 overflow-hidden space" data-bg-src="{{ asset('assets/img/bg/why_bg_2.jpg') }}">
    <div class="container">
        <div class="why-content">
            <div class="title-area mb-30"><span class="sub-title style1">Why Choose Us</span>
                <h2 class="sec-title">Constructing Success Stories One
                    Project at a Time</h2>
            </div>
            <div class="checklist list-two-column">
                <ul>
                    <li>Powerfull
                        Product Strategy</li>
                    <li>Quality Control
                        System</li>
                    <li>Professional Team
                        Works</li>
                    <li>Award Winning
                        Projects</li>
                </ul>
            </div>
            <div class="feature-circle-wrap">
                <div class="feature-circle">
                    <div class="progressbar" data-path-color="#147996">
                        <div class="circle" data-percent="85">
                            <div class="circle-num"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Project
                            Success Rate</h3>
                    </div>
                </div>
                <div class="feature-circle">
                    <div class="progressbar" data-path-color="#147996">
                        <div class="circle" data-percent="95">
                            <div class="circle-num"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Satisfactions
                            Clients</h3>
                    </div>
                </div>
            </div>
            <div class="btn-group style1"><a href="about.html" class="th-btn th-icon">More About Us<i
                        class="fa-regular fa-arrow-right ms-2"></i></a>
                <div class="feature-wrapper">
                    <div class="feature-icon"><a href="tel:+16323656985"><i class="fa-regular fa-phone"></i></a>
                    </div>
                    <div class="media-body"><span class="header-info_label">Call Us Any
                            Time</span>
                        <p class="header-info_link"><a href="tel:+16323656985">+163-2365-6985</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- latest work section -->
<section class="project-sec overflow-hidden bg-top-center space" data-bg-src="{{ asset('assets/img/bg/project_bg_1.jpg') }}">
    <div class="container">
        <div class="mb-30 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <div class="title-area mb-md-0"><span class="sub-title style1">Latest
                            Work</span>
                        <h2 class="sec-title text-white">Let's See Our
                            Latest Work</h2>
                    </div>
                </div>
                <div class="col-md-auto"><a href="{{ url('/project') }}" class="th-btn style1 th-icon">View All Work<i
                            class="fa-regular fa-arrow-right ms-2"></i></a></div>
            </div>
        </div>
    </div>
    <div class="container th-container">
        <div class="slider-area project-slider2">
            <div class="swiper th-slider has-shadow" id="projectSlider2"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($projects ?? [] as $project)
                    <div class="swiper-slide">
                        <div class="project-box">
                            <div class="project-box-img"><img src="{{ asset('storage/' . $project->new_image) }}"
                                    alt="{{ $project->name }}"></div>
                            <div class="project-box-content">
                                <p class="project-subtitle">{{ $project->projectCategory->name ?? 'Category' }}</p>
                                <h3 class="box-title"><a href="{{ url('project_details/' . $project->id) }}">{{ $project->name }}</a></h3>
                                <a href="{{ asset('storage/' . $project->new_image) }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    @if (!isset($projects) || count($projects ?? []) == 0)
                    <div class="swiper-slide">
                        <div class="project-box">
                            <div class="project-box-img"><img src="{{ asset('assets/img/project/project_2_1.jpg') }}"
                                    alt="project image"></div>
                            <div class="project-box-content">
                                <p class="project-subtitle">Construction</p>
                                <h3 class="box-title"><a href="project-details.html">Building
                                        Construction</a></h3><a href="{{ asset('assets/img/project/project_2_1.jpg') }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-box">
                            <div class="project-box-img"><img src="{{ asset('assets/img/project/project_2_2.jpg') }}"
                                    alt="project image"></div>
                            <div class="project-box-content">
                                <p class="project-subtitle">Industrial</p>
                                <h3 class="box-title"><a href="project-details.html">Industrial
                                        Design</a></h3><a href="{{ asset('assets/img/project/project_2_2.jpg') }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-box">
                            <div class="project-box-img"><img src="{{ asset('assets/img/project/project_2_3.jpg') }}"
                                    alt="project image"></div>
                            <div class="project-box-content">
                                <p class="project-subtitle">Architect</p>
                                <h3 class="box-title"><a href="project-details.html">Architect
                                        Design</a></h3><a href="{{ asset('assets/img/project/project_2_3.jpg') }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-box">
                            <div class="project-box-img"><img src="{{ asset('assets/img/project/project_2_4.jpg') }}"
                                    alt="project image"></div>
                            <div class="project-box-content">
                                <p class="project-subtitle">Residential</p>
                                <h3 class="box-title"><a href="project-details.html">Residential
                                        Design</a></h3><a href="{{ asset('assets/img/project/project_2_4.jpg') }}"
                                    class="gallery-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</section>


<!-- testimonial sector -->
<section class="testimonial-area overflow-hidden bg-smoke space" id="testi-sec"
    data-bg-src="{{ asset('assets/img/bg/shape_bg_3.png') }}">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title">Testimonials</span>
            <h2 class="sec-title">What Our Clients Say?</h2>
        </div>
        <div class="slider-area testi-box-area">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-4">
                    <div class="swiper th-slider style2 testiSlider2 gallery-top" id="testiSlider2"
                        data-slider-options='{"effect":"slide","loop":true,"autoplay":false,"slidesPerView":"1","thumbs":{"swiper":".testi-grid-thumb"}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Michel
                                                    Carlos</h3><span class="testi-box_desig">Manager</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>The
                                        preconstruction phase involves
                                        site preparation acquiring
                                        necessary permits & establishing
                                        construction site and finishing
                                        work. Delays and changes are
                                        common in construction. <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Angelina
                                                    Rose</h3><span class="testi-box_desig">Founder
                                                    CEO</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Objectively
                                        visualize error-free technology
                                        for B2B alignment.
                                        Monotonectally harness an
                                        expanded array of models via
                                        effective collaboration in the
                                        success. <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Alex
                                                    Jordan</h3><span class="testi-box_desig">Project
                                                    Manager</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Completely
                                        drive innovative value whereas
                                        out-of-the-box paradigms.
                                        Interactively pursue stand-alone
                                        markets after global say that
                                        they results. <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Michel
                                                    Carlos</h3><span class="testi-box_desig">Manager</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Lectus
                                        volpat faucibus placerat eget
                                        nulla sodales aliquam molestie
                                        ante, himenaeos fames suscipit
                                        arcu cras cenas penatibus
                                        vivamus, aenean primis enim <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Angelina
                                                    Rose</h3><span class="testi-box_desig">Founder
                                                    CEO</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Objectively
                                        visualize error-free technology
                                        for B2B alignment.
                                        Monotonectally harness an
                                        expanded array of models via
                                        effective collaboration in the
                                        success. <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Alex
                                                    Jordan</h3><span class="testi-box_desig">Project
                                                    Manager</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Completely
                                        drive innovative value whereas
                                        out-of-the-box paradigms.
                                        Interactively pursue stand-alone
                                        markets after global say that
                                        they results. <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box">
                                    <div class="testi-box_wrapper">
                                        <div class="testi-box_profile">
                                            <div class="testi-box_info">
                                                <h3 class="box-title">Michel
                                                    Carlos</h3><span class="testi-box_desig">Manager</span>
                                                <div class="testi-box_review"><i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="testi-box-quote"><img src="{{ asset('assets/img/icon/testi-quote2.svg') }}"
                                                    alt="img"></div>
                                        </div>
                                    </div>
                                    <p class="testi-box_text"><span>"</span>Lectus
                                        volpat faucibus placerat eget
                                        nulla sodales aliquam molestie
                                        ante, himenaeos fames suscipit
                                        arcu cras cenas penatibus
                                        vivamus, aenean primis enim <img src="{{ asset('assets/img/icon/like.svg') }}" alt>
                                        <span>"</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="slider-area">
                        <div class="swiper th-slider testimonial-slider testiSlider2 testi-grid-thumb gallery-thumbs"
                            data-slider-options='{"effect":"slide","slidesPerView":"3","loop":true,"autoplay":false,"slideToClickedSlide":true,"centeredSlides":true}'
                            data-slider-tab="#testiSlider2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_1.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_2.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_3.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_1.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_2.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_3.jpg') }}"
                                            alt="Image"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-img"><img src="{{ asset('assets/img/testimonial/testi_2_1.jpg') }}"
                                            alt="Image"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button data-slider-prev="#testiSlider2"
                class="swiper-button-next slider-arrow style3 slider-prev"><i
                    class="far fa-arrow-left"></i></button> <button data-slider-next="#testiSlider2"
                class="swiper-button-prev slider-arrow style3 slider-next"><i
                    class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <div class="shape-mockup d-none d-xl-block" data-top="0%" data-left="0%"><img src="{{ asset('assets/img/shape/shape_5.png') }}"
            alt="shape"></div>
</section>


<!-- testimonial brand -->
<div class="brand-sec bg-title">
    <div class="container th-container">
        <div class="swiper th-slider" id="brandSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo"></a></div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-item wow fadeInLeft"><a href="#"><img class="original"
                                src="{{ asset('assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"> <img class="gray"
                                src="{{ asset('assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-shape"></div>
</div>





<br>
<br>
<br>
@endsection

    


@extends('base')

@section('title', 'About Us | SECL')







@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<div class="overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="img-box3">
                    <div class="img1"><img src="{{ asset('assets/img/normal/about_3.jpg') }}" alt="About"></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">About Us Company</span>
                    <h2 class="sec-title mb-20">We Are Always Think On Your Dream</h2>
                </div>
                <p class="sec-text mb-30">Many modern construction companies focus on sustainable building
                    practices, incorporating eco-friendly material energy-efficient systems and environmental
                    conscious designs to reduce the environmental impact of their projects.</p>
                <div class="about-item-wrap">
                    <div class="about-item">
                        <div class="about-item_img"><img src="{{ asset('assets/img/icon/about_1_1.svg') }}" alt=""></div>
                        <div class="about-item_centent">
                            <h5 class="box-title">Quality And Expert Team Members</h5>
                            <p class="about-item_text">Initial phase involving project conceptualization, design,
                                and obtaining necessary.</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="about-item_img"><img src="{{ asset('assets/img/icon/about_1_2.svg') }}" alt=""></div>
                        <div class="about-item_centent">
                            <h5 class="box-title">Certified & Awards winner</h5>
                            <p class="about-item_text">Initial phase involving project conceptualization, design,
                                and obtaining necessary.</p>
                        </div>
                    </div>
                </div>
                <div class="about-signature style2">
                    <div class="signature"><img src="{{ asset('assets/img/normal/signature.png') }}" alt="signature"></div>
                    <div class="content">
                        <h6 class="name">Benjamin Dowd</h6><span class="desig">Founder of Konta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="counter-area2">
    <div class="container">
        <div class="counter-area bg-theme" data-pos-for="#process-sec" data-sec-pos="bottom-half">
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number">2</span>k<span
                                    class="text">+</span></h2>
                            <p class="box-text text-white">Project Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number">1.5</span>k<span
                                    class="text">+</span></h2>
                            <p class="box-text text-white">Customer Satisfied</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number">360</span><span
                                    class="text">+</span></h2>
                            <p class="box-text text-white">Expert Team Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                    <div class="counter-card style2">
                        <div class="media-body">
                            <h2 class="box-number text-white"><span class="counter-number">85</span><span
                                    class="text">+</span></h2>
                            <p class="box-text text-white">Awards Winner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="process-sec overflow-hidden space" id="process-sec" data-bg-src="{{ asset('assets/img/bg/process_bg_1.jpg') }}">
    <div class="container">
        <div class="title-area pe-xl-3 ps-xl-3 text-center"><span class="sub-title">Work Process</span>
            <h2 class="sec-title">How It Work</h2>
        </div>
        <div class="step-wrap style2">
            <div class="process-line"><img src="{{ asset('assets/img/shape/process-line.png') }}" alt=""></div>
            <div class="row">
                <div class="col-md-6 col-lg-3 process-item-wrap">
                    <div class="process-item">
                        <div class="process-item_icon"><img src="{{ asset('assets/img/icon/process_1_1.svg') }}"
                                alt="service image"></div>
                        <div class="process-item_content">
                            <p class="box-number">STEP -01</p>
                            <h3 class="box-title">Project Research</h3>
                            <p class="process-item_text">In the initial phases, architects and designers play a
                                crucia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 process-item-wrap">
                    <div class="process-item">
                        <div class="process-item_icon"><img src="{{ asset('assets/img/icon/process_1_2.svg') }}"
                                alt="service image"></div>
                        <div class="process-item_content">
                            <p class="box-number">STEP -02</p>
                            <h3 class="box-title">Design Build</h3>
                            <p class="process-item_text">Vulnerable for web iterate process before meta services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 process-item-wrap">
                    <div class="process-item">
                        <div class="process-item_icon"><img src="{{ asset('assets/img/icon/process_1_3.svg') }}"
                                alt="service image"></div>
                        <div class="process-item_content">
                            <p class="box-number">STEP -03</p>
                            <h3 class="box-title">Starting Work</h3>
                            <p class="process-item_text">Of setting for web iterate process before meta services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 process-item-wrap">
                    <div class="process-item">
                        <div class="process-item_icon"><img src="{{ asset('assets/img/icon/process_1_4.svg') }}"
                                alt="service image"></div>
                        <div class="process-item_content">
                            <p class="box-number">STEP -04</p>
                            <h3 class="box-title">Finished Work</h3>
                            <p class="process-item_text">Getting on for web iterate process before meta services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-area2" data-overlay="title" data-opacity="9" data-bg-src="{{ asset('assets/img/bg/cta_bg_1.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="title-area mb-0 text-center text-lg-start"><span class="sub-title style1 mb-20">Get
                        Consultation</span>
                    <h2 class="sec-title text-white">Get A Free Consultation Contact Us <span
                            class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cta-group justify-content-lg-end justify-content-center"><a href="{{ url('/contact_us') }}"
                        class="th-btn style1 th-icon">Get Consultations<i
                            class="fa-regular fa-arrow-right ms-2"></i> </a><a href="{{ url('/contact_us') }}"
                        class="th-btn style3 th-icon">Work With Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-shape"><img src="{{ asset('assets/img/normal/cta_1.png') }}" alt=""></div>
</section>
<section class="space" id="team-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="title-area text-center pe-xl-5 px-xl-5"><span class="sub-title">Meet Our Team</span>
                    <h2 class="sec-title">We've Exclusive Team Members Meet Our Professionals</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 gx-30">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_1.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Mishel Marsh</a></h3><span
                                class="team-desig">Engineer</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Good communication is crucial in the construction industry.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_2.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Famhida Ruko</a></h3><span
                                class="team-desig">Founder</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_3.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Alex Anfantino</a></h3><span
                                class="team-desig">Architecture</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Along with design, architecture firms often offer project.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_4.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Henry Joshep</a></h3><span
                                class="team-desig">Site Manager</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_5.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Sinthia Komley</a></h3><span
                                class="team-desig">Engineer</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Good communication is crucial in the construction industry.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_6.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Noah James</a></h3><span
                                class="team-desig">Founder</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_7.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Lima Margret</a></h3><span
                                class="team-desig">Architecture</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_8.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Mason Robert</a></h3><span
                                class="team-desig">Site Manager</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_9.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Ethan David</a></h3><span
                                class="team-desig">Engineer</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Good communication is crucial in the construction industry.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_10.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3><span
                                class="team-desig">Founder</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_11.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">James Charles</a></h3><span
                                class="team-desig">Architecture</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Along with design, architecture firms often offer project.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="th-team team-grid">
                    <div class="team-grid_wrapper">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_4_12.jpg') }}" alt="Team"></div>
                        <div class="media-body">
                            <h3 class="box-title"><a href="team-details.html">Wilson Byrne</a></h3><span
                                class="team-desig">Site Manager</span>
                        </div>
                    </div>
                    <div class="team-content">
                        <p class="sec-text">Residential construction focuses on building homes.</p>
                        <div class="th-social"><a href="https://www.facebook.com/"><i
                                    class="fa-brands fa-vimeo-v"></i></a> <a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i
                                    class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i
                                    class="fab fa-linkedin-in"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-sec3 space" data-bg-src="{{ asset('assets/img/bg/why_bg_3.jpg') }}">
    <div class="container">
        <div class="history-item-right">
            <div class="title-area"><span class="sub-title style1">Company History</span>
                <h2 class="sec-title">Empowering Visions through Solid Construction</h2>
            </div>
            <div class="history-item-wrap">
                <div class="history-item-date">22th JULY, 2024</div>
                <div class="history-item">
                    <div class="history-item-img"><img src="{{ asset('assets/img/normal/mission_1_1.jpg') }}" alt="img"></div>
                    <div class="history-item-details">
                        <h5 class="box-title">First 10 Year Anniversary</h5>
                        <p class="history-item-text">Their designs focus not only on aesthetics. but also on
                            functionality of place.</p>
                    </div>
                </div>
            </div>
            <div class="history-item-wrap">
                <div class="history-item-date">23th JULY, 2024</div>
                <div class="history-item">
                    <div class="history-item-img"><img src="{{ asset('assets/img/normal/mission_1_2.jpg') }}" alt="img"></div>
                    <div class="history-item-details">
                        <h5 class="box-title">Founded In 2024</h5>
                        <p class="history-item-text">Their designs focus not only on aesthetics. but also on
                            functionality of place.</p>
                    </div>
                </div>
            </div>
            <div class="history-item-wrap">
                <div class="history-item-date">24th JULY, 2024</div>
                <div class="history-item">
                    <div class="history-item-img"><img src="{{ asset('assets/img/normal/mission_1_3.jpg') }}" alt="img"></div>
                    <div class="history-item-details">
                        <h5 class="box-title">Construction In 2024</h5>
                        <p class="history-item-text">Their designs focus not only on aesthetics. but also on
                            functionality of place.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<br>
<br>
<br>
<br>

@endsection
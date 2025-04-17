@extends('base')

@section('title', 'Project Details | SECL')







@section('content')



<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Project Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Project Details</li>
            </ul>
        </div>
    </div>
</div>
<section class="space overflow-hidden">
    <div class="container">
        <div class="project-details">
            <div class="page-img image-compare">
                <div class="comparison-labels">
                    <span class="before-label">Before</span>
                    <span class="after-label">After</span>
                </div>
                <img src="{{ asset('storage/' . $project->new_image) }}" alt="New Project Image" class="image-after">
                <img src="{{ asset('storage/' . $project->old_image) }}" alt="Old Project Image" class="image-before">
                <div class="slider-line">
                    <div class="slider-handle"></div>
                </div>
                <style>
                    .image-compare {
                        position: relative;
                        width: 100%;
                        height: 500px;
                        overflow: hidden;
                        border: 1px solid #000;
                        border-radius: 5px;
                        user-select: none; /* Prevent text selection */
                        -webkit-user-select: none; /* Safari */
                        -moz-user-select: none; /* Firefox */
                        -ms-user-select: none; /* IE10+/Edge */
                    }
                    .comparison-labels {
                        position: absolute;
                        top: 20px;
                        width: 100%;
                        z-index: 10;
                        display: flex;
                        justify-content: space-between;
                        padding: 0 20px;
                        pointer-events: none;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    }
                    .image-compare:hover .comparison-labels {
                        opacity: 1;
                    }
                    .before-label, .after-label {
                        background-color: rgba(0, 0, 0, 0.7);
                        color: white;
                        padding: 5px 15px;
                        border-radius: 20px;
                        font-weight: bold;
                        text-transform: uppercase;
                        font-size: 14px;
                        transform: translateY(-20px);
                        transition: transform 0.3s ease, opacity 0.3s ease;
                        opacity: 0;
                    }
                    .image-compare:hover .before-label,
                    .image-compare:hover .after-label {
                        transform: translateY(0);
                        opacity: 1;
                    }
                    .image-compare img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: all 0.1s ease; /* Faster transition */
                        pointer-events: none; /* Prevent image dragging */
                        -webkit-user-drag: none; /* Safari */
                        user-drag: none; /* Standard syntax */
                    }
                    .image-before {
                        clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);
                    }
                    .slider-line {
                        position: absolute;
                        top: 0;
                        left: 50%;
                        width: 2px;
                        height: 100%;
                        background: #000;
                        transform: translateX(-50%);
                        cursor: ew-resize;
                        box-shadow: 0 0 5px rgba(255, 255, 255, 0.7);
                        z-index: 5;
                    }
                    .slider-handle {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        width: 40px;
                        height: 40px;
                        border: 2px solid #000;
                        background-color: rgba(255, 255, 255, 0.8);
                        border-radius: 50%;
                        transform: translate(-50%, -50%);
                        cursor: ew-resize;
                        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
                        z-index: 6;
                    }
                </style>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const container = document.querySelector('.image-compare');
                        const beforeImage = container.querySelector('.image-before');
                        const sliderLine = container.querySelector('.slider-line');
                        let isResizing = false;

                        const resize = (e) => {
                            if (!isResizing) return;
                            
                            // Prevent default behavior to stop text selection
                            e.preventDefault();
                            
                            // Use requestAnimationFrame for smoother animation
                            requestAnimationFrame(() => {
                                const rect = container.getBoundingClientRect();
                                const x = Math.min(Math.max(0, (e.clientX || e.touches[0].clientX) - rect.left), rect.width);
                                const percent = (x / rect.width) * 100;
                                
                                sliderLine.style.left = `${percent}%`;
                                beforeImage.style.clipPath = `polygon(0 0, ${percent}% 0, ${percent}% 100%, 0 100%)`;
                            });
                        }

                        // Mouse events
                        sliderLine.addEventListener('mousedown', (e) => {
                            e.preventDefault();
                            isResizing = true;
                        });
                        
                        window.addEventListener('mousemove', (e) => {
                            if (isResizing) {
                                e.preventDefault();
                                resize(e);
                            }
                        });
                        
                        window.addEventListener('mouseup', () => {
                            isResizing = false;
                        });
                        
                        // Touch events with improved performance
                        sliderLine.addEventListener('touchstart', (e) => {
                            e.preventDefault();
                            isResizing = true;
                        });
                        
                        window.addEventListener('touchmove', (e) => {
                            if (isResizing) {
                                e.preventDefault();
                                resize(e);
                            }
                        });
                        
                        window.addEventListener('touchend', () => {
                            isResizing = false;
                        });
                        
                        // Prevent context menu on right-click
                        container.addEventListener('contextmenu', (e) => {
                            e.preventDefault();
                        });
                    });
                </script>
            </div>
            <ul class="project-details-wrap">
                <li>
                    <h6 class="title">Project Category:</h6>
                    <p class="text">{{ $project->projectCategory->name }}</p>
                </li>
                <li>
                    <h6 class="title">Clients:</h6>
                    <p class="text">{{ $project->client_name ?? 'N/A' }}</p>
                </li>
                <li>
                    <h6 class="title">Project Date:</h6>
                    <p class="text">{{ $project->start_date ?? 'N/A' }}</p>
                </li>
                <li>
                    <h6 class="title">Project End Date:</h6>
                    <p class="text">{{ $project->end_date ?? 'N/A' }}</p>
                </li>
                <li>
                    <h6 class="title">Locations:</h6>
                    <p class="text">{{ $project->location ?? 'N/A'}}</p>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="page-content style2 mb-40">
                    <h3 class="h3 page-title">Project Overview</h3>
                    <p class="sec-text mb-25">{{ $project->description }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area style2 pt-0">
                    <div class="widget widget_offer" data-overlay="title" data-opacity="9"
                        data-bg-src="{{ asset('assets/img/bg/widget_bg_1.jpg') }}">
                        <div class="offer-banner">
                            <div class="offer"><span class="sub-title">Contact for inquery</span>
                                <h6 class="box-title">Need Help? We Are Here To Help You</h6><a href="{{ url('/contact_us') }}"
                                    class="th-btn style1">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <br>
        <br>
        @if($project->image1)
        <div class="page-content style2 mb-40">
            <h3 class="page-title">Project Pictures</h3>
            <div class="row gy-30">
                @if($project->image1)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image1) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
                @if($project->image2)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image2) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
                @if($project->image3)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image3) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
                @if($project->image4)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image4) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
                @if($project->image5)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image5) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
                @if($project->image6)
                <div class="col-lg-4">
                    <div class="mb-0"><img src="{{ asset('storage/' . $project->image6) }}"
                            alt="Project Image" style="width: 350px; height: 200px; object-fit: cover; border: 1px solid black;"></div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</section>

@endsection
@extends('base')

@section('title', 'Projects | SECL')







@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Projects</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
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
            @foreach ($category as $item) 
            <button data-filter=".{{ $item->name }}" class="tab-btn" type="button">{{ $item->name }}</button> 
            @endforeach
        </div>

        <div class="row gallery-row filter-active">
            @foreach ($projects as $item)
            <div class="col-md-6 col-xl-auto filter-item {{ $item->projectCategory->name }}">
                <div class="project-box">
                    <div class="project-box-img"><img src="{{ asset('storage/' .$item->new_image) }}" alt="project image">
                    </div>
                    <div class="project-box-content">
                        <p class="project-subtitle">{{ $item->projectCategory->name }}</p>
                        <h3 class="box-title"><a href="{{ url('project_details/' . $item->id) }}">{{ $item->name }}</a></h3><a
                            href="{{ asset('storage/' .$item->new_image) }}" class="gallery-btn popup-image"><i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>




@endsection
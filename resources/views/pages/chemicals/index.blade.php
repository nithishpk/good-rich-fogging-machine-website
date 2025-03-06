@extends('layouts.app')

@section('title', 'Chemicals')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h1>Chemical Solutions</h1>
                        <ul class="breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active">Chemicals</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Chemical Products Section Start -->
    <div class="service-section section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Pest Control Solutions</h2>
                        <p>Professional-grade chemicals for effective pest control</p>
                    </div>
                </div>
            </div>

            <!-- Insecticides Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="mb-4">Insecticides</h3>
                </div>
                @foreach($chemicals['insecticides'] as $chemical)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service mb-30">
                            <div class="service-image">
                                <img src="{{ asset($chemical['image']) }}" alt="{{ $chemical['name'] }}">
                            </div>
                            <div class="service-content text-center">
                                <h3>{{ $chemical['name'] }}</h3>
                                <p>{{ $chemical['description'] }}</p>
                                <a href="{{ route('chemicals.insecticides') }}" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sanitizers Section -->
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-4">Sanitizers</h3>
                </div>
                @foreach($chemicals['sanitizers'] as $chemical)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service mb-30">
                            <div class="service-image">
                                <img src="{{ asset($chemical['image']) }}" alt="{{ $chemical['name'] }}">
                            </div>
                            <div class="service-content text-center">
                                <h3>{{ $chemical['name'] }}</h3>
                                <p>{{ $chemical['description'] }}</p>
                                <a href="{{ route('chemicals.sanitizers') }}" class="btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Chemical Products Section End -->
@endsection

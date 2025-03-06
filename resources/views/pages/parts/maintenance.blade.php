@extends('layouts.app')

@section('title', 'Maintenance Parts')

@section('content')
        <!-- Page Title Area Start -->
        <div class="your-opinion-area overly-bg-black section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="your-opinion-wrap text-center text-white">
                            <h1>Maintenance Parts</h1>
                            <p class="lead">Essential maintenance components for your pest control equipment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title Area End -->

        <!-- Parts Catalog Start -->
        <div class="our-service-area bg-grey section-pt section-pb-80">
            <div class="container">
                @php
    $parts = json_decode(file_get_contents(resource_path('data/product-parts.json')), true)['maintenance_parts'];
    $maintenanceParts = array_filter($parts, function ($part) {
        return in_array($part['usage'], ['Sealing Component', 'Motion Component', 'Monitoring Component']);
    });
                @endphp

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4>GENUINE PARTS</h4>
                            <h2>Maintenance Components</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($maintenanceParts as $part)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-service mt--30 mb--30">
                                <div class="service-content text-center" style="height: 300px;">
                                    <div class="part-icon mb-4">
                                        <i class="icofont-gear fa-3x text-primary"></i>
                                    </div>
                                    <h3>{{ $part['name'] }}</h3>
                                    <div class="usage-badge mb-3">
                                        <span class="badge bg-info">{{ $part['usage'] }}</span>
                                    </div>
                                    <p>{{ $part['description'] }}</p>
                                    <div class="contact-us-button">
                                        <button onclick="showForm('parts','{{ $part['id'] }}')" class="default-btn border-radius">
                                            Get Quote
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- Maintenance Tips -->
                <div class="faq-area section-pt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h4>SERVICE TIPS</h4>
                                <h2>Professional Advice</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-faq text-center">
                                <div class="title-content">
                                    <h4>Regular Maintenance</h4>
                                    <i class="icofont-tools"></i>
                                </div>
                                <p>Follow the recommended maintenance schedule to prevent equipment failure and ensure optimal performance.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-faq text-center">
                                <div class="title-content">
                                    <h4>Genuine Parts</h4>
                                    <i class="icofont-badge"></i>
                                </div>
                                <p>Always use genuine Seesa parts for maintenance to maintain warranty and ensure proper functioning.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-faq text-center">
                                <div class="title-content">
                                    <h4>Professional Service</h4>
                                    <i class="icofont-worker"></i>
                                </div>
                                <p>Get professional service for complex maintenance tasks to ensure proper repair and longevity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Parts Catalog End -->

        <!-- Call to Action Start -->
        <div class="something-new-area something-new-bg overly-bg-black section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="something-new-inner text-center text-white">
                            <h2>Need Maintenance Support?</h2>
                            <p>Our expert team is here to help with maintenance and repairs</p>
                            <div class="contact-us-button">
                                <a href="{{ route('services') }}" class="default-btn border-radius me-3">Our Services</a>
                                <a href="{{ route('contact') }}" class="primary-btn border-radius">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
@endsection

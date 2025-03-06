@extends('layouts.app')

@section('title', 'Spraying Parts')

@section('content')
        <!-- Page Title Area Start -->
        <div class="your-opinion-area overly-bg-black section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="your-opinion-wrap text-center text-white">
                            <h1>Spraying Parts</h1>
                            <p class="lead">Essential spraying components for your pest control equipment</p>
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
    $sprayingParts = array_filter($parts, function ($part) {
        return in_array($part['usage'], ['Spraying Component', 'Flow Component', 'Pressure Component']);
    });
                @endphp

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4>GENUINE PARTS</h4>
                            <h2>Spraying Components</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($sprayingParts as $part)
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
            </div>
        </div>
        <!-- Parts Catalog End -->

        <!-- Call to Action Start -->
        <div class="something-new-area something-new-bg overly-bg-black section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="something-new-inner text-center text-white">
                            <h2>Need Expert Advice?</h2>
                            <p>Our team can help you select the right components for your needs</p>
                            <div class="contact-us-button">
                                <a href="{{ route('contact') }}" class="default-btn border-radius">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
@endsection

@extends('layouts.app')

@section('title', 'Sanitizers')

@section('content')
    <!-- Page Title Area Start -->
    <div class="your-opinion-area overly-bg-black section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="your-opinion-wrap text-center text-white">
                        <h1>Professional Sanitizers</h1>
                        <p class="lead">Industrial-grade sanitization solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title Area End -->

    <!-- Safety Notice Start -->
    <div class="repair-make-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info">
                        <div class="repair-service-inner">
                            <h3><i class="icofont-info-circle"></i> Professional Use Products</h3>
                            <p>Our sanitizers are formulated for professional use. Always follow proper dilution ratios and safety guidelines for optimal results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Safety Notice End -->

    <!-- Products List Start -->
    <div class="our-service-area bg-grey section-pt section-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h4>SANITIZATION SOLUTIONS</h4>
                        <h2>Professional Sanitizers</h2>
                    </div>
                </div>
            </div>

            <div class="row service-slider-active">
                @foreach($chemicals as $chemical)
                    <div class="col-lg-6">
                        <!-- Single Service Start -->
                        <div class="single-service mt--30 mb--30">
                            <div class="service-content">
                                <div class="title-content mb-4">
                                    <h3>{{ $chemical['name'] }}</h3>
                                    <div class="badges mt-2">
                                        <span class="badge bg-primary">{{ $chemical['type'] }}</span>
                                        <span class="badge bg-info">{{ $chemical['size'] }}</span>
                                    </div>
                                </div>

                                <!-- Applications -->
                                <div class="mb-4">
                                    <h5><i class="icofont-spray text-primary me-2"></i>Applications:</h5>
                                    <div class="d-flex flex-wrap gap-3 mt-2">
                                        @foreach($chemical['applications'] as $application)
                                        <span class="badge bg-secondary mr-1">{{ $application }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Usage Instructions -->
                                <div class="mb-4">
                                    <h5><i class="icofont-info-circle text-primary me-2"></i>Usage Instructions:</h5>
                                    <p>{{ $chemical['usage'] }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4">

                                    <a href="{{ route('contact') }}" onclick="showForm('chemical', '{{ $chemical['name'] }}')" class="default-btn border-radius">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service End -->
                    </div>
                @endforeach
            </div>


            <!-- Application Guidelines -->
            <div class="faq-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4>APPLICATION GUIDELINES</h4>
                            <h2>Best Practices</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-faq text-center">
                            <div class="title-content">
                                <h4>Proper Dilution</h4>
                                <i class="icofont-water-drop"></i>
                            </div>
                            <p>Follow recommended dilution ratios for optimal effectiveness and safety.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-faq text-center">
                            <div class="title-content">
                                <h4>Application Method</h4>
                                <i class="icofont-spray"></i>
                            </div>
                            <p>Use appropriate spraying equipment for even coverage and maximum efficiency.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-faq text-center">
                            <div class="title-content">
                                <h4>Safety Measures</h4>
                                <i class="icofont-safety"></i>
                            </div>
                            <p>Wear protective equipment and ensure proper ventilation during application.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products List End -->

    <!-- Call to Action Start -->
    <div class="something-new-area something-new-bg overly-bg-black section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="something-new-inner text-center text-white">
                        <h2>Need Professional Sanitization?</h2>
                        <p>Our experts provide comprehensive sanitization services for all types of spaces</p>
                        <div class="contact-us-button">
                            <a href="{{ route('services') }}" class="default-btn border-radius me-3">Our Services</a>
                            <a href="{{ route('contact') }}" class="primary-btn border-radius">Get Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@endsection

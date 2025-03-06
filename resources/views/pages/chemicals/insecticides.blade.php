@extends('layouts.app')

@section('title', 'Insecticides')

@section('content')
    <!-- Page Title Area Start -->
    <div class="your-opinion-area overly-bg-black section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ml-auto mr-auto">
                    <div class="your-opinion-wrap text-center text-white">
                        <h1>Professional Insecticides</h1>
                        <p class="lead">Effective solutions for pest control</p>
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
                    <div class="alert alert-warning">
                        <div class="repair-service-inner">
                            <h3><i class="icofont-warning-alt"></i> Safety First</h3>
                            <p>All insecticides must be used according to manufacturer guidelines. Always wear appropriate protective equipment and read safety instructions before use.</p>
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
                        <h4>CHEMICAL SOLUTIONS</h4>
                        <h2>Professional Insecticides</h2>
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

                                <!-- Target Pests -->
                                <div class="mb-4">
                                    <h5><i class="icofont-bug text-danger me-2"></i> &nbsp; Effective Against:</h5>
                                    <div class="d-flex flex-wrap gap-3 mt-2">
                                        @foreach($chemical['target_pests'] as $pest)
                                            <span class="badge bg-secondary mr-1">{{ $pest }}</span>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Usage Instructions -->
                                <div class="mb-4">
                                    <h5><i class="icofont-info-circle text-primary me-2"></i> &nbsp; Usage Instructions:</h5>
                                    <p>{{ $chemical['usage'] }}</p>
                                </div>

                                @if(isset($chemical['safety_measures']))
                                    <!-- Safety Measures -->
                                    <div class="mb-4">
                                        <h5><i class="icofont-shield text-success me-2"></i> &nbsp; Safety Measures:</h5>
                                        <ul class="list-unstyled">
                                            @foreach($chemical['safety_measures'] as $measure)
                                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp; {{ $measure }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

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
                                <h4>Protective Equipment</h4>
                                <i class="icofont-safety"></i>
                            </div>
                            <p>Always wear proper protective gear including gloves, mask, and eye protection when handling chemicals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-faq text-center">
                            <div class="title-content">
                                <h4>Proper Dilution</h4>
                                <i class="icofont-water-drop"></i>
                            </div>
                            <p>Follow exact dilution ratios as specified. Incorrect mixing can reduce effectiveness or cause harm.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-faq text-center">
                            <div class="title-content">
                                <h4>Safe Storage</h4>
                                <i class="icofont-lock"></i>
                            </div>
                            <p>Store chemicals in a cool, dry place away from direct sunlight and out of reach of children.</p>
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
                        <h2>Need Professional Application?</h2>
                        <p>Our trained experts can handle the application safely and effectively</p>
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

@extends('layouts.app')

@section('title', 'Professional Fogging Machines | Goodrich Pest Control Equipment')

@section('meta_description', 'High-quality professional fogging machines for effective pest control. Featuring durable construction, efficient operation, and comprehensive warranty. Perfect for commercial and residential pest control.')

@section('meta_keywords', 'fogging machine, pest control equipment, thermal fogger, ULV fogger, pest control machine, disinfection equipment, sanitization machine')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Professional Fogging Machine",
    "image": "{{ asset($mainProduct['images'][0]) }}",
    "description": "High-quality professional fogging machine for effective pest control and sanitization. Features durable construction, efficient operation, and comprehensive warranty.",
    "brand": {
        "@type": "Brand",
        "name": "Goodrich Pest Control"
    },
    "offers": {
        "@type": "Offer",
        "url": "{{ url()->current() }}",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock"
    }
}
</script>
@endpush

@section('content')
    <!-- Page Title Area Start -->
    <div class="breadcrumb-area section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="breadcrumb-title">Professional Fogging Machines</h1>
                    <!-- breadcrumb-list start -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a href="{{ route('home') }}" itemprop="item"><span itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name">Fogging Machine</span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </nav>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Title Area End -->

    <!-- Product Details Start -->
    <article class="our-service-area section-pt section-pb-80" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="name" content="Professional Fogging Machine">
        <meta itemprop="brand" content="Goodrich Pest Control">
        <div class="container">
            <!-- Product Images -->
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel" aria-label="Product Images">
                        <div class="carousel-inner">
                            @foreach($mainProduct['images'] as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset($image) }}" class="d-block w-100"
                                     alt="Professional Fogging Machine - {{ $index === 0 ? 'Main View' : 'View ' . ($index + 1) }}"
                                     itemprop="image">
                            </div>
                            @endforeach
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-content" itemprop="description">
                        <div class="section-title text-left">
                            <h2 class="h4 text-uppercase">Technical Details</h2>
                            <h3>Product Specifications</h3>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped" aria-label="Product Specifications">
                                <tbody itemscope itemtype="https://schema.org/PropertyValueSpecification">
                                    @foreach($mainProduct['specifications'] as $key => $value)
                                    <tr>
                                        <th scope="row" itemprop="propertyID">{{ ucwords(str_replace('_', ' ', $key)) }}</th>
                                        <td itemprop="value">{{ $value }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="make-apoinment-button mt-4">
                            <button onclick="showForm('product', '{{ $mainProduct['name'] }}')" class="default-btn border-radius">Request Quote</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <section class="product-features mb-5" aria-labelledby="features-heading">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 id="features-heading" class="h4 text-uppercase">Product Features</h2>
                            <h3>Key Features & Benefits</h3>
                        </div>
                    </div>
                </div>
                <div class="row service-slider-active">
                    @foreach($mainProduct['features'] as $feature)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-service" itemprop="additionalProperty" itemscope itemtype="https://schema.org/PropertyValue">
                            <div class="service-content text-center">
                                <div class="feature-icon mb-3" aria-hidden="true">
                                    <i class="icofont-check-circled text-primary fa-2x"></i>
                                </div>
                                <p class="feature-text" itemprop="value">{{ $feature }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- Applications -->
            <section class="product-applications mt-5" aria-labelledby="applications-heading" itemprop="usageInstructions">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 id="applications-heading" class="h4 text-uppercase">Applications</h2>
                            <h3>Where to Use</h3>
                        </div>
                    </div>
                </div>
                <div class="row" itemscope itemtype="https://schema.org/ItemList">
                    @foreach($mainProduct['applications'] as $index => $application)
                    <div class="col-lg-4 col-md-6 mb-4" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <div class="single-service">
                            <div class="service-content text-center">
                                <div class="application-icon mb-3" aria-hidden="true">
                                    <i class="icofont-spray text-primary fa-2x"></i>
                                </div>
                                <h4 class="h5" itemprop="name">{{ $application }}</h4>
                                <meta itemprop="position" content="{{ $index + 1 }}" />
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- Package Contents -->
            <section class="package-contents mt-5" aria-labelledby="package-heading" itemprop="hasPart">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2 id="package-heading" class="h4 text-uppercase">Package Contents</h2>
                            <h3>What's in the Box</h3>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="package-content">
                                    <ul class="list-group" itemscope itemtype="https://schema.org/ItemList">
                                        @foreach($mainProduct['package_contents'] as $index => $item)
                                        <li class="list-group-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                            <i class="icofont-box text-primary me-2" aria-hidden="true"></i>
                                            <span itemprop="name">{{ $item }}</span>
                                            <meta itemprop="position" content="{{ $index + 1 }}" />
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </article>
    <!-- Product Details End -->

    <!-- Call to Action Start -->
    <section class="something-new-area something-new-bg overly-bg-black section-ptb" aria-label="Purchase Call to Action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="something-new-inner text-center text-white">
                        <h2 class="cta-heading">Ready to Purchase?</h2>
                        <p>Contact us now for pricing and availability</p>
                        <div class="contact-us-button">
                            <button onclick="showForm('product', 'Fogging Machine')" class="default-btn border-radius" aria-label="Request a Quote">Get Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->
@endsection

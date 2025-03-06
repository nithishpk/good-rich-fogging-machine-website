@extends('layouts.app')

@section('title', 'Goodrich Pest Control | Professional Fogging Machines & Equipment')

@section('meta_description', 'Leading provider of professional fogging machines, pest control equipment, and maintenance services in Bangalore. High-quality products, expert support, and comprehensive solutions for effective pest control.')

@section('meta_keywords', 'pest control equipment, fogging machines, pest control chemicals, pest control parts, pest control maintenance, pest control bangalore, professional pest control')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Goodrich Pest Control",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('assets/images/logo/Good_rich_logo.png') }}",
    "description": "Leading provider of professional fogging machines and pest control equipment in Bangalore",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "6/10, 1st Main Rd, near Amaravathi Hotel, 4th Cross, Madiwala, 1st Stage, Maruthi Nagar",
        "addressLocality": "Bangalore",
        "addressRegion": "Karnataka",
        "addressCountry": "IN"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+919916777706",
        "contactType": "sales",
        "email": "goodrichpestcontrol@gmail.com"
    },
    "sameAs": [
        "{{ url('/') }}"
    ]
}
</script>
@endpush

@section('content')

        <!-- Hero Section start -->
        <section class="hero-slider hero-slider-1" aria-label="Hero Section">
            <div class="single-slide overly-bg-black" style="background-image: url({{ asset('/images/banner.webp') }})" role="banner">
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-text-info">
                                <h1 class="main-title" itemprop="name">{{ $mainProduct['name'] }}</h1>
                                <p class="lead" itemprop="description">{{ $mainProduct['description'] }}</p>
                                <div class="slider-button">
                                    <a href="{{ route('products') }}" class="default-btn border-radius" aria-label="View product details">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section end -->
            <!-- Solutions Section Start -->
            <section class="our-service-area-two section-ptb" aria-labelledby="solutions-heading">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="service-area-tow mt--20 mb--20">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-6">
                                        <header class="single-service-title-area">
                                            <div class="service-title">
                                                <h2 id="solutions-heading" class="text-uppercase">Our Solutions</h2>
                                                <p>We provide comprehensive solutions for pest control with our advanced fogging machines and professional services</p>
                                            </div>
                                        </header>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="single-service text-center" itemscope itemtype="https://schema.org/Service">
                                            <div class="service-icon" aria-hidden="true">
                                                <i class="pe-7s-science"></i>
                                            </div>
                                            <div class="service-content-info text-center">
                                                <h3 itemprop="name">Advanced Technology</h3>
                                                <p itemprop="description">State-of-the-art fogging machines equipped with the latest pest control technology.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="single-service text-center" itemscope itemtype="https://schema.org/Service">
                                            <div class="service-icon" aria-hidden="true">
                                                <i class="pe-7s-drop"></i>
                                            </div>
                                            <div class="service-content-info text-center">
                                                <h3 itemprop="name">Quality Chemicals</h3>
                                                <p itemprop="description">Premium-grade, eco-friendly chemicals for effective pest control solutions.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="single-service text-center" itemscope itemtype="https://schema.org/Service">
                                            <div class="service-icon" aria-hidden="true">
                                                <i class="pe-7s-tools"></i>
                                            </div>
                                            <div class="service-content-info text-center">
                                                <h3 itemprop="name">Genuine Parts</h3>
                                                <p itemprop="description">Original spare parts and accessories for all types of fogging machines.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="single-service text-center" itemscope itemtype="https://schema.org/Service">
                                            <div class="service-icon" aria-hidden="true">
                                                <i class="pe-7s-settings"></i>
                                            </div>
                                            <div class="service-content-info text-center">
                                                <h3 itemprop="name">Expert Maintenance</h3>
                                                <p itemprop="description">Professional repair and maintenance services for optimal performance.</p>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <article class="single-service text-center" itemscope itemtype="https://schema.org/Service">
                                            <div class="service-icon" aria-hidden="true">
                                                <i class="pe-7s-headphones"></i>
                                            </div>
                                            <div class="service-content-info text-center">
                                                <h3 itemprop="name">Support</h3>
                                                <p itemprop="description">Round-the-clock technical support and customer service assistance.</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Solutions Section End -->


            <!-- About Section Start -->
            <section class="about-aircon-area bg-grey section-ptb" aria-labelledby="about-heading" itemscope itemtype="https://schema.org/Organization">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="about-aircon-content">
                                <span class="top-border" aria-hidden="true"></span>
                                <span class="bottom-border" aria-hidden="true"></span>
                                <header class="about-title">
                                    <h2 id="about-heading" class="text-uppercase"><span>About</span> Our Company</h2>
                                </header>
                                <div class="about-info">
                                    <h3 itemprop="slogan">Your Trusted Partner in Professional Pest Control Equipment</h3>
                                    <div itemprop="description">
                                        <p>With years of expertise in the pest control industry, we specialize in providing top-quality fogging machines, genuine parts, and eco-friendly chemicals. Our comprehensive range of products and services ensures effective pest control solutions for residential, commercial, and industrial applications.</p>
                                        <p>We take pride in offering state-of-the-art fogging equipment backed by expert maintenance services and technical support. Our team of professionals ensures that every product and service meets the highest standards of quality and safety.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-image">
                                <img src="{{ asset('images/about_us/about_us_illustrator.jpg') }}"
                                     alt="Professional pest control equipment and fogging machines"
                                     itemprop="image"
                                     width="600"
                                     height="400">
                                <div class="about-image-box" aria-hidden="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

    <section class="project-count-inner bg-grey section-pb section-pt-80" aria-label="Company Statistics">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter text-center" itemscope itemtype="https://schema.org/Offer">
                        <h3 class="counter-active" aria-label="Total Machines Sold">
                            <span itemprop="eligibleQuantity">1500</span>
                        </h3>
                        <p itemprop="description">Machines Sold</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter text-center" itemscope itemtype="https://schema.org/Offer">
                        <h3 class="counter-active" aria-label="Total Parts Supplied">
                            <span itemprop="eligibleQuantity">2000</span>
                        </h3>
                        <p itemprop="description">Parts Supplied</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter text-center" itemscope itemtype="https://schema.org/AggregateRating">
                        <h3 class="counter-active" aria-label="Number of Happy Clients">
                            <span itemprop="ratingCount">500</span>
                        </h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter text-center" itemscope itemtype="https://schema.org/Organization">
                        <h3 class="counter-active" aria-label="Years of Experience">
                            <span itemprop="foundingDate" content="2013">10</span>
                        </h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Products Gallery Section Start -->
        <section class="aircon-gallery-area section-ptb" aria-labelledby="products-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <header class="section-title-two">
                            <h2 id="products-heading">Our <span>Fogging</span> and <span>Pest Control</span> Solutions</h2>
                            <p class="section-description">Discover our comprehensive range of fogging machines, parts, chemicals, and professional services.</p>
                        </header>
                    </div>
                </div>
                <div class="our-gallery-area">
                    <div class="row">
                        <div class="col-12">
                            <nav class="hp-gallery-area mb--20" aria-label="Product Categories">
                                <div class="gallery-menu" role="tablist">
                                    <button data-filter="*" class="is-checked" role="tab" aria-selected="true">All Products</button>
                                    <button data-filter=".cat-1" role="tab" aria-selected="false">Fogging Machines</button>
                                    <button data-filter=".cat-2" role="tab" aria-selected="false">Spare Parts</button>
                                    <button data-filter=".cat-3" role="tab" aria-selected="false">Chemical Solutions</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- Products Section -->

                    <div class="row masonry-wrap" role="tabpanel">
                        <!-- Main Product -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-item cat-1">
                            <article class="single-service mb--30" itemscope itemtype="https://schema.org/Product">
                                <div class="service-content text-center">
                                    <h3><a href="{{ route('products') }}" itemprop="name">{{ $mainProduct['name'] }}</a></h3>
                                    <p itemprop="description">{{ $mainProduct['description'] }}</p>
                                    <a href="{{ route('products') }}" class="view-product-link" aria-label="View details of {{ $mainProduct['name'] }}">VIEW PRODUCT</a>
                                </div>
                            </article>
                        </div>

                        <!-- Parts Display -->
                        @foreach($parts as $key => $part)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-item cat-2">
                            <article class="single-service mb--30" itemscope itemtype="https://schema.org/Product">
                                <div class="service-content text-center">
                                    <h3><a href="{{ route('parts') }}" itemprop="name">{{ $part['name'] }}</a></h3>
                                    <p itemprop="description">{{ $part['description'] }}</p>
                                    <a href="{{ route('parts') }}" class="border-radius view-parts-link" aria-label="View details of {{ $part['name'] }}">VIEW PARTS</a>
                                </div>
                            </article>
                        </div>
                        @endforeach

                        <!-- Chemical Solutions Display -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-item cat-3">
                            <article class="single-service mb--30" itemscope itemtype="https://schema.org/Product">
                                <div class="service-content text-center">
                                    <h3><a href="{{ route('products') }}" itemprop="name">Pyrethrum Extract</a></h3>
                                    <p itemprop="description">Natural insecticide solution effective against flying insects</p>
                                    <meta itemprop="category" content="Chemical Solutions">
                                    <a href="{{ route('products') }}" class="border-radius" aria-label="View details of Pyrethrum Extract">VIEW DETAILS</a>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-item cat-3">
                            <article class="single-service mb--30" itemscope itemtype="https://schema.org/Product">
                                <div class="service-content text-center">
                                    <h3><a href="{{ route('products') }}" itemprop="name">Deltamethrin Solution</a></h3>
                                    <p itemprop="description">Broad spectrum insecticide for professional pest control</p>
                                    <meta itemprop="category" content="Chemical Solutions">
                                    <a href="{{ route('products') }}" class="border-radius" aria-label="View details of Deltamethrin Solution">VIEW DETAILS</a>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 gallery-item cat-3">
                            <article class="single-service mb--30" itemscope itemtype="https://schema.org/Product">
                                <div class="service-content text-center">
                                    <h3><a href="{{ route('products') }}" itemprop="name">Malathion Concentrate</a></h3>
                                    <p itemprop="description">Powerful insecticide for controlling mosquitoes and other pests</p>
                                    <meta itemprop="category" content="Chemical Solutions">
                                    <a href="{{ route('products') }}" class="border-radius" aria-label="View details of Malathion Concentrate">VIEW DETAILS</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Gallery Section End -->

        <!-- Call to Action Section Start -->
        <section class="something-new-area something-new-bg overly-bg-black section-ptb" aria-labelledby="cta-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="something-new-inner text-center text-white" itemscope itemtype="https://schema.org/Offer">
                            <h2 id="cta-heading" itemprop="name">Need Professional Fogging Equipment?</h2>
                            <p itemprop="description">Get high-quality fogging machines, genuine parts, and expert support for your pest control needs</p>
                            <div class="contact-us-button">
                                <a href="{{ route('products') }}" class="default-btn border-radius"
                                   aria-label="Browse our complete product catalog">Browse Products</a>
                                <a href="{{ route('contact') }}" class="primary-btn border-radius"
                                   aria-label="Request a quote for our products"
                                   itemprop="url">Request Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action Section End -->
@endsection

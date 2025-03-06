@extends('layouts.app')

@section('title', 'Genuine Pest Control Machine Parts | Goodrich Pest Control')

@section('meta_description', 'Get genuine spare parts and accessories for all types of pest control and fogging machines. High-quality spraying nozzles, tanks, motors, pipes, and pumps with expert support in Bangalore.')

@section('meta_keywords', 'pest control parts, fogging machine parts, spraying nozzle, tanks, motors, pipes, pumps, genuine parts, spare parts, pest control accessories, bangalore')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "Pest Control Machine Parts",
    "description": "Genuine spare parts and accessories for all types of pest control and fogging machines",
    "brand": {
        "@type": "Brand",
        "name": "Goodrich Pest Control"
    },
    "offers": {
        "@type": "AggregateOffer",
        "availability": "https://schema.org/InStock",
        "priceCurrency": "INR",
        "itemCondition": "https://schema.org/NewCondition",
        "offerCount": "50+"
    }
}
</script>
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="breadcrumb-area section-ptb" aria-label="Page Header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="breadcrumb-title">Machine Parts</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a href="{{ route('home') }}" itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name">Machine Parts</span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Parts Categories Start -->
    <section class="our-service-area section-pt section-pb-80" aria-labelledby="categories-heading">
        <div class="container">
            <header class="section-title text-center mb-5">
                <h2 id="categories-heading">Genuine Parts Categories</h2>
                <p>Browse our comprehensive range of high-quality spare parts and accessories</p>
            </header>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-spray text-primary"></i>
                            </div>
                            <h3 itemprop="name">Spraying Nozzles</h3>
                            <p itemprop="description">High-quality spraying nozzles for uniform and efficient spraying patterns.</p>
                            <a href="{{ route('parts.spraying') }}" class="read-more" aria-label="Learn more about spraying nozzles">View Details</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-water-drop text-primary"></i>
                            </div>
                            <h3 itemprop="name">Tanks & Containers</h3>
                            <p itemprop="description">Durable tanks and containers in various capacities for different applications.</p>
                            <a href="{{ route('parts.maintenance') }}" class="read-more" aria-label="Learn more about tanks and containers">View Details</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-gear text-primary"></i>
                            </div>
                            <h3 itemprop="name">Motors & Pumps</h3>
                            <p itemprop="description">High-performance motors and pumps for reliable operation.</p>
                            <a href="{{ route('parts.maintenance') }}" class="read-more" aria-label="Learn more about motors and pumps">View Details</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-repair text-primary"></i>
                            </div>
                            <h3 itemprop="name">Pipes & Fittings</h3>
                            <p itemprop="description">Quality pipes and fittings for secure and leak-free connections.</p>
                            <a href="{{ route('parts.maintenance') }}" class="read-more" aria-label="Learn more about pipes and fittings">View Details</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-tools-alt-2 text-primary"></i>
                            </div>
                            <h3 itemprop="name">Maintenance Parts</h3>
                            <p itemprop="description">Essential maintenance parts to keep your equipment running smoothly.</p>
                            <a href="{{ route('parts.maintenance') }}" class="read-more" aria-label="Learn more about maintenance parts">View Details</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-settings text-primary"></i>
                            </div>
                            <h3 itemprop="name">Accessories</h3>
                            <p itemprop="description">Additional accessories to enhance your equipment's functionality.</p>
                            <a href="{{ route('parts.maintenance') }}" class="read-more" aria-label="Learn more about accessories">View Details</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Parts Categories End -->

    <!-- Call to Action Start -->
    <section class="something-new-area something-new-bg overly-bg-black section-ptb" aria-labelledby="cta-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="something-new-inner text-center text-white" itemscope itemtype="https://schema.org/Offer">
                        <h2 id="cta-heading" itemprop="name">Need Genuine Parts?</h2>
                        <p itemprop="description">Contact us for genuine spare parts and expert support</p>
                        <div class="contact-us-button">
                            <a href="{{ route('contact') }}" class="default-btn border-radius"
                               aria-label="Request a quote for parts">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->
@endsection

@extends('layouts.app')

@section('title', 'Professional Pest Control Chemicals | Goodrich Pest Control')

@section('meta_description', 'Premium-grade pest control chemicals and solutions. Eco-friendly insecticides, sanitizers, and effective pest control solutions for professional pest management in Bangalore.')

@section('meta_keywords', 'pest control chemicals, insecticides, sanitizers, eco-friendly chemicals, pest control solutions, pyrethrum extract, deltamethrin, malathion, pest control bangalore')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "ItemList",
    "name": "Pest Control Chemicals",
    "description": "Professional-grade pest control chemicals and solutions",
    "itemListElement": [
        {
            "@type": "Product",
            "name": "Premium Insecticides",
            "description": "High-quality insecticides for effective pest control",
            "category": "Pest Control Chemicals",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock"
            }
        },
        {
            "@type": "Product",
            "name": "Professional Sanitizers",
            "description": "Industrial-grade sanitizers for thorough disinfection",
            "category": "Sanitization Solutions",
            "offers": {
                "@type": "Offer",
                "availability": "https://schema.org/InStock"
            }
        }
    ]
}
</script>
@endpush

@section('content')
    <!-- Hero Section Start -->
    <section class="breadcrumb-area section-ptb" aria-label="Page Header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="breadcrumb-title">Pest Control Chemicals</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a href="{{ route('home') }}" itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name">Chemicals</span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Chemical Categories Start -->
    <section class="our-service-area section-pt section-pb-80" aria-labelledby="categories-heading">
        <div class="container">
            <header class="section-title text-center mb-5">
                <h2 id="categories-heading">Our Chemical Solutions</h2>
                <p>Professional-grade chemicals for effective pest control and sanitization</p>
            </header>

            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-bug text-primary"></i>
                            </div>
                            <h3 itemprop="name">Professional Insecticides</h3>
                            <p itemprop="description">High-quality insecticides for effective pest control solutions.</p>
                            <ul class="feature-list text-left mt-3" aria-label="Insecticide Features">
                                <li>Pyrethrum Extract - Natural and effective</li>
                                <li>Deltamethrin Solution - Broad spectrum control</li>
                                <li>Malathion Concentrate - Powerful pest control</li>
                            </ul>
                            <a href="{{ route('chemicals.insecticides') }}" class="read-more mt-3"
                               aria-label="Learn more about our insecticides">View Insecticides</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Product">
                        <div class="service-content text-center">
                            <div class="service-icon" aria-hidden="true">
                                <i class="icofont-water-drop text-primary"></i>
                            </div>
                            <h3 itemprop="name">Sanitization Solutions</h3>
                            <p itemprop="description">Professional-grade sanitizers for thorough disinfection.</p>
                            <ul class="feature-list text-left mt-3" aria-label="Sanitizer Features">
                                <li>Hospital-grade Disinfectants</li>
                                <li>Environmental-friendly Solutions</li>
                                <li>Long-lasting Protection</li>
                            </ul>
                            <a href="{{ route('chemicals.sanitizers') }}" class="read-more mt-3"
                               aria-label="Learn more about our sanitizers">View Sanitizers</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Features Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <header class="section-title text-center mb-4">
                        <h2>Why Choose Our Chemicals?</h2>
                    </header>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-check-circled text-success"></i>
                        </div>
                        <h3>Quality Assured</h3>
                        <p>All chemicals are tested and certified for safety and effectiveness</p>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-environment-care text-success"></i>
                        </div>
                        <h3>Eco-Friendly</h3>
                        <p>Environmental-friendly formulations that are safe when used as directed</p>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-badge text-success"></i>
                        </div>
                        <h3>Professional Grade</h3>
                        <p>Industrial strength solutions for professional pest control</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Chemical Categories End -->

    <!-- Call to Action Start -->
    <section class="something-new-area something-new-bg overly-bg-black section-ptb" aria-labelledby="cta-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="something-new-inner text-center text-white" itemscope itemtype="https://schema.org/Offer">
                        <h2 id="cta-heading" itemprop="name">Need Professional Chemicals?</h2>
                        <p itemprop="description">Get high-quality pest control chemicals with expert guidance</p>
                        <div class="contact-us-button">
                            <a href="{{ route('contact') }}" class="default-btn border-radius"
                               aria-label="Request a quote for chemicals">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->
@endsection

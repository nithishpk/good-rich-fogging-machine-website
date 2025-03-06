@extends('layouts.app')

@section('title', 'Professional Pest Control Equipment Services | Goodrich Pest Control')

@section('meta_description', 'Expert maintenance, repair, and support services for pest control equipment in Bangalore. Professional technicians, genuine parts, and comprehensive service solutions for all types of fogging machines.')

@section('meta_keywords', 'pest control services, equipment maintenance, fogging machine repair, pest control support, technical service, machine maintenance, pest control bangalore')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "ServiceCollection",
    "name": "Pest Control Equipment Services",
    "description": "Professional maintenance and repair services for pest control equipment",
    "provider": {
        "@type": "LocalBusiness",
        "name": "Goodrich Pest Control",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bangalore",
            "addressRegion": "Karnataka",
            "addressCountry": "IN"
        }
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Equipment Services",
        "itemListElement": [
            {
                "@type": "Service",
                "name": "Equipment Maintenance",
                "description": "Regular maintenance services for pest control equipment"
            },
            {
                "@type": "Service",
                "name": "Repair Services",
                "description": "Professional repair services for all types of fogging machines"
            },
            {
                "@type": "Service",
                "name": "Technical Support",
                "description": "Expert technical support and consultation"
            }
        ]
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
                    <h1 class="breadcrumb-title">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a href="{{ route('home') }}" itemprop="item">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <span itemprop="name">Services</span>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Start -->
    <section class="our-service-area section-pt section-pb-80" aria-labelledby="services-heading">
        <div class="container">
            <header class="section-title text-center mb-5">
                <h2 id="services-heading">Our Professional Services</h2>
                <p>Comprehensive service solutions for all your pest control equipment needs</p>
            </header>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Service">
                        <div class="service-content">
                            <div class="service-icon text-center" aria-hidden="true">
                                <i class="icofont-tools-alt-2 fs-3 text-primary" style="font-size: 4rem;color:#fb7832 !important"></i>
                            </div>
                            <h3 itemprop="name">Equipment Maintenance</h3>
                            <p itemprop="description">Regular maintenance services to ensure optimal performance of your equipment.</p>

                            <ul class="feature-list text-left mt-3" aria-label="Maintenance Features">
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Scheduled maintenance programs</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Performance optimization</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Preventive maintenance</li>
                            </ul>
                            <div class="d-flex justify-content-between text-center mt-4">

                                <a href="{{ route('contact') }}" onclick="showForm('service', 'general')"
                                    class="default-btn border-radius">Enquire Now</a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Service">
                        <div class="service-content">
                            <div class="service-icon text-center" aria-hidden="true">
                                <i class="icofont-repair text-primary" style="font-size: 4rem;color:#fb7832 !important"></i>
                            </div>
                            <h3 itemprop="name">Repair Services</h3>
                            <p itemprop="description">Professional repair services for all types of fogging machines and equipment.</p>
                            <ul class="feature-list text-left mt-3" aria-label="Repair Features">
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Expert diagnostics</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Genuine parts replacement</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Quality assurance</li>
                            </ul>
                                    <div class="d-flex justify-content-between text-center mt-4">

                                        <a href="{{ route('contact') }}" onclick="showForm('service', 'repair')" class="default-btn border-radius">Enquire
                                            Now</a>
                                    </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <article class="single-service" itemscope itemtype="https://schema.org/Service">
                        <div class="service-content">
                            <div class="service-icon text-center" aria-hidden="true">
                                <i class="icofont-support text-primary" style="font-size: 4rem;color:#fb7832 !important"></i>
                            </div>
                            <h3 itemprop="name">Technical Support</h3>
                            <p itemprop="description">Expert technical support and consultation for your equipment.</p>
                            <ul class="feature-list text-left mt-3" aria-label="Support Features">
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Emergency support availability</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Expert consultation</li>
                                <li><i class="icofont-check-circled text-success me-2"></i>&nbsp;&nbsp;Operating guidance</li>
                            </ul>
                                        <div class="d-flex justify-content-between text-center mt-4">

                                            <a href="{{ route('contact') }}" onclick="showForm('service', 'maintenance')" class="default-btn border-radius">Enquire
                                                Now</a>
                                        </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="row mt-5">
                <div class="col-12">
                    <header class="section-title text-center mb-4">
                        <h2>Why Choose Our Services?</h2>
                    </header>
                </div>

                <div class="col-lg-3 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-worker text-success"></i>
                        </div>
                        <h3>Expert Technicians</h3>
                        <p>Trained and certified service professionals</p>
                    </article>
                </div>

                <div class="col-lg-3 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-badge text-success"></i>
                        </div>
                        <h3>Quality Service</h3>
                        <p>Guaranteed satisfaction with every service</p>
                    </article>
                </div>

                <div class="col-lg-3 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-speed-meter text-success"></i>
                        </div>
                        <h3>Quick Response</h3>
                        <p>Prompt service and minimal downtime</p>
                    </article>
                </div>

                <div class="col-lg-3 col-md-6">
                    <article class="feature-item text-center mb-4" itemscope itemtype="https://schema.org/ItemList">
                        <div class="feature-icon mb-3" aria-hidden="true">
                            <i class="icofont-price text-success"></i>
                        </div>
                        <h3>Competitive Rates</h3>
                        <p>Affordable and transparent pricing</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="something-new-area something-new-bg overly-bg-black section-ptb" aria-labelledby="cta-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="something-new-inner text-center text-white" itemscope itemtype="https://schema.org/Offer">
                        <h2 id="cta-heading" itemprop="name">Need Professional Service?</h2>
                        <p itemprop="description">Contact us for expert maintenance and support</p>
                        <div class="contact-us-button">
                            <a href="{{ route('contact') }}" class="default-btn border-radius"
                               aria-label="Request service appointment">Schedule Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->
@endsection

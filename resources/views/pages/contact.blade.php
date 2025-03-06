@extends('layouts.app')

@section('title', 'Contact Us | Goodrich Pest Control Equipment')

@section('meta_description', 'Get in touch with Goodrich Pest Control for all your pest control equipment needs. Expert consultation, sales support, and service requests in Bangalore. Contact us today!')

@section('meta_keywords', 'contact pest control, pest control equipment contact, fogging machine support, pest control bangalore contact, service request, equipment inquiry')

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact Goodrich Pest Control",
    "description": "Contact us for pest control equipment inquiries and support",
    "mainEntity": {
        "@type": "LocalBusiness",
        "name": "Goodrich Pest Control",
        "image": "{{ asset('assets/images/logo/Good_rich_logo.png') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "6/10, 1st Main Rd, near Amaravathi Hotel, 4th Cross, Madiwala, 1st Stage, Maruthi Nagar",
            "addressLocality": "Bangalore",
            "addressRegion": "Karnataka",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "12.9217",
            "longitude": "77.6185"
        },
        "url": "{{ url('/contact') }}",
        "telephone": "+919916777706",
        "email": "goodrichpestcontrol@gmail.com",
        "openingHours": "Mo-Sa 09:00-18:00",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+919916777706",
            "contactType": "sales",
            "email": "goodrichpestcontrol@gmail.com",
            "availableLanguage": ["English", "Hindi", "Kannada"]
        }
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
                            <h1 class="breadcrumb-title">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
                                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                        <a href="{{ route('home') }}" itemprop="item">
                                            <span itemprop="name">Home</span>
                                        </a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                        <span itemprop="name">Contact</span>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->

            <!-- Contact Section Start -->
            <section class="contact-area section-pt section-pb-80" aria-labelledby="contact-heading">
                <div class="container">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-lg-5 col-md-6 mb-4">
                            <div class="contact-info-wrapper">
                                <header class="section-title mb-4">
                                    <h2 id="contact-heading">Get In Touch</h2>
                                    <p>We're here to help with all your pest control equipment needs</p>
                                </header>

                                <address class="contact-details" itemscope itemtype="https://schema.org/PostalAddress">
                                    <div class="single-info mb-4">

                                        <div class="info-content">
                                            <h3><i class="icofont-location-pin" aria-hidden="true"></i>Our Location</h3>
                                            <p itemprop="streetAddress">6/10, 1st Main Rd, near Amaravathi Hotel,</p>
                                            <p>4th Cross, Madiwala, 1st Stage,</p>
                                            <p>Maruthi Nagar, <span itemprop="addressLocality">Bangalore</span></p>
                                        </div>
                                    </div>

                                    <div class="single-info mb-4">

                                        <div class="info-content">
                                            <h3><i class="icofont-phone" aria-hidden="true"></i>Phone Number</h3>
                                            <p><a href="tel:+919916777706" itemprop="telephone">+91 9916777706</a></p>
                                        </div>
                                    </div>

                                    <div class="single-info">
                                        <div class="info-content">
                                            <h3><i class="icofont-envelope" aria-hidden="true"></i>
        Email Address</h3>
                                            <p><a href="mailto:goodrichpestcontrol@gmail.com" itemprop="email">goodrichpestcontrol@gmail.com</a></p>
                                        </div>
                                    </div>
                                </address>

                                <div class="business-hours mt-4">
                                    <h3>Business Hours</h3>
                                    <p><i class="icofont-clock-time" aria-hidden="true"></i> Monday - Saturday: 9:00 AM - 6:00 PM</p>
                                    <p><i class="icofont-close" aria-hidden="true"></i> Sunday: Closed</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="col-lg-7 col-md-6">
                            <div class="contact-form-wrapper">
                                <h3>Send us a Message</h3>
                                <form id="contactForm" action="{{ route('enquiry.submit') }}" method="POST" class="contact-form">
                                    @csrf
                                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name" class="sr-only">Your Name</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                       placeholder="Your Name" required
                                                       aria-required="true">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="phone" class="sr-only">Phone Number</label>
                                                <input type="tel" name="phone" id="phone" class="form-control"
                                                       placeholder="Phone Number" required
                                                       aria-required="true">
                                            </div>
                                        </div>
    <div class="col-lg-12">
                                    <div class="form-group">
                                        <select name="type" class="form-control" id="enquiryType" required>
                                            <option value="">Select Type</option>
                                            <option value="product">Product</option>
                                            <option value="parts">Parts</option>
                                            <option value="service">Service</option>
                                            <option value="chemical">Chemicals</option>
                                        </select>
                                    </div>
                                    </div>
                                        <div class="col-lg-12">
                                            <div class="form-group dynamic-fields" id="productFields">
                                                <select name="products[]" class="form-control" required>
                                                    <option value="Fogging Machine" selected>Fogging Machine</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-lg-12">
                                                <div class="form-group dynamic-fields" id="partsFields">
                                                    <select name="parts[]" class="form-control" multiple>
                                                        <option value="spraying-nozzle">Spraying Nozzle</option>

                                                        <option value="tank">Tank</option>
                                                        <option value="motor">Motor</option>
                                                        <option value="pipe">Pipe</option>
                                                        <option value="pump">Pump</option>
                                                        <option value="pressure-gauge">Pressure Gauge</option>
                                                        <option value="control-valve">Control Valve</option>
                                                        <option value="filter">Filter</option>
                                                        <option value="trigger-gun">Trigger Gun</option>
                                                        <option value="hose">Hose</option>
                                                        <option value="nozzle-tip">Nozzle Tip</option>
                                                        <option value="seal-kit">Seal Kit</option>
                                                        <option value="strainer">Strainer</option>
                                                        <option value="pressure-regulator">Pressure Regulator</option>
                                                        <option value="tank-lid">Tank Lid</option>
                                                        <option value="o-rings">O-Rings</option>
                                                        <option value="connecting-rod">Connecting Rod</option>
                                                        <option value="piston">Piston</option>
                                                        <option value="cylinder">Cylinder</option>
                                                        <option value="gasket">Gasket</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select at least one part</div>
                                                </div>
                                            </div>
                                                <div class="col-lg-12">
                                                <div class="form-group dynamic-fields" id="chemicalsFields">
                                                    <select name="chemicals[]" class="form-control" multiple>
                                                        <option value="Premium Pest Control Solution">Pest Control Solutions</option>
                                                        <option value="Advanced  Insect Control">Advance insect Solutions</option>
                                                        <option value="Industrial Grade Sanitizer">Industries grade sanitizer</option>
                                                        <option value="Bio-Safe Sanitizer">Bio safe sanitizer</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select at least one part</div>
                                                </div>
                                                </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group dynamic-fields" id="serviceFields">
                                                            <select name="service" class="form-control">
                                                                <option value="">Select Service Type</option>
                                                                <option value="general">General Service</option>
                                                                <option value="repair">Repair Service</option>
                                                                <option value="maintenance">Maintenance</option>
                                                            </select>
                                                        </div>
                                                    </div>




                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="message" class="sr-only">Your Message</label>
                                                <textarea name="message" id="message" class="form-control"
                                                          placeholder="Your Message" rows="5" required
                                                          aria-required="true"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button type="submit" class="default-btn border-radius"
                                                    aria-label="Send message">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Section End -->

            <!-- Google Map -->
            <section class="map-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="map-wrapper">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.7098216284644!2d77.61850931482166!3d12.921700790888433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15518248e785%3A0x9c5aab2148211a6f!2sMadiwala%2C%20BTM%20Layout%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1625641225687!5m2!1sen!2sin"
                                    width="100%"
                                    height="450"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    title="Our Location on Google Maps"
                                    aria-label="Interactive map showing our location">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Google Map End -->
@endsection

@push('scripts')
    <script>
    $('.sticky-enquiry-form, .sticky-social').remove();
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            grecaptcha.execute('6LcqI-AqAAAAAIqaSh7KIIN-z_ZwFL81685gfzYO', {action: 'submit'})
                .then(function(token) {
                    document.getElementById('recaptcha_token').value = token;
                    e.target.submit();
                });
        });
    </script>
@endpush

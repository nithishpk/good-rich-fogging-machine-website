<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Goodrich Pest Control') }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Goodrich Pest Control - Leading provider of high-quality fogging machines, pest control equipment, parts, and expert maintenance services in Bangalore.')">
    <meta name="keywords" content="@yield('meta_keywords', 'pest control machines, fogging machines, pest control equipment, pest control parts, pest control maintenance, pest control bangalore')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ config('app.name', 'Goodrich Pest Control') }} - @yield('title')">
    <meta property="og:description" content="@yield('meta_description', 'Goodrich Pest Control - Leading provider of high-quality fogging machines, pest control equipment, parts, and expert maintenance services in Bangalore.')">
    <meta property="og:image" content="{{ asset('assets/images/logo/Good_rich_logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('app.name', 'Goodrich Pest Control') }} - @yield('title')">
    <meta name="twitter:description" content="@yield('meta_description', 'Goodrich Pest Control - Leading provider of high-quality fogging machines, pest control equipment, parts, and expert maintenance services in Bangalore.')">
    <meta name="twitter:image" content="{{ asset('assets/images/logo/Good_rich_logo.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/mstile-150x150.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fonts CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Pe-icon-7-stroke.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/sticky-social.css') }}">

    <!-- Toast CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LcqI-AqAAAAAIqaSh7KIIN-z_ZwFL81685gfzYO"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "{{ config('app.name', 'Goodrich Pest Control') }}",
        "image": "{{ asset('assets/images/logo/Good_rich_logo.png') }}",
        "description": "Leading provider of high-quality fogging machines, pest control equipment, parts, and expert maintenance services in Bangalore.",
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
        "url": "{{ url('/') }}",
        "telephone": "+919916777706",
        "email": "goodrichpestcontrol@gmail.com",
        "openingHours": "Mo-Sa 09:00-18:00",
        "priceRange": "₹₹",
        "sameAs": [
            "{{ url('/') }}"
        ],
        "potentialAction": {
            "@type": "OrderAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ route('contact') }}",
                "inLanguage": "en-US",
                "actionPlatform": [
                    "http://schema.org/DesktopWebPlatform",
                    "http://schema.org/MobileWebPlatform"
                ]
            },
            "result": {
                "@type": "Order",
                "seller": {
                    "@type": "LocalBusiness",
                    "name": "{{ config('app.name', 'Goodrich Pest Control') }}"
                }
            }
        }
    }
    </script>
</head>

<body>
    @include('components.sticky-social')

    <div class="sticky-enquiry-form">

        <div class="enquiry-form-container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Quick Enquiry</h4>
                <button type="button" class="close-form" style="border: none; background: none; cursor: pointer;">
                    <i class="icofont-close"></i>
                </button>
            </div>
            <form id="stickyEnquiryForm" action="{{ route('enquiry.submit') }}" method="POST">
                @csrf
                <input type="hidden" name="recaptcha_token" id="sticky_recaptcha_token">
                <div class="form-group">
                    <select name="type" class="form-control" id="enquiryType" required>
                        <option value="">Select Type</option>
                        <option value="product">Product</option>
                        <option value="parts">Parts</option>
                        <option value="service">Service</option>
                        <option value="chemical">Chemicals</option>
                    </select>
                </div>

                <!-- Dynamic Fields for Products -->
                <div class="form-group dynamic-fields" id="productFields">
                    <select name="products[]" class="form-control" required>
                        <option value="Fogging Machine" selected>Fogging Machine</option>
                    </select>
                </div>

                <!-- Dynamic Fields for Parts -->
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

                    <!-- Dynamic Fields for chemicals -->
                    <div class="form-group dynamic-fields" id="chemicalsFields">
                        <select name="chemicals[]" class="form-control" multiple>
                            <option value="Premium Pest Control Solution">Pest Control Solutions</option>
                            <option value="Advanced  Insect Control">Advance insect Solutions</option>
                            <option value="Industrial Grade Sanitizer">Industries grade sanitizer</option>
                            <option value="Bio-Safe Sanitizer">Bio safe sanitizer</option>
                        </select>
                        <div class="invalid-feedback">Please select at least one part</div>
                    </div>

                <!-- Dynamic Fields for Service -->
                <div class="form-group dynamic-fields" id="serviceFields">
                    <select name="service" class="form-control">
                        <option value="">Select Service Type</option>
                        <option value="general">General Service</option>
                        <option value="repair">Repair Service</option>
                        <option value="maintenance">Maintenance</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">
        <!-- Header Area Start -->
        <div class="header-area" role="banner">
            <!-- Header Top Start -->
            <div class="header-top pt--20 pb--20" aria-label="Contact Information">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-12">
                            <!-- Logo Start -->
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo/Good_rich_logo.png') }}" alt="Goodrich Pest Control" style="    width: 172px;">
                                </a>
                            </div>
                            <!-- Logo End -->
                        </div>
                        <div class="col-lg-8 col-md-9 col-12">
                            <!-- Contact Information Top Start -->
                            <div class="contact-information-top">
                                <!-- Single Information Start -->
                                <div class="single-information-top">
                                    <div class="info-icon">
                                        <i class="icofont-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Call us now</h4>
                                        <p>9916777706</p>
                                    </div>
                                </div>
                                <!-- Single Information End -->

                                <!-- Single Information Start -->
                                <div class="single-information-top">
                                    <div class="info-icon">
                                        <i class="icofont-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Email</h4>
                                        <p>goodrichpestcontrol@gmail.com</p>
                                    </div>
                                </div>
                                <!-- Single Information End -->
                            </div>
                            <!-- Contact Information Top End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            @include('layouts.navigation')

        </div>
        <!-- Header Area End -->

        <!-- Main Content -->
        <main role="main" id="main-content">
            @yield('content')

        </main>

        <!-- Footer Area Start -->
        <footer class="footer-area" role="contentinfo">
            <div class="footer-top pt--50 pb--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info mt--60" aria-label="About us">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/logo/Good_rich_logo.png') }}" style="    width: 172px;" alt="Goodrich Pest Control">
                                    </a>
                                </div>
                                <p>We specialize in high-quality fogging machines, essential parts, and chemicals for effective pest control. With expert service support and maintenance, we ensure your pest control equipment operates at peak performance.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info mt--60">
                                <div class="footer-title">
                                    <h3>Services</h3>
                                </div>
                                <nav aria-label="Footer Services Navigation">
                                    <ul class="footer-list" role="list">
                                        <li role="listitem"><a href="{{ route('products') }}" aria-label="View our fogging machines">Fogging Machines</a></li>
                                        <li role="listitem"><a href="{{ route('parts.spraying') }}" aria-label="Browse machine parts">Machine Parts</a></li>
                                        <li role="listitem"><a href="{{ route('chemicals.insecticides') }}" aria-label="View machine chemicals">Machine Chemicals</a></li>
                                        <li role="listitem"><a href="{{ route('services') }}" aria-label="Learn about our services">Service & Support</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info mt--60">
                                <div class="footer-title">
                                    <h3>Contact Information</h3>
                                </div>
                                <address class="footer-list" aria-label="Contact Details">
                                    <p><i class="icofont-location-pin" aria-hidden="true"></i> 6/10, 1st Main Rd, near Amaravathi Hotel, 4th Cross, Madiwala, 1st Stage, Maruthi Nagar, Bangalore</p>
                                    <p><i class="icofont-email" aria-hidden="true"></i> <a href="mailto:goodrichpestcontrol@gmail.com" aria-label="Email us at goodrichpestcontrol@gmail.com">goodrichpestcontrol@gmail.com</a></p>
                                    <p><i class="icofont-phone" aria-hidden="true"></i> <a href="tel:+919916777706" aria-label="Call us at 9916777706">+91 9916777706</a></p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-bottom-inner text-center">
                                <p>&copy; {{ date('Y') }} Goodrich Pest Control. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

    </div>
    <!-- Main Wrapper End -->

    <!-- JS -->
    <!-- jQuery JS -->
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Debug session data -->
<script>
    $(document).ready(function () {
        @if(session()->has('success'))
            console.log('Success message found:', "{{ session('success') }}");
            toastr.options = {
                positionClass: "toast-top-right",
                closeButton: true,
                progressBar: true,
                timeOut: 5000
            };
            toastr.success("{{ session('success') }}");
        @endif

        @if(session()->has('error'))
            console.log('Error message found:', "{{ session('error') }}");
            toastr.options = {
                positionClass: "toast-top-right",
                closeButton: true,
                progressBar: true,
                timeOut: 5000
            };
            toastr.error("{{ session('error') }}");
        @endif
    });
</script>


<!-- Initialize Sticky Elements -->
<script>
    // Ensure elements are properly positioned after page load
    window.addEventListener('load', function() {
        const stickyButtons = document.querySelector('.sticky-contact-buttons');
        const enquiryForm = document.querySelector('.sticky-enquiry-form');

        // Small delay to ensure proper positioning
        setTimeout(() => {
            if (stickyButtons) {
                stickyButtons.style.visibility = 'visible';
                stickyButtons.style.opacity = '1';
            }

            if (enquiryForm) {
                enquiryForm.style.visibility = 'visible';
                enquiryForm.style.opacity = '1';
            }
        }, 300);
    });
</script>

  <script>
    $(document).ready(function() {

        console.log('Initializing form functionality...');

        // Cache jQuery selectors
        const $toggleBtn = $('.enquiry-toggle-btn');
        const $stickyForm = $('.sticky-enquiry-form');
        const $formContainer = $('.enquiry-form-container');
        const $closeBtn = $('.close-form');
        const $body = $('body');

        console.log('Toggle button found:', $toggleBtn.length > 0);
        console.log('Sticky form found:', $stickyForm.length > 0);

        // Show form function
        function showForm() {
            console.log('Showing form...');
            $body.addClass('has-sticky-form');
            $stickyForm.addClass('active');
            setTimeout(() => {
                $formContainer.addClass('active');
            }, 50);
        }

        // Hide form function
        function hideForm() {
            console.log('Hiding form...');
            $formContainer.removeClass('active');
            setTimeout(() => {
                $stickyForm.removeClass('active');
                $body.removeClass('has-sticky-form');
            }, 300);
        }

        // Toggle button click handler
        $toggleBtn.on('click', function(e) {
            console.log('Toggle button clicked');
            e.preventDefault();
            e.stopPropagation();
            showForm();
            return false;
        });

        // Close button click handler
        $closeBtn.on('click', function() {
            hideForm();
        });

        // Outside click handler
        $(document).on('click', function(e) {
            // Don't close if clicking the form, toggle button, or any form elements
            if ($(e.target).closest('.sticky-enquiry-form').length > 0 ||
                $(e.target).closest('.enquiry-toggle-btn').length > 0 ||
                $(e.target).closest('button[onclick^="showForm"]').length > 0) {
                return;
            }
            hideForm();
        });

        // Prevent form clicks from bubbling
        $formContainer.on('click', function(e) {
            e.stopPropagation();
        });

        // Initialize dynamic fields
        $('.dynamic-fields').hide();

        // Initialize Select2 (remove one of these blocks)
        $('.select2').select2({
            width: '100%',
            placeholder: 'Select options'
        });

        // Debug click handler
        $toggleBtn.on('mousedown', function() {
            console.log('Button mousedown event fired');
        });

        const enquiryType = document.getElementById('enquiryType');
        if (enquiryType) {
            enquiryType.addEventListener('change', function() {
                $('.dynamic-fields').hide();
                switch(this.value) {
                    case 'product':
                        $('#productFields').show();
                        break;
                    case 'parts':
                        $('#partsFields').show();
                        break;
                    case 'service':
                        $('#serviceFields').show();
                        break;
                         case 'chemical':
                        $('#chemicalsFields').show();
                        break;
                }
            });
        }

        // Handle form validation and submission
    const stickyForm = document.getElementById('stickyEnquiryForm');
    if (stickyForm) {
        stickyForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get the selected enquiry type
            const enquiryType = document.getElementById('enquiryType').value;

            // Validate based on enquiry type
            let isValid = true;
            if (enquiryType === 'parts') {
                const partsSelect = document.querySelector('select[name="parts[]"]');
                if (partsSelect && partsSelect.selectedOptions.length === 0) {
                    isValid = false;
                    toastr.error('Please select at least one part');
                }
            } else if (enquiryType === 'service' && !document.querySelector('select[name="service"]').value) {
                isValid = false;
                toastr.error('Please select a service type');
            }

            if (isValid) {
                grecaptcha.execute('6LcqI-AqAAAAAIqaSh7KIIN-z_ZwFL81685gfzYO', {action: 'submit'})
                    .then(function(token) {
                        document.getElementById('sticky_recaptcha_token').value = token;
                        alert('done');
                        stickyForm.submit();
                    });
            }
        });



    }
    });
</script>

<script>
    function showForm(type, selectedValue) {
        event.preventDefault(); // Add this to prevent default button behavior
        event.stopPropagation(); // Add this to stop event bubbling

        // Set the enquiry type
        const enquiryType = document.getElementById('enquiryType');
        if (enquiryType) {
            enquiryType.value = type;

            // Trigger change event to show relevant fields
            $(enquiryType).trigger('change');
        }

        // Handle dynamic field selection
        if (type === 'service') {
            const serviceSelect = document.querySelector('select[name="service"]');
            if (serviceSelect) {
                serviceSelect.value = selectedValue;
                $(serviceSelect).trigger('change');
                $('#serviceFields').show();

            }
        } else if (type === 'product') {
            const productSelect = document.querySelector('select[name="products[]"]');
            if (productSelect) {
                productSelect.value = selectedValue;
                $(productSelect).trigger('change');
                $('#productFields').show();
            }
        } else if (type === 'parts') {
            const partsSelect = document.querySelector('select[name="parts[]"]');
            if (partsSelect) {
                partsSelect.value = selectedValue;
                $(partsSelect).trigger('change');
                $('#partsFields').show();
            }
        } else if (type === 'chemical') {
            const partsSelect = document.querySelector('select[name="chemicals[]"]');
            if (partsSelect) {
                partsSelect.value = selectedValue;
                $(partsSelect).trigger('change');
                $('#chemicalsFields').show();
            }
        }

        // Show the form
        const body = document.querySelector('body');
        const stickyForm = document.querySelector('.sticky-enquiry-form');
        const formContainer = document.querySelector('.enquiry-form-container');

        body.classList.add('has-sticky-form');
        stickyForm.classList.add('active');

        // Use requestAnimationFrame for smoother animation
        requestAnimationFrame(() => {
            formContainer.classList.add('active');
        });

        return false; // Add this to prevent any further event handling
    }

    // Add a separate hide form function if not already present
    function hideForm() {
        const formContainer = document.querySelector('.enquiry-form-container');
        const stickyForm = document.querySelector('.sticky-enquiry-form');
        const body = document.querySelector('body');

        if (formContainer) {
            formContainer.classList.remove('active');
        }

        setTimeout(() => {
            if (stickyForm) {
                stickyForm.classList.remove('active');
            }
            if (body) {
                body.classList.remove('has-sticky-form');
            }
        }, 300);
    }
</script>
@stack('scripts')</body>
</html>

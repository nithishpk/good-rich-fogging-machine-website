<!-- Header Bottom Area Start -->
<div class="header-bottom-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-menu-wrap border-top-1">
                    <!-- Main Menu Area Start -->
                    <div class="main-menu">
                        <nav class="main-navigation">
                            <ul>
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">HOME</a>
                                </li>
                                <li class="{{ request()->routeIs('products') ? 'active' : '' }}">
                                    <a href="{{ route('products') }}">PRODUCTS</a>
                                </li>
                                <li class="{{ request()->routeIs('parts.*') ? 'active' : '' }}">
                                    <a href="#">PARTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('parts.spraying') }}">Spraying Components</a></li>
                                        <li><a href="{{ route('parts.maintenance') }}">Maintenance Parts</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('chemicals.*') ? 'active' : '' }}">
                                    <a href="#">CHEMICALS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('chemicals.insecticides') }}">Insecticides</a></li>
                                        <li><a href="{{ route('chemicals.sanitizers') }}">Sanitizers</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('services') ? 'active' : '' }}">
                                    <a href="{{ route('services') }}">SERVICES</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">CONTACT</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Main Menu Area End -->

                    <!-- Make Appointment Button Start -->
                    <div class="make-apoinmant-button">
                        <a href="{{ route('contact') }}" class="default-btn open-form border-radius">Get a Quote</a>
                    </div>
                    <!-- Make Appointment Button End -->
                </div>
            </div>
            <div class="col">
                <!-- Mobile Menu Start -->
                <div class="mobile-menu d-block d-lg-none"></div>
                <!-- Mobile Menu End -->
            </div>
        </div>
    </div>
</div>
<!-- Header Bottom Area End -->

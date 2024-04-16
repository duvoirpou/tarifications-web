{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Hero -->
        <div class="hero-home bg-mockup">
            <div class="content">
                <h3>Cost Calculator</h3>
                <p>& Order Wizard. With PDF Summary generation.</p>
                <a href="{{ route('tarifications') }}" class="btn-1 medium">Demandez un dévis</a>
            </div>
        </div>
        <!-- Hero End -->

        <!-- Services -->
        <div class="services">
            <div class="container">
                <div class="text-center">
                    <h2>Services</h2>
                    <div class="border-multiple">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                                Eiusmod tempor incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-calculator-1 color-1"></i>
                                    </div>
                                    <h3 class="service-title">Cost Calculations</h3>
                                    <p>One of your services which tells about price calculations.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i
                                            class="icon icon-shopping-cart-1 color-2"></i></div>
                                    <h3 class="service-title">Order Wizard</h3>
                                    <p>One of your services which tells about order generation.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-email color-3"></i></div>
                                    <h3 class="service-title">Email Summary</h3>
                                    <p>One of your services which tells about auto email summary.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-truck color-3"></i></div>
                                    <h3 class="service-title">Quick Delivery</h3>
                                    <p>One of your services which tells about safe and quick delivery.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-support color-1"></i></div>
                                    <h3 class="service-title">Customer Support</h3>
                                    <p>One of your services which tells about customer care.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i
                                            class="icon icon-checkmark-circle color-2"></i></div>
                                    <h3 class="service-title">Guarantee</h3>
                                    <p>One of your services which tells about product, service guarantee.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

    </main>
    <!-- Main End -->
@endsection

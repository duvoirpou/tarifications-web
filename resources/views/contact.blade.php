{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Map -->
        <div id="map" class="map map_single"></div>

        <!-- Contacts -->
        <div class="contacts">
            <div class="container">
                <div class="text-center">
                    <h2>Contacts</h2>
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
                            <a href="https://goo.gl/maps/vKgGyZe2JSRLDnYH6" target="_blank">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-map-marker"></i></div>
                                    <h3 class="contact-title">Adresse</h3>
                                    <p>Brazzaville, Congo</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mailto:info@yourdomain.com">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-email"></i></div>
                                    <h3 class="contact-title">Email</h3>
                                    <p>contact@tala.cg</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="tel:+242069897169">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-phone-handset"></i></div>
                                    <h3 class="contact-title">Téléphone</h3>
                                    <p>+242069897169</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contacts End -->
    </main>
    <!-- Main End -->
@endsection

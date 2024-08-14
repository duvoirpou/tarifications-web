{{-- layout --}}
@extends('layouts.app')
{{-- title --}}
@section('title', 'Contact')

{{-- content --}}

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
                            <p class="lead">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#.">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-map-marker"></i></div>
                                    <h3 class="contact-title">Adresse</h3>
                                    <p class="text-center">OCH, Arrêt Noelly, Pointe-Noire Congo</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mailto:contact@weegosoft.com">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-email"></i></div>
                                    <h3 class="contact-title">Email</h3>
                                    <p class="text-center">contact@weegosoft.com</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="tel:+242050963237">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-phone-handset"></i></div>
                                    <h3 class="contact-title">Téléphone</h3>
                                    <p class="text-center">+242 05 096 32 37</p>
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

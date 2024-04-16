{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Hero -->
        <div class="hero-home bg-mockup">
            <div class="content">
                <h3>Calculateur de coûts</h3>
                <p>& Assistant de commande.  Avec génération de résumé PDF.</p>
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
                                    <h3 class="service-title"> Calcul précis des coûts</h3>
                                    <p>Génère des estimations détaillées et précises des coûts pour divers projets web.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i
                                            class="icon icon-shopping-cart-1 color-2"></i></div>
                                    <h3 class="service-title">Assistant de commande</h3>
                                    <p>Génération d'un pdf de la commandes illustrant tous les détails du projet web défini.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-email color-3"></i></div>
                                    <h3 class="service-title">Résumé par e-mail</h3>
                                    <p>Bref aperçu des points clés du projet web dans un document envoyé par email.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        {{-- <i class="icon icon-truck color-3"></i> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M11 17H4a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h16a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-7v2h3a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2h3zM4 5h16a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1" clip-rule="evenodd"/></svg>
                                    </div>
                                    <h3 class="service-title">Facilité d'utilisation</h3>
                                    <p>Interface intuitive et conviviale, même pour les utilisateurs non techniques.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="faq.html" class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end"><i class="icon icon-support color-1"></i></div>
                                    <h3 class="service-title">Gain de temps et d'argent</h3>
                                    <p>Aide les utilisateurs à prendre des décisions éclairées concernant leurs investissements en matière de développement web.</p>
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

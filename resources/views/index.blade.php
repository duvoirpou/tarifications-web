{{-- layout --}}
@extends('layouts.app')

@section('title', 'Page d\'accueil')

@section('content')
    <main>
        <!-- Hero -->
        <div class="hero-home bg-mockup">
            <div class="content">
                <h3>Création de sites web sur-mesure</h3>
                <p class="text-center">
                    Générez votre devis de création de site web en quelques minutes !
                </p>
                <a href="{{ route('devis') }}" class="btn-1 medium">Allez-y !</a>
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
                            <p class="lead text-center">
                                Nous vous proposons des services complets et personnalisés pour répondre à tous vos besoins.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 20 20"><path fill="currentColor" d="M9 0a9 9 0 1 0 0 18A9 9 0 0 0 9 0M1.11 9.68h2.51c.04.91.167 1.814.38 2.7H1.84a7.86 7.86 0 0 1-.73-2.7m8.57-5.4V1.19a4.13 4.13 0 0 1 2.22 2c.205.347.386.708.54 1.08zm3.22 1.35c.232.883.37 1.788.41 2.7H9.68v-2.7zM8.32 1.19v3.09H5.56A8.53 8.53 0 0 1 6.1 3.2a4.13 4.13 0 0 1 2.22-2.01m0 4.44v2.7H4.7c.04-.912.178-1.817.41-2.7zm-4.7 2.69H1.11a7.86 7.86 0 0 1 .73-2.7H4a14.13 14.13 0 0 0-.38 2.7M4.7 9.68h3.62v2.7H5.11a12.88 12.88 0 0 1-.41-2.7m3.63 4v3.09a4.13 4.13 0 0 1-2.22-2a8.53 8.53 0 0 1-.54-1.08zm1.35 3.09v-3.04h2.76a8.53 8.53 0 0 1-.54 1.08a4.13 4.13 0 0 1-2.22 2zm0-4.44v-2.7h3.62a12.88 12.88 0 0 1-.41 2.7zm4.71-2.7h2.51a7.86 7.86 0 0 1-.73 2.7H14c.21-.87.337-1.757.38-2.65zm0-1.35A14.13 14.13 0 0 0 14 5.63h2.16c.403.85.65 1.764.73 2.7zm1-4H13.6a8.92 8.92 0 0 0-1.39-2.52a8 8 0 0 1 3.14 2.52zm-9.6-2.52A8.92 8.92 0 0 0 4.4 4.28H2.65a8 8 0 0 1 3.14-2.52m-3.15 12H4.4a8.92 8.92 0 0 0 1.39 2.52a8 8 0 0 1-3.14-2.55zm9.56 2.52a8.92 8.92 0 0 0 1.39-2.52h1.76a8 8 0 0 1-3.14 2.48z"/></svg>
                                    </div>
                                    <h3 class="service-title"> Développement web sur-mesure</h3>
                                    <p>Procurez-vous un site web unique et performant qui répond à vos besoins spécifiques.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="currentColor" d="M8 3a7 7 0 0 0 0 14h1.07a7.06 7.06 0 0 1 0-2H8A5 5 0 0 1 8 5h8a5 5 0 0 1 4.9 6a7.021 7.021 0 0 1 1.426 2A7 7 0 0 0 16 3zm8 10a3 3 0 1 0 0 6a3 3 0 0 0 0-6m-5 3a5 5 0 1 1 9.172 2.757l2.535 2.536l-1.414 1.414l-2.536-2.535A5 5 0 0 1 11 16"/></svg>
                                    </div>
                                    <h3 class="service-title">Référencement SEO</h3>
                                    <p>Augmentez la visibilité de votre site web dans les moteurs de recherche et attirez plus de clients.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 16 16"><path fill="currentColor" d="M14.25 2.1a1.25 1.25 0 0 0-1.17-.1L6.91 4.43a1.22 1.22 0 0 1-.46.09H2.5a1.25 1.25 0 0 0-1.25 1.25v.1H0v3h1.25V9a1.25 1.25 0 0 0 1.25 1.22L4 13.4a1.26 1.26 0 0 0 1.13.72h.63A1.25 1.25 0 0 0 7 12.87v-2.53l6.08 2.43a1.27 1.27 0 0 0 .47.09a1.29 1.29 0 0 0 .7-.22a1.25 1.25 0 0 0 .55-1V3.13a1.25 1.25 0 0 0-.55-1.03m-8.5 3.67V9H2.5V5.77zm0 7.1h-.63l-1.23-2.65h1.86zm1.62-3.72A2.29 2.29 0 0 0 7 9V5.7a2.26 2.26 0 0 0 .37-.11l6.18-2.46v8.48zm7.46-3.03v2.5a1.25 1.25 0 0 0 0-2.5"/></svg>
                                    </div>
                                    <h3 class="service-title">Marketing des réseaux sociaux</h3>
                                    <p>Développez votre audience sur les réseaux sociaux et engagez vos clients potentiels.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 48 48"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M15.65 28.238A13.98 13.98 0 0 1 10 17c0-7.732 6.268-14 14-14s14 6.268 14 14c0 4.535-2.157 8.567-5.5 11.125"/><path d="m24 17l20 27H4z" clip-rule="evenodd"/></g></svg>
                                    </div>
                                    <h3 class="service-title">Conception graphique </h3>
                                    <p>Créez des visuels attrayants qui reflètent votre marque et votre message.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 32 32"><path fill="currentColor" d="M19.431 1.648a1.122 1.122 0 0 0-1.53.416l-.001.002l-3.972 6.88l-.48-.209a5.418 5.418 0 0 0-6.752 2.05l-.007.011l-.007.012l-.002-.001l-5.2 8.68l-.005.007v.008h-.002a3.506 3.506 0 0 0 1.279 4.78a3.442 3.442 0 0 0 2.05.464l-.058.102l-.001.001a2.796 2.796 0 0 0-.366 1.162l-.38 3.443v.008c-.063.813.848 1.326 1.511.87l.01-.006l2.752-2.082c.286-.202.535-.46.725-.754v.01a3.5 3.5 0 0 0 6.322 2.07c.127.12.262.234.405.34c1.04.768 2.399 1.09 3.783 1.09h9.24a2.24 2.24 0 0 0 2.226-1.99h.024V27.06h.002V18.2a2.815 2.815 0 0 0-1.704-2.585l-10.75-4.666l3.685-6.387l.002-.003a1.122 1.122 0 0 0-.416-1.53l-.003-.001l-2.375-1.378zm-6.508 9.038l-2.656 4.6a2.851 2.851 0 0 0-1.246 1.169l-3.208 5.551a1.521 1.521 0 0 1-1.308.757a1.448 1.448 0 0 1-.742-.2l-.004-.002A1.5 1.5 0 0 1 3.2 20.5l5.18-8.646a3.417 3.417 0 0 1 4.261-1.289h.004zm2.173 6.238l2.443-4.234L28.5 17.45l-.003-.004a.814.814 0 0 1 .5.753v.794h-.002v8.02h-5.81c-.255 0-.504-.02-.748-.056l-.643-.141a4.571 4.571 0 0 1-2.421-1.693c-.8-1.094-2.27-1.37-3.414-.735l-.001.001c-.69.385-1.506.84-2.148 1.2l-1.113.62l-.011.007a2.005 2.005 0 0 1-2.735-.734a2.006 2.006 0 0 1 .736-2.735l4.225-2.44a1 1 0 0 0 .663-.857a4.292 4.292 0 0 0-.479-2.526m-9.567 8.58l2.585 1.506a1.81 1.81 0 0 1-.427.424l-.007.005l-1.515 1.146l-1.001-.583l.208-1.884v-.011c.02-.214.073-.418.157-.603M19.392 7.477l-2.6-1.492l.976-1.692l2.595 1.5z"/></svg>
                                    </div>
                                    <h3 class="service-title">Rédaction de contenu</h3>
                                    <p>Créez du contenu engageant et de haute qualité pour votre site web, vos blog et vos réseaux sociaux.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#." class="service-link">
                                <div class="box text-center">
                                    <div class="icon d-flex align-items-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 18v-1a5 5 0 0 1 5-5v0a5 5 0 0 1 5 5v1M1 18v-1a3 3 0 0 1 3-3v0m19 4v-1a3 3 0 0 0-3-3v0m-8-2a3 3 0 1 0 0-6a3 3 0 0 0 0 6m-8 2a2 2 0 1 0 0-4a2 2 0 0 0 0 4m16 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4"/></svg>
                                    </div>
                                    <h3 class="service-title">Community Management</h3>
                                    <p>Développez votre communauté en ligne et engagez votre audience avec nos services de community management.</p>
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

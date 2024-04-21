{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Order  -->
        <div class="order">
            <div class="container">
                <!-- Form -->
                {{-- <form method="POST" id="orderForm" name="orderForm" action="php/send_order_1_attached_pdf.php"> --}}
                <form method="POST" id="orderForm" name="orderForm" action="{{ route('order.store') }}">
                    @csrf
                    <div class="row">
                        <!-- Calculator Area End -->
                        <div class="col-lg-8" id="mainContent">
                            <div id="" class="row option-box">
                                <div class="option-box-header">
                                    <h3>Comment s'appelle votre projet ?</h3>
                                    <p>
                                        Indiquez-nous le nom de votre projet.
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="project_name">Nom du projet</label>
                                        <input id="project_name" class="form-control" name="project_name" type="text"
                                            required />
                                    </div>
                                </div>
                            </div>
                            @livewire('create-project')
                            <!-- Personal Details -->
                            <div id="personalDetails" class="row contact-box">
                                <div class="contact-box-header">
                                    <h3>Détails du client</h3>
                                    <p>Veuillez donner un e-mail VALIDE pour vérifier le résultat.</p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="customer_name">Nom complet</label>
                                        <input id="customer_name" class="form-control" name="customer_name" type="text"
                                             required />{{-- data-parsley-pattern="^[a-zA-Z\s.]+$" --}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="customer_email">Email</label>
                                        <input id="customer_email" class="form-control" name="customer_email"
                                            type="customer_email" required />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="customer_phone">Téléphone</label>
                                        <input id="customer_phone" class="form-control" name="customer_phone" type="text"
                                             required />{{-- data-parsley-pattern="^\+{1}[0-9]+$" --}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="customer_address">Adresse</label>
                                        <input id="customer_address" class="form-control" name="customer_address"
                                            type="text"  required />{{-- data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" --}}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Informations additionnelles concernant le projet (facultatif)</label>
                                        <textarea class="form-control" id="inputMessage" name="additional_information"
                                            ></textarea>{{-- data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$" --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Personal Details End -->
                        </div>
                        <div class="col-lg-4" id="sidebar">
                            <!-- Order Container -->
                            <div id="orderContainer" class="theiaStickySidebar">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- <h3>Récapitulatif</h3>
                                        <ul id="orderSumList">
                                            <li>
                                                @if (isset($get_categorie->name) and $categorie_id)
                                                    <h6>{{ $get_categorie->name }}</h6>
                                                @endif
                                            </li>
                                            <li>
                                                @if (isset($get_type->name) and $categorie_id and $categorie_id == $get_type->category_id)
                                                    <h6>{{ $get_type->name }}</h6>
                                                @endif
                                            </li>
                                        </ul> --}}
                                        {{-- <div class="price-element" hidden></div> --}}
                                        <div class="row total-container">
                                            <div class="col-6 p-0">
                                                <h6> Total :</h6>
                                            </div>
                                            <div class="col-6 p-0">
                                                <sup>XAF</sup>
                                                <span id="totalPriceValue"></span>
                                                <input type="hidden" id="totalPriceInputValue" name="total_amount">
                                            </div>
                                        </div>
                                        <div id="totalError"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{-- <input type="checkbox" id="cbx" class="inp-cbx" name="terms" value="yes"
                                                required />
                                            <label class="cbx terms" for="cbx">
                                                <span>
                                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Accept<a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
                                            </label> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" class="btn-form-func" id="submitBtn">
                                            <span class="btn-form-func-content">SOUMETTRE</span>
                                            <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="reset" name="reset" id="resetBtn"
                                            class="btn-form-func btn-form-func-alt-color">
                                            <span class="btn-form-func-content">ANNULER</span>
                                            <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row footer">
                                    <div class="col-lg-12 text-center">
                                        <small>&copy; 2024 Tala & Weegosoft.</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Container End -->
                        </div>

                        <script>
                            let typePrice = 0;

                            function updatePrice(value) {
                                // Récupérer le prix du type de projet
                                typePrice = parseFloat(document.querySelector('.typePrice').innerHTML);

                                // Récupérer toutes les cases à cocher
                                const checkboxes = document.querySelectorAll('input[type="checkbox"]');

                                // Vérifier si au moins une case est cochée
                                const isAnyChecked = [...checkboxes].some((checkbox) => checkbox.checked);

                                // Faire la somme des valeurs des cases à cocher sélectionnées
                                const totalValue = [...checkboxes].reduce((acc, checkbox) => {
                                    if (checkbox.checked) {
                                        // Multiplier le coefficient par le prix du type de projet
                                        const coefficient = parseFloat(checkbox.getAttribute('data-autre-valeur')) * typePrice;

                                        return acc + coefficient;
                                    }

                                    return acc;
                                }, 0);

                                // Mettre à jour le prix
                                /* const priceElement = document.querySelector('.price-element');
                                priceElement.innerHTML = totalValue; */

                                // Mettre à jour le prix total
                                const totalPriceValue = document.querySelector('#totalPriceValue');

                                const typeSelect = document.getElementById('type');
                                const typeValue = typeSelect.options[typeSelect.selectedIndex].value;

                                /* if (typeValue !== '0.00') {
                                    totalPriceValue.innerHTML = (0).toLocaleString();
                                } */

                                if (isAnyChecked) {
                                    totalPriceValue.innerHTML = (typePrice + totalValue).toLocaleString();
                                } else {
                                    totalPriceValue.innerHTML = (0).toLocaleString();
                                }
                                const totalPriceInputValue = document.querySelector('#totalPriceInputValue');
                                totalPriceInputValue.value = typePrice + totalValue;

                            }
                        </script>
                    </div>

                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Order End -->
    </main>
    <!-- Main End -->

    <script>
        // Récupérez le formulaire et le bouton de soumission
        var formulaire = document.getElementById('orderForm');
        var boutonSoumettre = document.getElementById('submitBtn');
        var estEnCoursDeSoumission = false;
        var tempsRestant = 30; // Temps de décompte en secondes

        // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
        formulaire.addEventListener('submit', function(event) {
            // Vérifiez si les champs requis sont vides
            var champsRequis = document.querySelectorAll('input[required]');
            var sontTousRemplis = true;
            for (var i = 0; i < champsRequis.length; i++) {
                if (champsRequis[i].value === '') {
                    sontTousRemplis = false;
                    break;
                }
            }

            // Si les champs requis sont vides, empêchez la soumission
            if (!sontTousRemplis) {
                event.preventDefault();
                alert('Veuillez remplir tous les champs requis.');
                return;
            }

            // Empêchez la soumission par défaut du formulaire
            //event.preventDefault();

            // Vérifiez si une soumission est déjà en cours
            if (estEnCoursDeSoumission) {
                return;
            }

            // Désactivez le bouton de soumission
            boutonSoumettre.disabled = true;

            // Marquez que la soumission est en cours
            estEnCoursDeSoumission = true;

            // Démarrez le décompte
            var intervalle = setInterval(function() {
                tempsRestant--;
                boutonSoumettre.innerHTML = 'Veuillez patienter... (' + tempsRestant + ')';

                if (tempsRestant <= 0) {
                    clearInterval(intervalle);
                    boutonSoumettre.innerHTML = 'SOUMETTRE';
                    estEnCoursDeSoumission = false;
                }
            }, 1000);

            // Simulons une attente de quelques secondes pour la démonstration
            setTimeout(function() {
                // Réactivez le bouton de soumission
                boutonSoumettre.disabled = false;

                // Marquez que la soumission est terminée
                estEnCoursDeSoumission = false;

                // Mettez à jour le texte du bouton de soumission
                boutonSoumettre.innerHTML = 'SOUMETTRE';

                // Réinitialisez le formulaire ou redirigez l'utilisateur, selon votre besoin
                // formulaire.reset(); // Réinitialisation du formulaire
                window.location.href = '/tarifications'; // Redirection

            }, tempsRestant * 1000); // Attendez le temps restant (en millisecondes)
        });
    </script>
@endsection

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

                    @livewire('create-project')

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

        // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
        formulaire.addEventListener('submit', function(event) {
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

            boutonSoumettre.innerHTML = 'Veuillez patienter...';

            // Simulons une attente de 5 secondes pour la démonstration
            setTimeout(function() {
                // Réactivez le bouton de soumission
                boutonSoumettre.disabled = false;

                // Marquez que la soumission est terminée
                estEnCoursDeSoumission = false;

                // Réinitialisez le formulaire ou redirigez l'utilisateur, selon votre besoin
                // formulaire.reset(); // Réinitialisation du formulaire

            }, 60000); // Attendez 60 secondes (à remplacer par votre traitement réel)
        });
    </script>
@endsection

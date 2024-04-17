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
                                        Vous pouvez choisir un nom de projet qui sera visible par les autres utilisateurs.
                                    </p>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="project_name">Nom du projet</label>
                                    <input id="project_name" class="form-control" name="project_name" type="text"
                                        required />
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
                                            data-parsley-pattern="^[a-zA-Z\s.]+$" required />
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
                                            data-parsley-pattern="^\+{1}[0-9]+$" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="customer_address">Adresse</label>
                                        <input id="customer_address" class="form-control" name="customer_address"
                                            type="text" data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Message</label>
                                        <textarea class="form-control" id="inputMessage" name="additional_information"
                                            data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$"></textarea>
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
                                        <small>&copy; 2024 Tala.</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Order Container End -->
                        </div>

                        
                    </div>

                </form>
                <!-- Form End -->
            </div>
        </div>
        <!-- Order End -->
    </main>
    <!-- Main End -->


@endsection

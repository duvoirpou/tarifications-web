<div class="row">
    <!-- Calculator Area End -->
    <div class="col-lg-8" id="mainContent">
        <!-- Calculator Area -->
        <div id="optionGroup1" class="row option-box">
            <div class="ribbon-left"><span class="left">Populaires</span></div>
            <span class="price-box-desc">From</span>
            <div class="price-box w-25">
                <sup>XAF</sup>
                @if ($categorie_id)
                    <span class="typePrice">{{ $typePrice }}</span>
                @else
                    <span class="typePrice">0</span>
                @endif
            </div>

            <div class="option-box-header">
                <div class="price-element"></div>
                <h3>Catégories & types de projet</h3>
                <p>
                    @if ($type_id && $type_id != 0)
                        {{ $get_type->description }}
                    @endif
                </p>
            </div>
            <div class="col-md-6 col-sm-6">
                <select wire:model.live="categorie_id" wire:loading.attr='disabled' class="wide nice-select"
                    id="categorie" name="categorie_id">
                    <option value="">-- Choisir une catégorie --</option>
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="" wire:loading.delay><b>Chargement...</b></div>
                <div wire:loading.delay.remove>
                    <select wire:model.live="type_id" id="type" class="wide nice-select" name="type_id">
                        <option value="0.00">-- Choisir un type --</option>
                        @if ($categorie_id)
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        @if ($type_id)
            @foreach ($types_functionalities as $item)
                <div id="extraOptionGroup1" class="row option-box">
                    <div class="price-box"><sup></sup>{{ $item->functionality->ranking->coefficient }}</div>
                    <div class="option-box-header">
                        <h3>{{ $item->functionality->name }}</h3>
                        <p>{{ $item->functionality->description }}</p>
                    </div>
                    <div class="col-md-12 col-sm-12">

                        <label class="cbx" for="">
                            <input type="checkbox" id="" class="" name=""
                                value="{{ $item->functionality->ranking->coefficient }}"
                                style="font-size: 1.5rem !important;" onchange="updatePrice(this.value)" />

                            <span id="extraOption1Title">Choisir</span>
                        </label>
                    </div>
                </div>
            @endforeach
        @endif
        <!-- Calculator Area End -->
        <!-- Personal Details -->
        <div id="personalDetails" class="row contact-box">
            <div class="contact-box-header">
                <h3>Contact Details</h3>
                <p>Please give VALID email to check the result.</p>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="userName">Full Name</label>
                    <input id="userName" class="form-control" name="username" type="text"
                        data-parsley-pattern="^[a-zA-Z\s.]+$" required />
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" name="email" type="email" required />
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="phone">Phone e.g.: +12345</label>
                    <input id="phone" class="form-control" name="phone" type="text"
                        data-parsley-pattern="^\+{1}[0-9]+$" />
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" name="address" type="text"
                        data-parsley-pattern="^[,.a-zA-Z0-9\s.]+$" />
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" id="inputMessage" name="message" data-parsley-pattern="^[a-zA-Z0-9\s.:,!?']+$"></textarea>
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

                    <h3>Order Summary</h3>
                    <ul id="orderSumList">
                        {{-- <li id="optionGroup1Sum"></li>
                        <li id="optionGroup2Sum"></li>
                        <li id="optionGroup3Sum"></li>
                        <li id="extraOption1Sum"></li>
                        <li id="extraOption2Sum"></li> --}}
                    </ul>
                    <div class="row total-container">
                        <div class="col-6 p-0">
                            <h6> Total :</h6>

                        </div>
                        <div class="col-6 p-0">
                            $ 0.00

                        </div>
                    </div>
                    <div id="totalError"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" id="cbx" class="inp-cbx" name="terms" value="yes"
                            required />
                        <label class="cbx terms" for="cbx">
                            <span>
                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg>
                            </span>
                            <span>Accept<a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms</a>.</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" name="submit" class="btn-form-func">
                        <span class="btn-form-func-content">SUBMIT</span>
                        <span class="icon"><i class="fa fa-check" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button type="button" name="reset" id="resetBtn"
                        class="btn-form-func btn-form-func-alt-color">
                        <span class="btn-form-func-content">RESET</span>
                        <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
            <div class="row footer">
                <div class="col-lg-12 text-center">
                    <small>&copy; 2020 Your Company.</small>
                </div>
            </div>
        </div>
        <!-- Order Container End -->
    </div>

    <script>
        function updatePrice(value) {
            // Récupérer le prix du type de projet
            const typePrice = parseFloat(document.querySelector('.typePrice').innerHTML);

            // Récupérer toutes les cases à cocher
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');

            // Faire la somme des valeurs des cases à cocher sélectionnées
            const totalValue = [...checkboxes].reduce((acc, checkbox) => {
                if (checkbox.checked) {
                    // Multiplier le coefficient par le prix du type de projet
                    const coefficient = parseFloat(checkbox.value) * typePrice;

                    return acc + coefficient;
                }

                return acc;
            }, 0);

            // Mettre à jour le prix
            const priceElement = document.querySelector('.price-element');
            priceElement.innerHTML = totalValue;

        }
    </script>
</div>

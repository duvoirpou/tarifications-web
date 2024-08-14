<div>
    <!-- Calculator Area -->
    <div id="optionGroup1" class="row option-box">
        {{-- <div class="ribbon-left"><span class="left">Populaires</span></div> --}}
        <span class="price-box-desc">Prix de base</span>
        <div class="price-box w-50">
            @if ($categorie_id and $type_id)

                @if ($continent_code == 'AF')
                    <sup>XAF</sup>
                @else
                    <sup>€</sup>
                @endif

                <span class="typePrice" hidden>{{ $typePrice }}</span>
                @if ($continent_code == 'AF')
                    <span>{{ number_format($typePrice, 2, ',', ' ') }}</span>
                @else
                    <span>{{ number_format($typePrice / 655, 2, '.', ' ') }}</span>
                @endif
            @else
                <span class="typePrice">0</span>
            @endif
        </div>

        <div class="option-box-header">

            <h3 style="margin-top: 50px">Catégories & types</h3>
            <p>
                @if ($type_id && $type_id != 0)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $get_type->description }}</strong>
                </div>
                @else
                    Choisissez une catégorie et un type de projet pour voir la description
                @endif
            </p>
        </div>

        <div class="col-md-6 col-sm-6" wire:ignore>
            <select wire:model.live="categorie_id" wire:loading.attr='disabled' class="wide nice-select" id="categorie"
                name="categorie_id" required>
                <option value="">-- Choisir une catégorie --</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="" wire:loading.delay><b>Chargement...</b></div>
            <div wire:loading.delay.remove>
                <select wire:model.live="type_id" id="type" class="wide nice-select" name="type_id" required>
                    <option value="">-- Choisir un type --</option>
                    @if (!is_null($categorie_id))
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>

    @if (!is_null($type_id) and $types)
    <div class="row option-box" wire:loading.delay.remove>
        <div class="col-md-12 col-sm-12">
            <div style="margin: 0 15px 10px 15px; width: 100%;">
            <h3 class="text-center" style=" font-size: 20px; color: #555;">
                Cochez une ou plusieurs option(s)
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 72 72"><path fill="#ffd3b6" d="M59.9 33.9C52 27.1 47.7 16.4 46 13.1c0 0 0-.1-.1-.1c-.2-.4-.4-.7-.5-.8c-1-1.4-2.3-2.5-3.8-3.2V2.9c0-1.6-1.3-2.9-2.9-2.9H20.1c-1.6 0-2.9 1.3-2.9 2.9V11c-2.8 2.3-4.6 5.9-4.6 9.8v26.5c0 2.2 1.8 4.1 4.1 4.1c1 0 2-.4 2.7-1c0 0 .1 0 .2-.1q1.2-1.2 2.4 0c.7.7 1.7 1.1 2.8 1.1s2-.4 2.7-1c0 0 .1 0 .2-.1c.8-.8 1.6-.8 2.4-.1c.7.7 1.8 1.2 2.9 1.2s2-.4 2.7-1c0 0 .1 0 .2-.1q.45-.45.9-.6V68c0 2.2 1.8 4.1 4.1 4.1s4-1.8 4-4.1V33c1 1.2 1.9 1.6 3.2 2.9c7.2 6.9 10.7 5 12.3 3.6c1.4-1.5 1-4-.5-5.6"/><path fill="#f2c7aa" d="M25.2 8.1h12.5q2.1 0 3.9.9V7.7c0-1.2-1-2.2-2.2-2.2h-20c-1.2 0-2.2 1-2.2 2.2V11c2.2-1.8 5-2.9 8-2.9"/></svg>
            </h3>
            </div>
        </div>
    </div>
    @endif

    @if (!is_null($type_id) and $types)
        @foreach ($types_functionalities->sortBy('functionality.ranking.coefficient') as $item)
            {{-- vérifier si la propriété id de l'objet ranking est égale à 6, et si c'est le cas, passer à l'itération suivante. --}}
            {{-- @if ($item->functionality->ranking->id == 7)
                @continue
            @endif --}}

            <div id="" class="row option-box">
                <div class="price-box"><sup></sup>{{ $item->functionality->ranking->coefficient }}</div>

                <div class="col-md-12 col-sm-12 mt-5">
                    <input type="checkbox" id="extraOption{{ $item->functionality->id }}" class="inp-cbx"
                        name="selected_functionalities_ids[]" value="{{ $item->functionality->id }}"
                        data-autre-valeur="{{ $item->functionality->ranking->coefficient }}"
                        onchange="updatePrice(this.value)" />
                    <label class="cbx" for="extraOption{{ $item->functionality->id }}">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span id="">
                            {{ $item->functionality->name }}{{--  {{ $loop->iteration }} --}}
                        </span>
                    </label>
                    {{-- <label class="cbx" for="">
                            <input type="checkbox" name="selected_functionalities_ids[]"
                                value="{{ $item->functionality->id }}" data-autre-valeur="{{ $item->functionality->ranking->coefficient }}"
                                style="font-size: 1.5rem!important;" onchange="updatePrice(this.value)" />
                            <span id="extraOption1Title">Choisir</span>
                        </label> --}}
                </div>
                <div class="option-box-header">
                    {{-- <h3>{{ $item->functionality->name }}</h3> --}}
                    <div class="alert alert-info alert-dismissible fade show mt-2" role="alert">
                    <p style="font-weight: bold">{{ $item->functionality->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- @foreach ($types_functionalities->sortBy('functionality.ranking.coefficient') as $item)
            @if ($item->functionality->ranking->id != 7)
                @continue
            @endif

            <div id="" class="row option-box">
                <div class="price-box"><sup></sup>{{ $item->functionality->ranking->coefficient }}</div>

                <div class="col-md-12 col-sm-12 mt-5">
                    <input type="checkbox" id="extraOption{{ $item->functionality->id }}" class="inp-cbx"
                        name="selected_functionalities_ids[]" value="{{ $item->functionality->id }}"
                        data-autre-valeur="{{ $item->functionality->ranking->coefficient }}"
                        onchange="updatePrice(this.value)" />
                    <label class="cbx" for="extraOption{{ $item->functionality->id }}">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span id="">
                            {{ $item->functionality->name }}<!--  {{ $loop->iteration }} -->
                        </span>
                    </label>
                    <!-- <label class="cbx" for="">
                            <input type="checkbox" name="selected_functionalities_ids[]"
                                value="{{ $item->functionality->id }}" data-autre-valeur="{{ $item->functionality->ranking->coefficient }}"
                                style="font-size: 1.5rem!important;" onchange="updatePrice(this.value)" />
                            <span id="extraOption1Title">Choisir</span>
                        </label> -->
                </div>
                <div class="option-box-header">
                    <!-- <h3>{{ $item->functionality->name }}</h3> -->
                    <p class="text-bold">{{ $item->functionality->description }}</p>
                </div>
            </div>
        @endforeach --}}

    @endif
    <!-- Calculator Area End -->
    <script>
        document.getElementById('categorie').addEventListener('change', function() {
            document.getElementById('type').value = '';
        });
    </script>
</div>

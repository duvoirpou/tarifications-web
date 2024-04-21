<div>
    <!-- Calculator Area -->
    <div id="optionGroup1" class="row option-box">
        <div class="ribbon-left"><span class="left">Populaires</span></div>
        <span class="price-box-desc">Prix</span>
        <div class="price-box w-25">
            <sup>XAF</sup>
            @if ($categorie_id)
                <span class="typePrice" hidden>{{ $typePrice }}</span>
                <span>{{ number_format($typePrice, 2, ',', ' ') }}</span>
            @else
                <span class="typePrice">0</span>
            @endif
        </div>

        <div class="option-box-header">

            <h3>Catégories & types</h3>
            <p>
                @if ($type_id && $type_id != 0)
                    {{ $get_type->description }}
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

    @if (!is_null($type_id) AND $types)
        @foreach ($types_functionalities as $item)
            <div id="extraOptionGroup1" class="row option-box">
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
                        <span id="extraOption1Title">
                            {{ $item->functionality->name }}{{--  {{ $loop->iteration }} --}}
                        </span>
                    </label>
                    {{-- <label class="cbx" for="">
                            <input type="checkbox" name="selected_functionalities_ids[]"
                                value="{{ $item->functionality->id }}" data-autre-valeur="{{ $item->functionality->ranking->coefficient }}"
                                style="font-size: 1.5rem !important;" onchange="updatePrice(this.value)" />
                            <span id="extraOption1Title">Choisir</span>
                        </label> --}}
                </div>
                <div class="option-box-header">
                    {{-- <h3>{{ $item->functionality->name }}</h3> --}}
                    <p class="text-bold">{{ $item->functionality->description }}</p>
                </div>
            </div>
        @endforeach
    @endif
    <!-- Calculator Area End -->

</div>

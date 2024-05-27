{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Order  -->
        <div class="order">
            <div class="container">
                <!-- Form -->
                {{-- <form method="POST" id="type" name="type" action="php/send_order_1_attached_pdf.php"> --}}
                <form method="POST" id="type" name="type" action="{{ route('type.store') }}">
                    @csrf
                    <div class="row">
                        <!-- Calculator Area End -->
                        <div class="col-lg-12" id="mainContent">
                            <div id="" class="row option-box">
                                <div class="option-box-header">
                                    <h3>Types de projets</h3>
                                    <p>

                                        @if (session()->has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <strong>{{ session()->get('success') }}</strong>
                                            </div>
                                        @endif


                                        <script>
                                            $(".alert").alert();
                                        </script>
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nouveau type</label>
                                        <input id="name" class="form-control" name="name" type="text"
                                            value="{{ old('name') }}" />
                                        @error('name')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {{-- <label for="">Catégorie</label> --}}
                                        <select class="wide nice-select" name="category_id" id="">
                                            <option value="">-- Choisir une catégorie --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="price">Prix</label>
                                        <input id="price" class="form-control" name="price" type="text"
                                            value="{{ old('price') }}" />
                                        @error('price')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputMessage">Description</label>
                                        <textarea name="description" id="inputMessage" class="form-control"></textarea>
                                        @error('description')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 mt-4">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i>
                                        Ajouter
                                    </button>
                                    {{-- <button type="button" class="btn btn-danger">
                                        <i class="fa fa-times"></i>
                                        Annuler
                                    </button> --}}
                                </div>
                            </div>


                            <div id="personalDetails" class="row contact-box">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-sm table-hover"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Catégorie</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($types as $item)
                                                <tr class="">
                                                    <td scope="row">
                                                        {{-- position de l'élément --}}
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $item->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->category->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->price }}
                                                    </td>
                                                    <td>
                                                        {{ $item->description }}
                                                    </td>
                                                    <td>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

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

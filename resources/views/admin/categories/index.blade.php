{{-- layout --}}
@extends('layouts.app')

@section('content')
    <main>
        <!-- Order  -->
        <div class="order">
            <div class="container">
                <!-- Form -->
                {{-- <form method="POST" id="orderForm" name="orderForm" action="php/send_order_1_attached_pdf.php"> --}}
                <form method="POST" id="orderForm" name="orderForm" action="{{ route('category.store') }}">
                    @csrf
                    <div class="row">
                        <!-- Calculator Area End -->
                        <div class="col-lg-12" id="mainContent">
                            <div id="" class="row option-box">
                                <div class="option-box-header">
                                    <h3>Catégorie</h3>
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
                                <div class="col-md-12 col-sm-12">
                                    <label for="name">Nouvelle catégorie</label>
                                    <input id="name" class="form-control" name="name" type="text" />
                                    {{-- error --}}
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-sm-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-sm">
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
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $item)
                                                <tr class="">
                                                    <td scope="row">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $item->name }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.category.edit', [
                                                            'id' => $item->id,
                                                        ]) }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
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

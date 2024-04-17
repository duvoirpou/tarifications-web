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
                                    <p style="float: right">
                                        <a class="btn btn-sm btn-primary text-white" href="{{ route('admin.categories') }}">
                                            <i class="fa fa-arrow-left"></i>
                                            Retour
                                        </a>

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
                                    <input id="name" class="form-control" name="name" value="{{ $category->name }}" type="text" />
                                    {{-- error --}}
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 col-sm-12 mt-4">
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                        Modifier
                                    </button>
                                    {{-- <button type="button" class="btn btn-danger">
                                        <i class="fa fa-times"></i>
                                        Annuler
                                    </button> --}}
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

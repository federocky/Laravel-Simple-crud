@extends('layouts.main')

@section('content')

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p class="fs-5">Editar producto</p>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @method('put')
                            @csrf

                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                            </div>

                            <button type="submit" class="btn btn-primary mt-1">Guardar</button>
                            <a href="{{ route('products.index') }}" class="btn btn-danger mt-1">Cancelar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
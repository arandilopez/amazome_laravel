@extends('layouts.main')

@section('content')
@forelse($products as $product)
<div class="card-columns">
    <div class="card">
        <a href="{{ route('productos.show', ['id' => $product->id]) }}"><img src="" class="card-img-top" alt="Product 00000"></a>
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">N/A</p>
            <div class="text-right">
                <button class="btn btn-warning"><i class="fas fa-cart-plus"></i> •
                    <span>$ {{ $product->price }}</span></button>
            </div>
        </div>
    </div>
</div>
@empty
<div class="alert alert-info">
    <strong>No hay productos para mostrar</strong>
    <p>Puedes agregar nuevos productos <a href="{{ route('productos.create') }}">aquí</a></p>
</div>
@endforelse
@endsection
<?php

namespace App\Services;

class CompraProductos
{
    function comprar()
    {
        \DB::transaction(function () {
            $products = Products::all();
            Paypal::charge();
            $venta = new Venta();
            $venta->productos = $products;
            $venta->save();
        });
    }
}

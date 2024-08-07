<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrate', function () {
    return view('registrate');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-guatemala-honduras-y-el-salvador', function () {
    return view('fel-pos');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-ilimitado-restaurantes-guatemala-honduras-y-el-salvador', function () {
    return view('fel-restaurantes');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-ilimitado-hoteles-guatemala-honduras-y-el-salvador', function () {
    return view('fel-hoteles');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-ilimitado-farmacias-guatemala-honduras-y-el-salvador', function () {
    return view('fel-farmacias');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-ilimitado-aceiteras-guatemala-honduras-y-el-salvador', function () {
    return view('fel-aceiteras');
});

Route::get('/servicios/facturacion-electronica-en-linea-fel-ilimitado-tiendas-guatemala-honduras-y-el-salvador', function () {
    return view('fel-tiendas');
});

Route::get('/combos-equipo-para-puntos-de-venta-con-facturación-electronica-fel-ilimitada', function () {
    return view('combos-tiendas');
});


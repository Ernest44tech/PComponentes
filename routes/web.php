<?php

use Illuminate\Support\Facades\Route;

Route::get('/prueba', function () {
    return 'Laravel está corriendo correctamente ✅';
});

Route::view('/inicio','/inicio');
Route::view('/home','/views/inicio');
Route::view('/recent','/nivel1/recent');
Route::view('/sells','/nivel1/sells');
Route::view('/carrito','/nivel2/carrito');
Route::view('/categorias','/nivel2/categorias');
Route::view('/accessories','/categories/accessories');
Route::view('/audio','/categories/audio');
Route::view('/computer','/categories/computer');
Route::view('/components','/categories/components');
Route::view('/storage','/categories/storage');
Route::view('/monitors','/categories/monitors');
Route::view('/energy','/categories/energy');
Route::view('/consumables','/categories/consumables');
Route::view('/promotions','/categories/promotions');
Route::view('/refurbished','/categories/refurbished');
Route::view('/configure-pc','/categories/configure-pc');
Route::view('/contacto','/nivel2/contacto');
Route::view('/product','/nivel2/product-info');
Route::view('/account','/nivel3/account');
Route::view('/address','/nivel3/address');
Route::view('/payments','/nivel3/payments');
Route::view('/resume','/nivel3/payments-options/resume');
Route::view('/transactions','/nivel3/payments-options/transactions');
Route::view('/configuration','/nivel3/payments-options/configuration');
Route::view('/security','/nivel3/security');
Route::view('/address-new','/nivel3/address-new');
Route::view('/info','/base/config/info');
Route::view('/terms','/base/terms');
Route::view('/legal','/base/legal');
Route::view('/outlet','/nivel2/outlet');
Route::view('/order','/nivel3/orders/order-pay');
Route::view('/completed','/nivel3/orders/order-completed');
Route::view('/track','/nivel3/orders/tracking');
Route::view('/questions','/base/questions');
Route::view('/add-opinion','/base/add-opinion');
Route::view('/auth','/nivel3/auth');

// Route::view('/cont','/nivel2/contacto');
// Route::view('/info','/base/config/info');

Route::view('/add-opinion', 'base.add-opinion');


<?php

use App\Services\CustomersService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $customers = new CustomersService;
    return view('customers',[
        'customers' => $customers->getCustomers()
    ]);
});
Route::get('customerOrders/{id}',function($id){
    $orders = new OrderService;
    return view('order',[
        'customerOrder' => $orders->getOrder($id)
    ]);
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomersService;

class CustomerController extends Controller
{
    public function getCustomers(CustomersService $customersService)
    {
        if($getCustomers = $customersService->getCustomers()){
            return $getCustomers;
        }
    }
}

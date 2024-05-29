<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public function index() {
        return view('customer'); //trả về trang customer.blade.php
    }

    function getCustomer() {
        $customers = CustomerModel::all();
        return view('admin.customer.getCustomers', ['customers' => $customers]);
    }
}

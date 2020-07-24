<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customers;

class CustomerController extends Controller
{

    public function showCustomerRegister() {

        return view('admin.newcustomer');

    }

}

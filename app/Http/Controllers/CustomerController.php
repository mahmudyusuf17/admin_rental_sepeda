<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::latest()->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Sepeda',
        //     'data' => $sepeda
        // ], 200);
        return view('admin.customer', compact('customer'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index()
    {
        $rent = Rent::latest()->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Sepeda',
        //     'data' => $sepeda
        // ], 200);
        return view('admin.rent', compact('rent'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Returns;
use Illuminate\Http\Request;

class ReturnsController extends Controller
{
    public function index()
    {
        $returns = Returns::latest()->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Sepeda',
        //     'data' => $sepeda
        // ], 200);
        return view('admin.returns', compact('returns'));
    }
}

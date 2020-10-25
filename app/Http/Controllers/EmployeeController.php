<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::latest()->get();
        // return response([
        //     'success' => true,
        //     'message' => 'List Semua Sepeda',
        //     'data' => $sepeda
        // ], 200);
        return view('admin.employee', compact('employee'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
    	return view('admin.employees.index');
    }

    public function create()
    {
    	return view('admin.employees.create');
    }
}

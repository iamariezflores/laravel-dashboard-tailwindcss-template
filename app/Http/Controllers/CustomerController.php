<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $allorders = Orders::all();

        return view('customers', [
            'allorders' => $allorders
        ]);
    }
}

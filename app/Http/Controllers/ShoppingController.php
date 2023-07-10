<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index(){
        $allorders = Orders::all();

        return view('shopping', [
            'allorders' => $allorders
        ]);
    }
}

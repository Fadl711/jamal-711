<?php

namespace App\Http\Controllers\refundsController\salesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sale_RefundController extends Controller
{
    //
    public function create(){
        return view('refunds.sales_refunds.create');
    }
    public function index(){
        return view('refunds.index');
    }
}

<?php

namespace App\Http\Controllers\invoicesController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllBillsController extends Controller
{
    //
    public function all_bills_sale(){
        
        return view('invoice_sales.all_bills_sale');
    }
   
public function index(){
    
        
    return view('invoice_sales.index');

}

public function bills_sale_show(){
    
        
    return view('invoice_sales.bills_sale_show');

}
}

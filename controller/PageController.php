<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function showCustomer(){
        $customer = array('Chandaraty','Maly','Samphas','Donat');
        return view('customer',compact('customer'));
    }
}

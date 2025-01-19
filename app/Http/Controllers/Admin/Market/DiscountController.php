<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    
    public function copan(){
        return view('admin.market.discount.copan');
    }

    public function copanCreate(){
        return view('admin.market.discount.create');
    }

    public function amazingSale(){
        return view('admin.market.discount.amazingsale');
    }

    public function commonDiscount(){
        return view('admin.market.discount.commonDiscount');
    }

    public function commonDiscountCreate(){
        return view('admin.market.discount.commonDiscountCreate');
    }

    public function amazingsaleCreate(){
        dd("صفحه در آینده طراحی خواهد شد");
        return view('admin.market.discount.amazingsaleCreate');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index()
    {
        return view('product_discount');
    }

    public function calculate(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $percent = $request->percent;
        $discountAmount = $price * $percent * 0.01;
        $discountPrice = $price - $discountAmount;
        return view('display-discount',compact(['discountAmount','discountPrice','price','percent','description']));
    }
}

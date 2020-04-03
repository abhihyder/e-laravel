<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showHomePage()
    {   
        $data['products'] = Product::select(['id', 'title', 'slug', 'price', 'sale_price'])
        ->where('active', 1)->paginate(9);

        return view('frontend.home', $data);
    }
}

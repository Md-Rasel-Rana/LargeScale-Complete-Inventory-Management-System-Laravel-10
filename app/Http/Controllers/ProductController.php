<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductPage():View{
        return view('pages.dashboard.product-page');
    }
}

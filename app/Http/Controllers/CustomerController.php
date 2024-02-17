<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function CustomerPage():View{
        return view('pages.dashboard.customer-page');
    }
}

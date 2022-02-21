<?php

namespace App\Http\Controllers\Corporate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;

class PortfolioController extends Controller
{
    //
    public function index()
    {     
        $listsme = Companies::get();
        return view('corporate-portfolio',compact('listsme'));
    }
}

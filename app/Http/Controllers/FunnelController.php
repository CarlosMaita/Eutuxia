<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunnelController extends Controller
{
   
    public function funnel_01()
    {
        return view('funnels.funnel01');
    }
    
    public function funnel_01_ok()
    {
        return view('funnels.funnel01_ok');
    }
}

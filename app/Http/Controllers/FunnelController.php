<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunnelController extends Controller
{
   //----- GENERAL ------------
	
    public function funnel_01()
    {
        return view('funnels.funnel01');
    }

    //----- ROPA ---------------

    public function funnel_02()
    {
        return view('funnels.funnel02');
    }

    //----- EMPRESAS -----------

    public function funnel_03()
    {
        return view('funnels.funnel03');
    }
    
    public function funnel_01_ok()
    {
        return view('funnels.funnel01_ok');
    }

    public function funnel_04_venta()
    {
        return view('funnels.funnel04_venta');
    }

}

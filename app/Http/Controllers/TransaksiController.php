<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WA;
use Jenssegers\Agent\Agent;



class TransaksiController extends Controller
{
    public function landing(){
        $agent = new Agent();

        if ($agent->isMobile()) {
           return view('mobile');
        }
        if ($agent->isDesktop()) {
        return view('desktop');
        }
    }
   
}

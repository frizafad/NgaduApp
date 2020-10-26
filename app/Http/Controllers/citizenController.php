<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;

class citizenController extends Controller
{
   public function index(){
        $warga = Warga::all();

        return view('pages.citizen',compact(['warga']));
   }
}

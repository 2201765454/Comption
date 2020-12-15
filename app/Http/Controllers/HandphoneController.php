<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Handphone;
class HandphoneController extends Controller
{
    public function data()
    {
            
            $hp=Handphone::get();
            return view('layouts.handphone',['datahp'=>$hp]);
    }

    //detail hp
    public function showhpdetail($id)
    {
        
        $findhpid = Handphone::find($id);
        return view('layouts.hpdetail',['hp'=>$findhpid]);
    }
}

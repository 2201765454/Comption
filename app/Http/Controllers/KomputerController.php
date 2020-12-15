<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komputer;
class KomputerController extends Controller
{
    public function data()
    {
            
            $comp=Komputer::get();
            return view('layouts.komputer',['datacomp'=>$comp]);
    }

    //detailkomputer
    public function showcomdetail($id)
    {
        
        $findcomid = Komputer::find($id);
        return view('layouts.komputerdetail',['comp'=>$findcomid]);
    }
}

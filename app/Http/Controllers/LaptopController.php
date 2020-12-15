<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
class LaptopController extends Controller
{
   public function data()
    {
            
            $laptop=Laptop::get();
            return view('layouts.laptop',['datalaptop'=>$laptop]);
    }

  //detaillaptop
    public function showlaptopdetail($id)
    {
        
        $findlaptopid = Laptop::find($id);
        return view('layouts.laptopdetail',['lap'=>$findlaptopid]);
    }

    public function addlaptopview()
    {
        return view('layouts.addlaptop');
    }


    public function addlaptop(Request $request)
    {
      
        $this->validate($request,[
            'laptopname' => ['required', 'string', 'max:20'],
            'laptopprice' => ['required', 'int', 'min:2000000'],
            'laptopram' => ['required', 'int', 'min:4'],
            'laptopimage' => ['required'],
            'laptopssd' => ['required', 'int', 'min:240'],

        ]);

        $laptop = new Laptop();
        $laptop->laptopname = $request->input('laptopname');
        $laptop->laptopprice = $request->input('laptopprice');
        $laptop->laptopram= $request->input('laptopram');
        $laptop->laptopssd = $request->input('laptopssd');
        $laptop->laptopimage = $request->laptopimage;
    

        if($request->hasfile('laptopimage'))
        {
          $laptopimage= $request->file('laptopimage');
          $laptopimage->move('image/laptop',$laptopimage->getClientOriginalName());
        }
        else
        {
          return $request;
          $laptopimage->laptopimage='';
        }
        $laptop->save();
        return redirect('laptop');
        
    }




    

}
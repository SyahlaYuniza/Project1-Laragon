<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Chasier;

class ChasierController extends Controller
{
    //
    public function index (){
        $data = chasier::all();

        //dd($data);
        
        return view('chasiers.index',compact('data'));
    }
    
    public function tambah()
    {
        return view('chasiers.create');
    }

    public function simpan(Request $request){
        $request->validate([
            'name' => 'required|min:5'
            
        ]);

        Chasier::create($request->all());
        return to_route('chasier-index');
    }
}

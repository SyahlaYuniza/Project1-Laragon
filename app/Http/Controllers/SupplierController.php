<?php

namespace App\Http\Controllers;

use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
     
     public function index (){
        $data = supplier::all();

        //dd($data);
        
        return view('suppliers.index',compact('data'));
    }
    
    public function tambah()
    {
        return view('suppliers.create');
    }

    public function simpan(Request $request){
        $request->validate([
            'nama_pt' => 'required|min:5'
            
        ]);

        Supplier::create($request->all());
        return to_route('supplier-index');
    }
}

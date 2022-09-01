<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identity;
class DataController extends Controller
{
    public function getData() // route ke halaman index
    {
        $datas = Identity::get();
        return view('index',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'ktp' => 'required',
            'address' => 'required'
        ]);
      
        Identity::create($request->all());
       
        return redirect()->route('index')
                        ->with('success','Student created successfully.');
    }
    public function destroy(Identity $id)
    {
        $id->delete();
       
        return redirect()->route('index')
                        ->with('success','Student deleted successfully');
    }
    
}

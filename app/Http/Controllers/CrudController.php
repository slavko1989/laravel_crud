<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function home(){
        $crud = Crud::all();
        return view('home',compact('crud'));
    }
    public function create(){

        return view('create');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required'

        ]);
        $crud = new Crud;
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->address = $request->address;

        $crud->save();
        return redirect()->back()->with('message','user create successfully');

    }

    public function edit($id){
        $update = Crud::where('id','=',$id)->first();
        return view('edit',compact('update'));
    }

    public function update(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=>'required'

        ]);
        Crud::where('id','=',$request->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address
    ]);

        //$crud->save();
        return redirect()->back()->with('message','user updated successfully');

    }

    public function delete($id){

        Crud::where('id','=',$id)->delete();
        return redirect()->back()->with('message','user delete successfully');

    }
}


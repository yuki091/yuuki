<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;
   
class ClothController extends Controller
{   
 
    public function home()
    {
        $clothes = Cloth::all();
        return view('home',['clothes' => $clothes]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Cloth::create($request->all());
        return redirect('/home');
    }
    // public function show()
    // {
    //     $cloth = Cloth::find($category_id);
    //     return view('home.show',['cloth'=> $cloth]);
    // }
    public function show(Cloth $cloth){
        $data=Cloth::find("category_id",$cloth->category_id)->first();
        return view("home.show",["data"=>$data]);
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',compact('cloth'));
    }
    public function update(Request $request, $id)
    {
        $update = [
            'category' => $request -> category,
            'brand' =>$request -> brand,
            'memo' =>$request -> memo
        ];
        Cloth::where('id', $id) ->update($update);
        return back()->with('success', '編集完了しました');
    }
    public function destroy($id)
    {
        Cloth::where('id', $id)->delete();
        return redirect()->route('home')->with('success', '削除しました');
    }
}
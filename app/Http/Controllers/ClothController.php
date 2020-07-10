<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;
use Storage;
use Intervention\Image\Facades\Image;

   
class ClothController extends Controller
{   
 
    public function index()
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

        // Cloth::create($request->all());
        $path = $request->file('filename')->store('public/cloth_images');
        
        $clothes = new Cloth;
        $clothes->category_name=$request->category_name;
        $clothes->brand_name=$request->brand_name;
        $clothes->memo=$request->memo;
        $clothes->$request->$path;
        $clothes->save();
        
        // return redirect('/home');

        

        
    }

    public function show($id)
    {
        $cloth = Cloth::find($id);
        return view('show',['cloth'=>$cloth]);
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',['cloth'=>$cloth]);
    }
    public function update(Request $request, $id)
    {
        $updata=[
            'category_name'=>$request->category_name,
            'brand_name'=>$request->brand_name,
            'memo'=>$request->memo
        ];
        Cloth::where('id',$id)->update($update);
        return back()->with('success', '編集完了しました');
    }
    public function destroy($id)
    {
        $cloth=Cloth::find($id);
        $cloth->delete();
        return redirect('home');
    }
}

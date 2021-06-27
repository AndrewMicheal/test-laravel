<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cat;
use Illuminate\Support\Facades\Storage;



class CatController extends Controller
{
    //
    public function index() 
    {
        // select * from cats
        $cats = Cat::paginate(2);
        $x = 3;
        
        return view('cats/index',[
            'cats' => $cats , 
            'a' => $x
        ]);
    }

    public function show($id) 
    {
        // select * from cats where id = $id
        $cat = Cat::findOrFail($id);
        return view('cats/show',[
            'cat'=>$cat
        ]);
    }

    public function create()
    {
        return view('cats/create');
    }

    public function validationInputs(Request $request , $required = "required")
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'desc' => 'required|string',
            'img' => "$required|image|max:1024|mimes:jpg,jpeg,png"
        ]);
    }

    public function store(Request $request)
    {
        $this->validationInputs($request);
       $imagePath = Storage::putfile('cats',$request->img);
        Cat::create([
           'name' => $request->name ,
           'desc' => $request->desc ,
           'img' => $imagePath
       ]);
       return redirect(url('/cats'));
    }

    public function edit($id)
    {
        $cat = Cat::findOrFail($id);

        return view('\cats\edit',[
            'cat' => $cat
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validationInputs($request , "nullable");
         $cat = Cat::findOrFail($id);
         $imagePath = $cat->img;

         if ($request->hasFile('img')) {
             Storage::delete($imagePath);
             $imagePath = Storage::putFile("cats",$request->img);
         }

         $cat->update([
            'name' => $request->name ,
            'desc' => $request->desc ,
            'img' => $imagePath
        ]);

        return redirect(url('/cats'));
    }

    public function delete($id)
    {
        $cat = Cat::findOrFail($id);
        Storage::delete($cat->img);
        $cat->delete();
        return redirect(url("/cats"));
    }
}

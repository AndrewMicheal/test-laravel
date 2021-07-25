<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cat;

use Illuminate\Support\Facades\Validator;



use App\Http\Resources\CatResource;

class ApiCatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();

        return CatResource::collection($cats);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:50',
        //     'desc' => 'required|string',
        //     'img' => "required|image|max:1024|mimes:jpg,jpeg,png"
        // ]);

        $validator = Validator::make($request->all() , [
            'name' => 'required|string|max:50',
            'desc' => 'required|string',
            'img' => "required|image|max:1024|mimes:jpg,jpeg,png"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }


        $file_extenetison = $request->img->getClientOriginalExtension();
        $fileName = time().'.'.$file_extenetison;
        $path = 'uploads/cats';
        $request->img->move($path,$fileName);

        $cat = Cat::create([
           'name' => $request->name ,
           'desc' => $request->desc ,
           'img' =>  $fileName 
       ]);

       return response()->json([
           'msg' => 'create successfully' ,
        //    'cat' => new CatResource($cat) 
       ] , 201);
    }
}

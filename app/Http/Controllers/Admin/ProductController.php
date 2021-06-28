<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        
        $products = Product::all(); 
        return view('admin.modules.product.index',compact('products'));


    }
    public function create() {
        return view('admin.modules.product.create');
    }
    public function store(Request $request) {
      

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $file->storeAs('storage', $fileName, 'public');
            $linkFile = 'storage/storage/'.$fileName;

        }
        //C1
        // $dataSave = new Product();

        // $dataSave->name = $request->name;
        // $dataSave->image = $linkFile;
        // $dataSave->price = $request->price;
        // $dataSave->status = $request->status;
        // $dataSave->description = $request->description;

        
        // $dataSave->save();

        //C2
        $dataSave = [
            'name' => $request->name,
            'image' => $linkFile,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
        ];

        Product::create($dataSave);

    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.modules.product.edit',compact('product'));
    }
    public function update($id, Request $request){
        $data = $request->all();
        if($request->hasFile('image')){
            $file = $request ->file('image');
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $file->storeAs('store'.$fileName,'public');
            $linkFile = 'storage/storage/'.$fileName;
        }
        $dataSave = [
            'name' => $request->name,
            'image' => $linkFile,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
        ];
        Product::where('id',$id)->update($dataSave);
    }
    public function destroy(Request $request, $id){
        $product = Product::find($id);
        $product->delete();
        echo 'ok';
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
      public function addproduct(){
        return view('admin.Addproducts');
    }

    public function storeproduct(Request $request)
    {
        // Validation
        $request->validate([
            'pname' => 'required|string|max:255',
            'desc' => 'nullable|string',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Image Upload
        if($request->hasFile('image')){
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $imageName);
        }

        // Save to Database
        Product::create([
            'name' => $request->pname,
            'description' => $request->desc ?? '',
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName ?? null,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

}

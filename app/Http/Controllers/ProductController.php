<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        // $categories = Category::all();
        // dd($products);
        return view('products.allProducts')->with('products', $products);
    }

    public function arrange(){
        $products = Product::orderByPrice()->get();
        dd($products);
        return view('products.allProducts', compact('products'));
    }

    public function manager()
    {
        //
        $products = Product::all();
        return view("products.ManagerProduct")->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required',
            'status' => 'required',
            'quality' => 'required',
        ]);

        $file = $request -> file('photo');
        $destinationPath='img';
        $fileName = $file -> getClientOriginalName();

        $file-> move($destinationPath,$fileName);

        // Product::create($request->all())->categories()
        // ->attach($request->input('categories'));

        $product = new Product($request->all());
        $product->photo = $fileName;
        $product->save();
        $product->categories()->attach($request->input('categories'));
        return redirect()->route('products.ManagerProduct')->with('success', 'Thêm Sản Phẩm Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $id_user = Auth::user()->id;
        return view('products.show',compact('id_user'))->with('item', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit')->with("product", $product)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
            'quality' => 'required',
        ]);
        $oldImage = $request->input('oldPhoto');
        // if ($oldImage) {
        //     Storage::delete('public/img/'.$oldImage);
        //     $oldImage->delete();
        //     $product->photo= null;
        // }

        $oldImagePath = public_path("img/".$oldImage);
        // dd($oldImagePath);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        $product = Product::find($id);
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->status = $request->input('status');
            $product->quality = $request->input('quality');
        if ($request->hasFile('photo')) {
            $file = $request -> file('photo');
            $destinationPath = 'img';
            $fileName = $file->getClientOriginalName(); 
            $file->move($destinationPath,$fileName);            
            $value = $request->input('categories',[]);
            $product->photo = $fileName;
        }
        $product->save();
        $product->categories()->sync($request->input('categories',[]));
        return redirect()->route('products.ManagerProduct',['id'=>$product->id])->with('success', 'Sửa Sản Phẩm Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('products.ManagerProduct')->with('success','Xóa thành công');
    }
    public function showCateByID($id){
        if ($id) {
            $categoryID = Category::findOrFail($id);
            $productsCate = $categoryID->products;
        }
        else{
            $productsCate = Product::all();
        }
        return view('products.index',compact('productsCate','categoryID'));
    } 
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::query()->where('name', 'like', "%{$keyword}%")->get();
        return view('products.search')->with('product', $products);
    }
}

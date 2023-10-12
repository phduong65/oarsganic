<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::all();
        $total = 0;
        foreach ($carts as $item) {
            $total += $item->price*$item->quantity;
        }
        return view('carts.index', compact('carts', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        else{
        $cart = new Cart();
        $cart->name = $request->input('product_name_hidden');
        $cart->photo = $request->input('product_photo_hidden');
        $cart->price = $request->input('product_price_hidden');
        $cart->quantity = $request->input('quantity');
        $cart->product_id = $request->input('product_id_hidden');
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect()->route('carts.index')->with('success', 'Thêm Sản Phẩm Thành Công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect()->route('carts.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }
    public function updateAll(Request $request)
    {
        $id = $request->input('cart_id');
        $cartItem = Cart::findOrFail($id);
        $quantity = $request->input('cart_quantity');
        $cartItem->quantity = $quantity;
        $cartItem->save();
        $carts = Cart::all();
        $total = 0;
        foreach ($carts as $item) {
            $total += $item->price*$item->quantity;
        }
        return redirect()->route('carts.index',compact('total'))->with('success', 'Sản phẩm đã cập nhật trong giỏ hàng.');
    }
}

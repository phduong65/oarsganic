<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItem = Cart::all();
        $total = 0;
        foreach ($cartItem as $item) {
            $total += $item->price * $item->quantity;
        }
        return view('orders.index', compact('cartItem', 'total'));
    }

    public function manageOrders()
    {
        $OrderItems = Order::all();
        return view('orders.ManagerOrder')->with('OrderItems', $OrderItems);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $prefix = '#';
        $cartItem = Cart::all();
        $totalCash = 0;
        foreach ($cartItem as $value) {
            $totalCash += ($value->quantity * $value->price);
        }
        $orders = new Order();
        $orders->id_orders = $prefix . Str::random(6);
        $orders->id_user = Auth::user()->id;
        $orders->name_user = $request->input('name');
        $orders->email_user = $request->input('email');
        $orders->phone_user = $request->input('phone');
        $orders->address_user = $request->input('address');
        $orders->note_user = $request->input('note');
        $orders->total_price = $request->input('total_price');
        $orders->status = "Đang xử lí";
        $orders->save();
        Cart::where('user_id', auth()->user()->id)->delete();
        return view('orders.success', compact('cartItem', 'orders', 'totalCash'))->with('success', 'Đặt hàng Thành Công');
    }
    public function changeStatus(Request $request)
    {
        $id = $request->input('id');
        $status_changed = $request->input('selected-status');
        $order = Order::findOrFail($id);
        if ($order) {
            $order->status = $status_changed;
            $order->save();
            return redirect()->route('orders.ManagerOrder')->with('success', 'Trạng thái đơn hàng đã được cập nhật.');
        } else {
            return redirect()->route('orders.ManagerOrder')->with('error', 'Không tìm thấy đơn hàng.');
        }
    }
    public function changeStatusUser(Request $request)
    {
        $id = $request->input('id');
        $status_changed = $request->input('selected-status');
        $order = Order::findOrFail($id);
        if ($order) {
            $order->status = "Đã hủy đơn";
            $order->save();
            return redirect()->route('user.show')->with('success', 'Trạng thái đơn hàng đã được cập nhật.');
        } else {
            return redirect()->route('user.show')->with('error', 'Không tìm thấy đơn hàng.');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($orderId)
    {
        $order = Order::with('products')->find($orderId);
        // Truy cập danh sách các sản phẩm đã đặt
        $products = $order->products;
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
        //
    }
}

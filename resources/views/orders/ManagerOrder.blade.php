<x-layout-admin>
    <x-slot:title>
        Quản lý Đơn hàng
    </x-slot:title>
    <div class="container">
        @if($success=Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$success}}
        </div>
        @endif
        <a href="" class="btn btn-primary" style="margin: 20px 0 0;">Add Product</a>
        <table class="table">
            <thead>
                <td>ID_Order</td>
                <td>Name_User</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Note</td>
                <td>Total Price</td>
                <td>Status</td>
                <td style="text-align: center;">Action</td>
            </thead>
            @foreach ($OrderItems as $order)
            <tr>
                <td>{{$order->id_orders}}</td>
                <td>{{$order->name_user}}</td>
                <td>{{$order->email_user}}</td>
                <td>{{$order->phone_user}}</td>
                <td>{{$order->note_user}}</td>
                <td>{{$order->total_price}}</td>
                <td>
                    @if ($order->status == "Đã hủy đơn" ||$order->status == "Xác nhận đơn hàng" )
                    {{$order->status}}
                    <td>
                        <button type="submit" class="btn btn-success" disabled>Cập nhật</button>
                    </td>
                    @else
                    <form action="{{route('orders.changeStatus')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$order->id}}">
                        <label for="status"></label>
                    <select id="status" name="selected-status">
                        <option value="Đang xử lý" >Đang xử lý</option>
                        <option value="Xác nhận đơn hàng">Xác nhận đơn hàng</option>
                        <option value="Đã hủy đơn">Đã hủy đơn</option>
                    </select>
                    <td>
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </td>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</x-layout-admin>
@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/account.css">
@endsection
<x-layout>
    <x-slot:title>
        Profile
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img') }}/bg_breadcrumb (1).png" alt="" />
        </div>
        <div class="title-full">
            <div class="container">
                <p class="title-page">Thông tin tài khoản</p>
            </div>
        </div>
    </div>
    <section class="signup page_customer_account margin-top-20">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    @if($success=Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$success}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-main-acount">
                    <div id="parent" class="row">
                        <div id="a" class="col-xs-12 col-sm-12 col-lg-9 col-left-account">
                            <div class="title_head margin-bottom-20 m992">
                                <h1 class="title_center_page left">
                                    <span class="padding__">Trang khách hàng</span>
                                </h1>
                            </div>
                            <div class="form-signup name-account m992">
                                <p><strong>Xin chào, <span href="/account/addresses" style="color:#ed1c24;">{{$data->name}}</span>&nbsp;!</strong></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                                <div class="my-account">
                                    <div class="dashboard">
                                        <div class="recent-orders">
                                            <div class="table-responsive tab-all" style="overflow-x:auto;">
                                                <table class="table table-cart" id="my-orders-table">
                                                    <thead class="thead-default">
                                                        <tr>
                                                            <th>Đơn hàng</th>
                                                            <th>Ngày</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Giá trị đơn hàng</th>
                                                            <th>Tình trạng thanh toán</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if($allOrders) 
                                                        @foreach ($allOrders as $order)
                                                        <tr>
                                                            <td>
                                                                {{$order->id_orders}}
                                                            </td>
                                                            <td>
                                                                {{date('d-m-Y', strtotime($order->created_at))}}
                                                            </td>
                                                            <td>
                                                                {{$order->address_user}}
                                                            </td>
                                                            <td>
                                                                {{$order->total_price}}
                                                            </td>
                                                            <td>
                                                                @if ($order->status == "Đã hủy đơn" ||$order->status == "Xác nhận đơn hàng" )
                                                                {{$order->status}}
                                                                @else
                                                                {{$order->status}}
                                                                <form action="{{route('orders.changeStatusUser')}}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$order->id}}">
                                                            <td>
                                                                <button type="submit" class="btn btn-danger">Hủy đơn hàng</button>
                                                            </td>
                                                            </form>
                                                            @endif
                                                            </td>
                                                            <td style="display: flex; gap:10px;border-bottom:none;border-top:1px solid #dee2e6">
                                                                <a href="{{route('orders.ManagerOrder')}}" class="btn btn-success">Chi tiết đơn hàng</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>
                                                            <td colspan="6">
                                                                <p>Không có đơn hàng nào.</p>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-xs-right">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="b" class="col-xs-12 col-sm-12 col-lg-3 col-right-account">
                            <div class="title_head margin-bottom-20 mx991">
                                <h2 class="title_center_page">
                                    <span>Trang khách hàng</span>
                                </h2>
                            </div>
                            <div class="form-signup body_right mx991">
                                <p><strong>Xin chào, <a href="/account/addresses" style="color:#ed1c24;">{{$data->name}}</a>&nbsp;!</strong></p>
                            </div>
                            <div class="block-account">
                                <div class="block-title-account">
                                    <h5>Tài khoản của tôi</h5>
                                </div>
                                <div class="block-content form-signup">
                                    <p>Tên tài khoản: <strong style="line-height: 20px;"> {{$data->name}}!</strong></p>
                                    <p><i class="fa fa-home font-some" aria-hidden="true"></i> <span>Địa chỉ: {{$data->address}} </span></p>
                                    <p><i class="fa fa-mobile font-some" aria-hidden="true"></i> <span>Điện thoại: {{$data->phone}}</span> </p>
                                    <p><i class="fa fa-home font-some" aria-hidden="true"></i> <span>Email: {{$data->email}}</span></p>
                                </div>
                            </div>
                            <a href="{{route('password.change')}}" class="btn btn-primary my-3">Đổi mật khẩu</a>
                            <a href="{{route('admin.logout')}}" class="btn btn-danger my-3">Đăng xuất</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/success.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts_product.css">

@endsection
<x-layout>
    <x-slot:title>
        Đặt hàng thành công
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img') }}/bg_breadcrumb.png" alt="">
        </div>
        <div class="title-full">
            <div class="container">
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                <p class="title-page">Đặt hàng thành công- Oars Organic</p>
            </div>
        </div>
    </div>
    <div class="grid wide my-5">
        <div class="row">
            <div class="order-success2col col-lg-7">
                <div class="order-heading">
                    <h2 class="order-head-title flex text-success ">
                        Đặt hàng thành công
                        
                    </h2>
                    <span class="ma-don-hang">Mã đơn hàng : {{$orders->id_orders}}</span>
                    <span class="order-thank-you">Cảm ơn bạn đã mua hàng</span>
                </div>
                <div class="infor-order">
                    <h3>Thông tin giao hàng</h3>
                    <div class="content-main">
                        <div class="form-group flex">
                            <span>Họ và tên người nhận hàng:</span>
                            <span>{{$orders->name_user}}</span>
                        </div>
                        <div class="form-group flex">
                            <span>Số điện thoại:</span>
                            <span>{{$orders->phone_user}}</span>
                        </div>
                        <div class="form-group flex">
                            <span>Địa chỉ nhận hàng:</span>
                            <span>{{$orders->address_user}}</span>
                        </div>
                        <div class="form-group flex">
                            <span>Trạng thái đơn hàng:</span>
                            <span>{{$orders->status}}</span>
                        </div>
                        <div class="form-group flex">
                            <span>Phương thức thanh toán:</span>
                            <span>Tiền mặt</span>
                        </div>

                    </div>
                </div>
                <div class="order-footer">
                    <a href="../" class="tag-a">
                        <span>Tiếp tục mua hàng</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 " style="background-color: #fafafa;border-radius: 15px;">
                <div class="checkout_product">
                    <div class="title-infor" style="padding: 5px 0;">
                        <h2>Thông tin đơn hàng</h2>
                    </div>
                    <div class="infor-product-order">
                        <div class="product-order">
                            @foreach ($cartItem as $item)
                            <div class="product-item flex">
                                <div class="product-left flex">
                                    <div class="product-img">
                                        <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="../assets/photos/dao-do-my.jpg">
                                        
                                    </div>
                                    <div class="product-name">
                                    <span>{{$item->name}} <span class="text-primary">x{{$item->quantity}}</span></span>
                                    </div>
                                </div>

                                <div class="product-price">
                                    <p>{{$item->quantity*$item->price}} <sup>đ</sup></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ma-giam-gia flex">
                        <input type="text" placeholder="Mã giảm giá">
                        <div class="ap-dung-ma">
                            <span>Áp dụng</span>
                        </div>
                    </div>
                    <div class="tam-tinh">
                        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                        <div class="tam-tinh-main flex">
                            <span>Tạm tính</span>
                            <span>{{$totalCash}}<sup>đ</sup></span>
                        </div>
                        <div class="phi-van-chuyen flex">
                            <span>Phí vận chuyển</span>
                            <span>20,000 <sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="tong-cong flex">
                        <span>Tổng cộng</span>
                        <h3>{{$totalCash+20000}} <sup>đ</sup></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <link rel="stylesheet" href="../assets/css/footer.css">
    <style>
        .chinh-sach-item {
            color: #000;
        }
    </style>

</x-layout>
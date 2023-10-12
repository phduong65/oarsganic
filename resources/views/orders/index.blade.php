@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/cart.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts_product.css">
@endsection
<x-layout>
    <x-slot:title>
        Đặt hàng
    </x-slot:title>

    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img') }}/bg_breadcrumb.png" alt="">
        </div>
        <div class="title-full">
            <div class="container">
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                <p class="title-page">Đặt hàng - Oars Organic</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="checkouts">
            <div class="grid wide">
                <div class="row my-5">
                    <div class="col-lg-7">
                        <div class="infor-order">
                            <form action="{{route('orders.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="title-infor">
                                    <h2>Thông tin giao hàng</h2>
                                </div>
                                <div class="form-group">
                                    <div class="input-item">
                                        <input type="text" name="name" placeholder="Họ và tên người nhận hàng" required>
                                    </div>
                                    <div class="input-item">
                                        <input type="email" name="email" placeholder="Email" class="input-email" required>
                                        <input type="phone" name="phone" placeholder="Số điện thoại" required>
                                    </div>
                                    <div class="input-item">
                                        <input type="address" name="address" placeholder="Address" class="input-address" required>
                                    </div>
                                    <div class="input-item "style="height:70px">
                                        <input type="note" name="note" placeholder="Ghi chú" class="input-note" required>
                                    </div>
                                    <div class="input-item "style="height:70px">
                                        <input type="hidden" name="total_price"  class="input-total_price" value="{{$total+20000}}" required>
                                    </div>
                                    
                                </div>
                        </div>
                        <div class="infor-order-end">
                            <div class="go-to-cart">
                                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                                <a href="{{route('carts.index')}}" class="tag-a">Quay lại Giỏ hàng</a>
                            </div>
                            <div class="continue-pay">
                                <button type="submit">Hoàn tất đơn hàng</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-5 " style="background-color: #fafafa;border-radius: 15px;">
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
                                                <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="{{URL::asset('img/img_product')}}/{{$item->photo}}">
                                            </div>
                                            <div class="product-name">
                                                <span>{{$item->name}} <span class="text-primary">x{{$item->quantity}}</span></span>
                                            </div>
                                        </div>
    
                                        <div class="product-price">
                                            <p>{{$item->price*$item->quantity}}<sup>đ</sup></p>
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
                                    <span>{{$total}}<sup>đ</sup></span>
                                </div>
                                <div class="phi-van-chuyen flex">
                                    <span>Phí vận chuyển</span>
                                    <span>20,000 <sup>đ</sup></span>
                                </div>
                            </div>
                            <div class="tong-cong flex">
                                <span>Tổng cộng</span>
                                <h3>{{$total+20000}} <sup>đ</sup></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/cart.css">
@endsection
<x-layout>
    <x-slot:title>
        Đặt hàng
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="../assets/img/bg_breadcrumb.png" alt="">
        </div>
        <div class="title-full">
            <div class="container">
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                <p class="title-page">Đặt hàng - Oars Organic</p>
            </div>
        </div>
    </div>
    <div class="checkouts">
        <div class="grid wide">
            <div class="row">
                <div class="col l-7 c-12">
                    <div class="infor-order">
                        <form action="" method="post">
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
                            </div>
                    </div>
                    <div class="infor-order-end">
                        <div class="go-to-cart">
                            <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                            <a href="../cart" class="tag-a">Giỏ hàng</a>
                        </div>
                        <div class="continue-pay">
                            <button type="submit">Hoàn tất đơn hàng</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col l-5 c-12 " style="background-color: #fafafa;border-radius: 15px;">
                <div class="checkout_product">
                    <div class="title-infor" style="padding: 5px 0;">
                        <h2>Thông tin đơn hàng</h2>
                    </div>
                    <div class="infor-product-order">
                        <div class="product-order">

                            <div class="product-item flex">
                                <div class="product-left flex">
                                    <div class="product-img">
                                        <img src="../assets/photos/dao-do-my.jpg" alt="../assets/photos/dao-do-my.jpg">
                                        <div class="quantity-product"><span>2</span></div>
                                    </div>
                                    <div class="product-name">
                                        <span>Đào đỏ Mỹ</span>
                                    </div>
                                </div>

                                <div class="product-price">
                                    <p>62,000 <sup>đ</sup></p>
                                </div>
                            </div>

                            <div class="product-item flex">
                                <div class="product-left flex">
                                    <div class="product-img">
                                        <img src="../assets/photos/cam.jpg" alt="../assets/photos/cam.jpg">
                                        <div class="quantity-product"><span>1</span></div>
                                    </div>
                                    <div class="product-name">
                                        <span>Cam Thái nhập khẩu</span>
                                    </div>
                                </div>

                                <div class="product-price">
                                    <p>80,000 <sup>đ</sup></p>
                                </div>
                            </div>
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
                            <span>142,000<sup>đ</sup></span>
                        </div>
                        <div class="phi-van-chuyen flex">
                            <span>Phí vận chuyển</span>
                            <span>20,000 <sup>đ</sup></span>
                        </div>
                    </div>
                    <div class="tong-cong flex">
                        <span>Tổng cộng</span>
                        <h3>162,000 <sup>đ</sup></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
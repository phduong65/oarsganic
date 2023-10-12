@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/cart.css">
<link rel="stylesheet" href="{{URL::asset('css')}}/checkouts.css">

@endsection
<x-layout>
    <x-slot:title>
        Giỏ hàng
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img')}}/bg_breadcrumb.png" alt="">
        </div>
        <div class="title-full">
            <div class="container">
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
                <p class="title-page">Giỏ hàng của bạn - Oars Organic</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart">
            <div class="grid wide">
                <div class="cart-title">
                    <h2>Giỏ hàng của bạn ({{$carts->count()}})</h2>
                </div>
                <div class="cart-main">
                    @foreach ($carts as $item)
                    <div class="cart-item">
                        <div class="cart-item-left">
                            <div class="cart-img">
                                <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="">
                            </div>
                            <div class="cart-name-price">
                                <div class="cart-name">
                                    <span>{{$item->name}}</span>
                                </div>
                                <div class="cart-price" style="margin-top:10px;">
                                    <h3>{{$item->price}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="cart-item-right">
                            <div class="quantity-product">
                                <div class="box-quantity-product">
                                    <form action="{{route('carts.updateAll')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="button" value="-" class="tru">
                                        <input type="number" name="cart_quantity" id="" class="value-quantity" value="{{$item->quantity}}">
                                        <input type="button" value="+" class="cong">
                                        <input type="hidden" name="cart_id" value="{{$item->id}}">
                                        <div class="cart-update">
                                            <button type="submit">Cập nhật</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="total-item">
                                <div class="total-title" style="text-align:end;">
                                    <span>Tổng tiền:</span>
                                </div>
                                <div class="total-item-main">
                                    <h3 style="text-align:end;">{{$item->price*$item->quantity}}đ</h3>
                                </div>
                                <div class="cart-item-delete">
                                    <form action="{{ route('carts.destroy', $item->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this item')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="cart-footer-box">
                        <div class="cart-footer">
                            <div class="total-main">
                                <span>Thành tiền: </span>
                                <h1>
                                    {{$total}}
                                </h1>
                            </div>
                            <div class="cart-footer-main">
                                <div class="continue-buy">
                                    <a href="../" class="tag-a">
                                        Tiếp tục mua hàng
                                    </a>
                                </div>
                                <div class="dat-hang button_gradient">
                                    <a href="{{route('orders.index')}}" class="tag-a">
                                        Đặt hàng ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-empty-main">
            <div class="grid wide">
                <div class="box-img-cart-empty">
                    <img src="../assets/img/cart-empty.png" alt="">
                </div>
                <div class="cart-empty-main-title">
                    <span>GIỎ HÀNG TRỐNG</span>
                </div>
                <a href="{{route('user.dashboard')}}" class="tag-a">
                    <div class="continue_view" style="width:200px;margin-top:40px; margin-left:15px;">
                        <i class="fas fa-long-arrow-alt-left"></i>
                        <span>QUAY LẠI CỬA HÀNG</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        const $1 = document.querySelector.bind(document)
        const $2 = document.querySelectorAll.bind(document)
        for (let i = 0; i < $2('.cong').length; i++) {
            let a1 = $2('.value-quantity')[i].value;
            a1 = parseInt(a1)
            $2('.cong')[i].onclick = function() {
                a1 = a1 + 1
                $2('.value-quantity')[i].value = a1
                console.log($1('.cart-update button'))
                $1('.cart-update button').style.backgroundColor = '#b9b9b9'
            }
            $2('.tru')[i].onclick = function() {
                if (a1 < 2) {
                    return
                } else {
                    a1 = a1 - 1
                    $2('.value-quantity')[i].value = a1
                    $1('.cart-update button').style.backgroundColor = '#b9b9b9'
                }
            }
        }
        const cart_list = $2('.cart-item')
        if (cart_list.length == 0) {
            $1('.cart-empty-main').style.display = 'block';
            $1('.cart').style.display = 'none';
        }
    </script>
</x-layout>
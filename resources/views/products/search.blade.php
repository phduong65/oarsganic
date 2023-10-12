<x-layout>
    <x-slot:title>
        Tìm Kiếm Sản Phẩm
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img') }}/bg_breadcrumb (1).png" alt="" />
        </div>
        <div class="title-full">
            <div class="container">
                <p class="title-page">Kết quả tìm kiếm</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
    <div class="row">
            @foreach($product as $item)
            <div class="col-md-3">
                        <div class="content-tab-item">
                            <div class="product-thumnail">
                                <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="">
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products.show',$item->id) }}" class="product-name">{{$item->name}}</a>
                                <div class="product-price">{{$item->price}}<sup>d</sup></div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
</x-layout>
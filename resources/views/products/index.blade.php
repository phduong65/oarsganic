<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <!-- MAIN -->   
    <main class="mainwrapper">
        <!-- Example HTML -->
        <section class="banner">
            <div class="banner_content">
                <div class="banner_content-wrap">
                    <img src="{{URL::asset('img')}}/frame-greens-condiments.jpg" alt="">
                    <img src="{{URL::asset('img') }}/logo-active.png" alt="" class="logo-brand">
                    <span class="text">HEALTHY FOOD</span>
                    <span class="text2">ORGANIC FOOD & DELICIOUS</span>
                    <a href="" class="btn btn-green">All Products</a>
                    <a href="" class="btn btn-rm">Read More</a>
                </div>
                <div class="container">
                    <div class="banner_content-box">
                        <div class="item">
                            <div class="content">
                                <h3 class="title">Rau quả tươi</h3>
                                <p class="desc">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                                    toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất
                                    vả của các mẹ, các chị</p>
                                <a href="#" class="btn">Xem ngay</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <h3 class="title">Sinh tố hoa quả</h3>
                                <p class="desc">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                                    toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất
                                    vả của các mẹ, các chị</p>
                                <a href="#" class="btn">Xem ngay</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <h3 class="title">Thực phẩm tươi</h3>
                                <p class="desc">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                                    toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất
                                    vả của các mẹ, các chị</p>
                                <a href="#" class="btn">Xem ngay</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <h3 class="title">Hoa quả tươi mát</h3>
                                <p class="desc">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an
                                    toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất
                                    vả của các mẹ, các chị</p>
                                <a href="#" class="btn">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="about_content">
                    <div class="about_content-textbox --tb">
                        <div class="about_heading">
                            <span class="heading">Về chúng tôi</span>
                        </div>
                        <p class="desc">Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch
                            với số lượng lớn vì đang vào vụ mùa thu hoạch nên chúng tôi có thể cung ứng cho tất cả các
                            đối tác xuất khẩu nông sản trên cả nước.
                        </p>
                    </div>
                    <div class="about_content-box">
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/icon_uti_1.png" alt="">
                            </div>
                            <h3 class="title">Trang trại hữu cơ</h3>
                            <p class="desc">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</p>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/icon_uti_2.png" alt="">
                            </div>
                            <h3 class="title">Thực phẩm sạch</h3>
                            <p class="desc">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</p>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/icon_uti_3.png" alt="">
                            </div>
                            <h3 class="title">An toàn sinh học</h3>
                            <p class="desc">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</p>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/icon_uti_4.png" alt="">
                            </div>
                            <h3 class="title">Đa dạng sinh học</h3>
                            <p class="desc">Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category">
            <div class="container">
                <div class="category_content">
                    <div class="category_content-textbox --tb">
                        <div class="about_heading">
                            <span class="heading">Danh mục sản phẩm</span>
                        </div>
                        <div class="tab-list">
                            @foreach ($categories as $item)
                            <div class="tab">
                                <a href="" data-value="{{$item->id}}">{{$item->name}}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="category_content-box --cpnbox">
                        @foreach ($products as $item)
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="">
                            </div>
                            <div class="content">
                                <a href="{{ route('products.show',$item->id) }}" class="name">{{$item->name}}</a>
                                <div class="price">{{$item->price}}<sup>d</sup></div>
                            </div>
                        </div>
                        @endforeach
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="hotline">
                <h2 class="text">Hotline</h2>
                <p class="phone">0378208856</p>
                <p class="desc">Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo
                    chất lượng ngon nhất.</p>
            </section>
        </div>
        <section class="selling">
            <div class="container">
                <div class="selling_content">
                    <div class="selling_content-textbox --tb">
                        <div class="about_heading">
                            <span class="heading">Sản Phẩm Bán Chạy</span>
                        </div>
                    </div>
                    <div class="selling_content-box --cpnbox">
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/Ba chỉ bò Mỹ-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="name">Ba chỉ bò Mỹ</div>
                                <div class="price">500,000</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/Ba chỉ bò Mỹ-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="name">Ba chỉ bò Mỹ</div>
                                <div class="price">500,000</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/Ba chỉ bò Mỹ-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="name">Ba chỉ bò Mỹ</div>
                                <div class="price">500,000</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumnail">
                                <img src="{{URL::asset('img')}}/Ba chỉ bò Mỹ-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="name">Ba chỉ bò Mỹ</div>
                                <div class="price">500,000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="topbrand">
            <div class="container">
                <div class="topbrand_content">
                    <div class="topbrand_content-textbox --tb">
                        <div class="about_heading">
                            <span class="heading">top thương hiệu</span>
                        </div>
                    </div>
                    <div class="topbrand_content-wrap" style="display: flex;gap:40px">
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                        <div class="thumnail">
                            <img src="{{URL::asset('img')}}/brand_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
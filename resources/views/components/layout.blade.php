@php
$category = \App\Models\Category::all();
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{$title}}</title>
    <meta name="title" content="" />
    <meta name="description" content="" />
    <!-- meta facebook -->
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css')}}/app.css">
    <link rel="stylesheet" href="{{URL::asset('css')}}/fonts.css">
    <link rel="stylesheet" href="{{URL::asset('css')}}/detail.css">
    <link rel="stylesheet" href="{{URL::asset('css')}}/cart.css">
    @yield('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body class="homepage">
    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header_content">
                <a href="{{route('user.dashboard')}}" class="header_content-logo">
                    <img src="{{URL::asset('img') }}/logo-active.png" alt="">
                </a>
                <nav class="header_content-nav">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li class="product">
                            <a href="{{route('products.allProducts')}}"> Sản Phẩm</a>
                            <ul class="active">
                                
                            @foreach ($category as $item)
                                <li>
                                    <a href="{{route('categories.show',$item->id)}}">{{$item->name}}</a>
                                </li>
                            @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                    </ul>
                </nav>
                <div class="header_content-group">
                <div class="search">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="search_icon">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                        <form action="{{route('product.search')}} " class="d-flex" role="search" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="keyword">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="authentication">
                        <a href="{{route('user.show')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                        </svg>
                    </a>
                    </div>
                    <div class="cart">
                        <a href="{{route('carts.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" title="lên đầu trang" class="top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="15px">
                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
        </a>
        <div class="line"></div>
    </header>
    {{$slot}}
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer_content">
            <div class="footer_content-form">
                <div class="container">
                    <div class="flex">
                        <span class="text">Đăng kí nhận khuyến mãi</span>
                        <form action="#" method="get" class="form-group">
                            <input type="search" name="search" id="search" placeholder="Nhập email của bạn">
                            <button type="submit">Đăng ký</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="footer_content-detail">
                    <div class="infor">
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>
                            </div>
                            <span class="address">4 đường số 18, Linh Chiểu, Thủ Đức, TP. Thủ Đức</span>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z" />
                                </svg>
                            </div>
                            <span class="phone">0378208856</span>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM144 448c0 8.8 7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160c-8.8 0-16 7.2-16 16zM304 64H80V384H304V64z" />
                                </svg>
                            </div>
                            <span class="phone">0969678999</span>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                            <span class="email">anhnguyet1352001@gmail.com</span>
                        </div>
                    </div>
                    <div class="policy">
                        <h3 class="title">Chính sách</h3>
                        <a href="#" class="link">Chính sách đổi trả</a>
                        <a href="#" class="link">Chính sách bảo mật</a>
                        <a href="#" class="link">Chính sách vận chuyển</a>
                        <a href="#" class="link">Phương thức thanh toán</a>
                    </div>
                    <div class="contact">
                        <div class="box" style=" width: 200px; height: 200px; ">
                            <iframe style="width:240px;height:220px;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&amp;tabs=timeline&amp;width=240&amp;height=200&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="240" height="220" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>
                    <div class="about">
                        <h3 class="title">Về chúng tôi</h3>
                        <a href="#" class="link">Giỏ hàng</a>
                        <a href="#" class="link">Giới thiệu</a>
                        <a href="#" class="link">Hướng dẫn mua hàng</a>
                        <a href="#" class="link">Liên hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{URL::asset('js')}}/main.js"></script>
    <script type="text/javascript" src="{{URL::asset('js')}}/app.js"></script>
    <script type="text/javascript" src="{{URL::asset('js')}}/index.js"></script>

</body>

</html>
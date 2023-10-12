<x-layout>
  <x-slot:title>
    Chi Tiết Sản Phẩm
  </x-slot:title>
  <!-- BODY -->
  <div class="breadcrumb_bg">
    <div class="breadcrumb-box-img">
      <img src="{{URL::asset('img') }}/bg_breadcrumb (1).png" alt="" />
    </div>
    <div class="title-full">
      <div class="container">
        <p class="title-page">{{$item->name}}</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="chitietsanpham">
      <div class="chitiet-header">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <div class="chitiet-big-img">
              <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="" srcset="" />
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="chitiet-description">
              <div class="type-product">
                <a href="" class="tag-a"></a>
                Tình trạng: <span>{{$item->status}}</span>
              </div>
              <div class="group-status">
                <span class="first-status"></span>
                <span class="first-status status-2"></span>
              </div>
              <div class="chitiet-des-name">
                <span>{{$item->name}}</span>
              </div>
              <div class="chitiet-des-price">
                <span>{{$item->price}} <sup>đ</sup></span>
              </div>
              <div class="product-description">
                <span>Mô tả về sản phẩm đang được cập nhật</span>
              </div>
              <form action="{{route('carts.store')}}" method="POST" class="quantity-product">
                {{csrf_field()}}
                <div class="box-quantity-product">
                  <div class="so-luong">
                    Số lượng:
                  </div>
                  <input type="button" value="-" class="tru" onclick="changeQuantity(-1)" />
                  <input type="hidden" value="{{$item->id}}" name="product_id_hidden" />
                  <input type="hidden" value="{{$item->price}}" name="product_price_hidden" />
                  <input type="hidden" value="{{$item->photo}}" name="product_photo_hidden" />
                  <input type="hidden" value="{{$item->name}}" name="product_name_hidden" />
                  <input type="number" name="quantity" id="" min="1" class="value-quantity" value="1" />
                  <input type="button" value="+" class="cong" onclick="changeQuantity(1)" />
                </div>
                <button type="submit" name="btn-add-cart" class="chitiet-add-cart" value="1">
                  <h3>Thêm vào giỏ hàng</h3>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-product">
        <img src="{{URL::asset('img') }}/bg_pro.jpg" alt="" srcset="" />
        <h1>OARS</h1>
        <h3>Thực phẩm an toàn 100%</h3>
      </div>
      <div class="chitiet-body">
                <div class="chitiet-body-header">
                    <div class="chitiet-body-title">
                        <span class="chitiet-title-mota chitiet-body-active">Mô tả</span>
                        <span class="chitiet-title-rate">Đánh giá
                            <p class="quantity-rate">({{$item->comments->count()}})</p>
                        </span>
                    </div>
                    <div class="tabs-content">
                        <div class="chitiet-mota same chitiet-active" id="chitiet-mota">
                            <div class="chitiet-mota-text">
                                <p>
                                    {{$item->description}}
                                </p>
                            </div>
                        </div>
                        <div class="chitiet-rate same" id="chitiet-rate">
                            <div>
                                <h2>Đánh giá</h2>
                                <div>
                                    @foreach($item->comments as $comment)
                                    <div class="itemcomment">
                                        <p class="name">{{$comment->user->name}}</p>
                                        <p>{{$comment->content}}</p>
                                        <p>{{$comment->created_at}}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <form action="{{route('comments.store')}}" method="post" class="comment">
                                @csrf
                                @if ($id_user)
                                <input type="text" name="content" placeholder="Nhập đánh giá" class="content">
                                <input type="hidden" name="product_id" value="{{$item->id}}">
                                <input type="hidden" name="user_id" value="{{$id_user}}">
                                <button type="submit">Gửi</button>
                                @else
                                <div class="chitiet-rate-foot">
                                    Chỉ những khách hàng đã đăng nhập và mua sản phẩm này mới có
                                    thể đưa ra đánh giá.
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      <div class="chitiet-foot">
        <div class="chitiet-foot-title">
          <span>Sản phẩm tương tự</span>
        </div>
      </div>
      <div class="grid wide product-selling-main">
        <div class="row">
          <div class="col l-3 c-6">
            <div class="content-tab-item">
              <div class="product-thumnail">
                <a href="">
                  <img src="{{URL::asset('img/img_product')}}/{{$item->photo}}" alt="" />
                </a>
              </div>
              <div class="product-info">
                <div class="product-name">
                  <h3>Cà chua hữu cơ</h3>
                </div>
                <div class="product-price">
                  <h3>5000 <sup>đ</sup></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col l-3 c-6"></div>
          <div class="col l-3 c-6"></div>
          <div class="col l-3 c-6"></div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
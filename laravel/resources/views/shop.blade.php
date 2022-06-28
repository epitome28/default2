@include('layouts.header')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Shop Section -->
<section class="shop-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h3>Enjoy </h3>
        </div>

        <div class="tab shop-list-tab">

            <div class="tab_content">
                <div class="tabs_item">
                    <div class="row align-items-center">
                        @foreach($product as $shop)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="{{asset('storage/product').'/'.$shop->path}}" alt="image">
                                </div>

                                <ul class="shop-list">
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>

                                <div class="shop-content">
                                    <h3>{{$shop->product_name}}</h3>
                                    <span>₦{{number_format(intval($shop->amount *1))}}</span>

                                    <div class="shop-btn">
                                        <a href="{{route('cart',$shop->id)}}" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Section -->

@include('layouts.footer')

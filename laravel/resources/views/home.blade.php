@include('layouts.header')


<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="main-banner-content">
                            <ul class="banner-list">
                                <li>
                                    <i class="flaticon-onion"></i>
                                    <sup>1</sup>
                                    <span>Vegetable</span>
                                </li>
                                <li>
                                    <i class="flaticon-fish-1"></i>
                                    <sup>2</sup>
                                    <span>Fish</span>
                                </li>
                                <li>
                                    <i class="flaticon-cow-1"></i>
                                    <sup>3</sup>
                                    <span>Cow meat</span>
                                </li>
                            </ul>

                            <h1>OKELE SPECIAL </h1>
                            <p> satisfying you with classical delicacies.</p>

                            <div class="banner-btn">
                                <a href="services.html" class="default-btn">
                                    What We do
                                    <i class="flaticon-plus"></i>
                                    <span></span>
                                </a>
                                <a class="optional-btn" href="#">
                                    Visit our firm
                                    <i class="flaticon-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="banner-image">
                            <img src="assets/img/home-one/main-banner.png" alt="image">

                            <div class="shape-area">
                                <div class="creative-shape">
                                    <img src="assets/img/home-one/shape.png" alt="main-image">
                                </div>

                                <div class="creative-shape-two">
                                    <img src="assets/img/home-one/shape.png" alt="main-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img1">
        <img src="assets/img/home-one/1.png" alt="image">
    </div>

    <div class="shape-img2">
        <img src="assets/img/home-one/2.png" alt="image">
    </div>

    <div class="shape-img3">
        <img src="assets/img/home-one/3.png" alt="image">
    </div>

    <div class="shape-img4">
        <img src="assets/img/home-one/4.png" alt="image">
    </div>

    <div class="shape-img5">
        <img src="assets/img/home-one/5.svg" alt="image">
    </div>
</div>
<!-- End Main Banner Area -->



<!-- Start Shop Section -->
<section class="shop-section section-top pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>VISIT OUR SHOP</span>
            <h3>Buy our product</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboreonsectetur adipiscinet dolore.</p>
        </div>

        <div class="tab shop-list-tab">
            <ul class="tabs">
                <li>
                    <a href="#">
                        <span>Fresh Milk</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Fresh Vegetable</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span>Fresh Fish</span>
                    </a>
                </li>
            </ul>

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
                                        <a href="{{route('add-cart',$shop->id)}}" class="shop-btn-one">
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

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/cauliflower.png" alt="image">
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
                                    <h3>Fresh Cauliflower</h3>
                                    <span>$50</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/fish.png" alt="image">
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
                                    <h3>Bunch Fresh Fish</h3>
                                    <span>$90</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/eggplant.png" alt="image">
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
                                    <h3>Fresh Eggplant</h3>
                                    <span>$30</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/milk.png" alt="image">
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
                                    <h3>Organic Milk</h3>
                                    <span>$65</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs_item">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/cauliflower.png" alt="image">
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
                                    <h3>Fresh Cauliflower</h3>
                                    <span>$50</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/fish.png" alt="image">
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
                                    <h3>Bunch Fresh Fish</h3>
                                    <span>$90</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/eggplant.png" alt="image">
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
                                    <h3>Fresh Eggplant</h3>
                                    <span>$30</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="shop-item">
                                <div class="shop-image">
                                    <img src="assets/img/shop/milk.png" alt="image">
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
                                    <h3>Organic Milk</h3>
                                    <span>$65</span>

                                    <div class="shop-btn">
                                        <a href="cart.html" class="shop-btn-one">
                                            Add To Cart
                                            <i class="flaticon-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Section -->

<!-- Start Video Section -->
<div class="video-section">
    <div class="container">
        <div class="video-content">
            <a href="https://www.youtube.com/watch?v=Z3OS4Bn0n-Q" class="video-btn popup-youtube">
                <i class="fas fa-play"></i>
            </a>
        </div>
    </div>
</div>
<!-- End Video Section -->

<!-- Start Fun Facts Section -->
<section class="fun-facts-area pb-100">
    <div class="container">
        <div class="fun-facts-content-area">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="150">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Happy Costomer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="100">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Recomendation</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="200">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>Overall Deliver</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <h3>
                            <span class="odometer" data-count="10">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                        <p>unhappy client</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Section -->



<!-- Start Services Section -->
<section class="services-section pb-100">
    <div class="container">
        <div class="services-content-area">
            <div class="services-slider owl-carousel owl-theme">
                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-mission-accomplished"></i>
                        <h3>
                            <a href="single-services.html">
                                Enjoy how meal
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-sushi"></i>
                        <h3>
                            <a href="single-services.html">
                                Fresh ingrident
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-shipping-and-delivery"></i>
                        <h3>
                            <a href="single-services.html">
                                Home Delivery
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-vendor"></i>
                        <h3>
                            <a href="single-services.html">
                                Where We sell
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-harvest"></i>
                        <h3>
                            <a href="single-services.html">
                                Good Food
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-mission-accomplished"></i>
                        <h3>
                            <a href="single-services.html">
                                Well Prepared
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->




<!-- Start Testimonials Section -->
<section class="testimonials-section pt-100">
    <div class="container-fluid p-0">
        <div class="testimonials-title">
            <span>Testimonials</span>
            <h3>Our lovely customers say it best</h3>
        </div>

        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-item">
                <div class="testimonials-content">
                    <h3>Tosin</h3>
                    <span>Ibadan, Nigeria</span>
                    <p>Thank You" for making such wonderful quality products. I especially love-love-love</p>

                    <div class="testimonials-info">
                        <img src="assets/img/client/15.jpg" alt="image">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <ul class="star-list">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="testimonials-item">
                <div class="testimonials-content">
                    <h3>Akinyele</h3>
                    <span>Lagos, Nigeria</span>
                    <p>Just a word of thanks to your company for the continued great service</p>

                    <div class="testimonials-info">
                        <img src="assets/img/client/14.jpg" alt="image">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <ul class="star-list">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="testimonials-item">
                <div class="testimonials-content">
                    <h3>Ayomide</h3>
                    <span>ikeja,Nigeria</span>
                    <p>I just wanted to say a huge "thank you" for my 1st delivery from the food delivery company yesterday</p>

                    <div class="testimonials-info">
                        <img src="assets/img/client/12.jpg" alt="image">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <ul class="star-list">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="testimonials-item">
                <div class="testimonials-content">
                    <h3>Samuel</h3>
                    <span>Abeokuta, Nigeria</span>
                    <p> I would just like to say how continually pleased we are with everything about your company.</p>

                    <div class="testimonials-info">
                        <img src="assets/img/client/13.jpg" alt="image">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <ul class="star-list">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="testimonials-item">
                <div class="testimonials-content">
                    <h3>Toluwalope</h3>
                    <span>Ogba, lagos, Nigeria</span>
                    <p> I just wanted to say how much we appreciate your service. We have had deliveries for a while now and the quality has never dipped.</p>

                    <div class="testimonials-info">
                        <img src="assets/img/client/11.jpg" alt="image">
                        <div class="icon">
                            <i class="flaticon-quote"></i>
                        </div>
                        <ul class="star-list">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->

<!-- Start Blog Section -->
<section class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>OUR BLOG</span>
            <h3>Funny Jokes About Food</h3>
            <p>You might not be able to explain why eba tastes better when you eat it with your hands, but you know in your heart that it’s true</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item bg-1">
                    <span>Okela special, 22 July</span>
                    <h3>Swallow tastes better when you eat it with your hands</h3>
                    <p>Keep that fork away from me.</p>
                    <div class="blog-btn">
                        <a href="single-news.html" class="blog-btn-one">
                            Learn more
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item bg-2">
                    <span>Okela special, 22 July</span>
                    <h3>Pounded yam tastes better when someone else does the pounding</h3>
                    <p>Especially if they sweat inside it small. Don’t @ us.</p>
                    <div class="blog-btn">
                        <a href="single-news.html" class="blog-btn-one">
                            Learn more
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-blog-item bg-3">
                    <span>Okela special, 22 July</span>
                    <h3> You’re never too full to eat your meat. </h3>
                    <p>There is always space in your stomach.</p>
                    <div class="blog-btn">
                        <a href="single-news.html" class="blog-btn-one">
                            Learn more
                            <i class="flaticon-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->

<!-- Start Partner Section -->

<!-- End Partner Section -->

@include('layouts.footer')

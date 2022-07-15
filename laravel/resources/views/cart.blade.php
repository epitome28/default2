@include('layouts.header')


<!-- Start Page Title Area -->
<div class="page-title-area item-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Cart Area -->
<section class="cart-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <form>
                    <div class="cart-wraps">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cat as $shop)
                                    <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{asset('storage/product').'/'.$shop->path}}" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">{{$shop->product}}</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">₦{{number_format(intval($shop->amount *1))}}</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
														<span class="minus-btn">
															<i class="fa fa-minus" onclick="window.location='{{route('sub',$shop->id)}}'"></i>
														</span>
                                            <input type="text" value="{{$shop->quantity}}">
                                            <span class="plus-btn">
															<i class="fa fa-plus" onclick="window.location='{{route('add',$shop->id)}}'"></i>
														</span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">₦{{number_format(intval($shop->totalprice *1))}}</span>

                                        <a href="{{route('dele',$shop->id)}}" class="remove">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="continue-shopping-box">
                                        <a href="{{route('shop')}}" class="default-btn">
                                            Continue Shopping
                                            <span></span>
                                            <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <a href="{{route('cart')}}" class=" default-btn">
                                        Update Cart
                                        <span></span>
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="coupon-wrap">
                                <div class="shops-form">
                                    <h3>Calculate Shipping</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <select>
                                                    <option value="">Credit Card Type</option>
                                                    <option value="">Another option</option>
                                                    <option value="">A option</option>
                                                    <option value="">Potato</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Credit Card Number">
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" placeholder="Card Verification Number">
                                        </div>
                                    </div>
                                    <a href="#" class="default-btn">
                                        Apply
                                        <span></span>
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>Subtotal <span>₦{{number_format(intval($sumc *1))}}</span></li>
                                    <li>Shipping <span>₦{{number_format(intval($ship *1))}}</span></li>
                                    <li>Total <span><b>₦{{number_format(intval($tsum *1))}}</b></span></li>
                                </ul>
                                <a href="{{route('checkout',Auth::user()->username)}}" class="default-btn">
                                    Proceed to Checkout
                                    <span></span>
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Area -->

@include('layouts.footer')

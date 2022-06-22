@include('layouts.header')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Box Area -->
<section class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-map-marker"></i>
                    <div class="content-title">
                        <h3>Address</h3>
                        <p>No 6, Ore ofe Street, Akimbo,  <br> Ogun State, Nigeria</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-envelope"></i>
                    <div class="content-title">
                        <h3>Email</h3>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#8ae2efe6e6e5cafef8e3ece6eff9a4e9e5e7"><span class="__cf_email__" data-cfemail="b5ddd0d9d9daf5c1c7dcd3d9d0c69bd6dad8">[email&#160;protected]</span></a>
                        <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#d8beb9a098acaab1beb4bdabf6bbb7b5"><span class="__cf_email__" data-cfemail="3553544d7541475c535950461b565a58">[email&#160;protected]</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-contact-box">
                    <i class="fa fa-phone"></i>
                    <div class="content-title">
                        <h3>Phone</h3>
                        <a href="tel:+2348168192858">+234(70 5467 45</a>
                        <a href="tel:+2349064197993">+123(456)123</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Box Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <h3>Drop us a message for any query</h3>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                </div>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Subscribe Area -->
<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h3>Subscribe newsletter </h3>
            <p>Sign up to our newsletter, the Okele Special, so you can be the first to find out the latest news and tips about our Service, as well as general Chevening updates</p>
        </div>

        <form class="newsletter-form">
            <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
            <button type="submit">
                Subscribe Now
                <i class="flaticon-plus"></i>
            </button>
            <div id="validator-newsletter" class="form-result"></div>
        </form>
    </div>
</section>
<!-- End Subscribe Area -->

@include('layouts.footer')

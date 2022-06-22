@include('layouts.header')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Sign Up</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Signup Area -->
<div class="signup-section ptb-100">
    <div class="container">
        <div class="signup-form">
            <h3>Create your Account</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <x-jet-validation-errors class="alert alert-danger" />

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="tel" name="number" class="form-control" placeholder="Phone number"  maxlength = "11" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="password_confirmation" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Signup Now
                                    <span></span>
                                </button>
                            </div>
                            <br>
                            <span>Already a registered user? <a href="{{route('login')}}">Login!</a></span>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- End Signup Area -->

@include('layouts.footer')

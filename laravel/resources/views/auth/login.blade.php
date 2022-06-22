@include('layouts.header')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Login</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->
<!-- Start Login Area -->
<div class="login-section ptb-100">
    <div class="container">
        <div class="login-form">
            <div class="login-title">
                <h3>Welcome Back!</h3>
                <p>Please login to your account.</p>
            </div>


            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-jet-validation-errors class="alert alert-danger" />

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                            <label class="form-check-label" for="checkme">Keep me Login</label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <a href="{{route('password.request')}}">Forget Password?</a>
                    </div>

                    <div class="col-lg-12">
                        <div class="send-btn">
                            <button type="submit" class="default-btn">
                                Login Now
                                <span></span>
                            </button>
                        </div>
                        <br>
                        <span>Don't have account? <a href="{{route('register')}}">Signup!</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Login Area -->
@include('layouts.footer')

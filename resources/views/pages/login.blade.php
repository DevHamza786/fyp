@extends('pages.layout.app')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Login</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Login</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Login Area Wrapper ==-->
    <section class="account-login-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="login-register-form-wrap">
              <div class="login-register-form">
                <div class="form-title">
                  <h4 class="title">Sign In</h4>
                </div>
                <form action="#">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <div class="remember-forgot-info">
                          <div class="remember">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Remember me</label>
                          </div>
                          <div class="forgot-password">
                            <a href="#/">Forgot Password?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <button type="button" class="btn-theme">Sign In</button>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="login-register-form-info">
                  <p>Don't you have an account? <a href="{{ route('register') }}">Register</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Login Area Wrapper ==-->
  </main>

@endsection

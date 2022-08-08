@extends('general.layouts.layoutLogin')


@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
        <h2 class="font-weight-bold text-5 mb-0">Login</h2>
        <form action="{{ route('login') }}" id="frmSignIn" method="post" class="needs-validation" novalidate="novalidate">
          @csrf
          <div class="row">
            <div class="form-group col">
              <label class="form-label text-color-dark text-3">Email Address <span class="text-color-danger">*</span></label>
              <input id="email" type="email" value="" class="form-control form-control-lg text-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
              <input id="password" type="password" value="" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="form-group col-md-auto">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
              </div>
            </div>
            <div class="form-group col-md-auto">
              @if (Route::has('password.request'))
              <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="{{ route('password.request') }}">Forgot Password?</a>
              @endif
            </div>
          </div>
          <div class="row">
            <div class="form-group col">
              <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
              <div class="divider">
                <span class="bg-light px-4 position-absolute left-50pct top-50pct transform3dxy-n50">or</span>
              </div>
              <a href="#" class="btn btn-primary-scale-2 btn-modern w-100 text-transform-none rounded-0 font-weight-bold align-items-center d-inline-flex justify-content-center text-3 py-3" data-loading-text="Loading..."><i class="fab fa-facebook text-5 me-2"></i> Login With Facebook</a>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection

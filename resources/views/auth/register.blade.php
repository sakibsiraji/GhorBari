@extends('general.layouts.layoutRegister')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <h2 class="font-weight-bold text-5 mb-0">Register</h2>
      <form action="{{ route('register') }}" id="frmSignUp" method="post">
        @csrf
        <!-- <div class="row">
          <div class="form-group col-2">
            <label class="form-label text-color-dark text-3" for="title">Title <span class="text-color-danger">*</span></label>
            <select class="form-control form-control-lg text-4 @error('title') is-invalid @enderror" name="title" required>
              <option value="Mr.">Mr.</option>
            </select>
            @error('name')
            <span class="text-color-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group col-5">
            <label class="form-label text-color-dark text-3" for="name">First Name <span class="text-color-danger">*</span></label>
            <input id="name" type="text" value="{{ old('name') }}" class="form-control form-control-lg text-4 @error('name') is-invalid @enderror" required autocomplete="name" autofocus>
            @error('name')
            <span class="text-color-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group col-5">
            <label class="form-label text-color-dark text-3" for="last_name">Last Name <span class="text-color-danger">*</span></label>
            <input id="name" type="text" value="{{ old('last_name') }}" class="form-control form-control-lg text-4 @error('last_name') is-invalid @enderror" required autocomplete="last_name" autofocus>
            @error('last_name')
            <span class="text-color-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div> -->
        <div class="row">
          <div class="form-group col">
            <label class="form-label text-color-dark text-3" for="phone">Email Address <span class="text-color-danger">*</span></label>
            <input id="email" type="email" value="{{ old('email') }}" class="form-control form-control-lg text-4" required autocomplete="email" name="email">
            @error('email')
            <span class="text-color-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="password" class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
            <input id="password" type="password" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="text-color-danger" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="password-confirm" class="form-label text-color-dark text-3">Confirm Password <span class="text-color-danger">*</span></label>
            <input id="password-confirm" type="password" class="form-control form-control-lg text-4 @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <p class="text-2 mb-2">- By registering to our site, you are agreeing to all our <a href="{{route('terms.and.conditions')}}" class="text-decoration-none">Terms &amp; Conditions</a>.</p>
            <p class="text-2 mb-2">- Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="{{route('privacy.policy')}}" class="text-decoration-none">privacy policy.</a></p>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

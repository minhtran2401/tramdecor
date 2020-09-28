@extends('layouts.app')
@section('title', 'LOGIN ADMIN')

@section('content')

<div class="loader"></div>
<div id="app">
  <section class="section">
    <div class="container mt-5">
        @if(session()->get('success'))
        <div class=" alert alert-warning alert-dismissible fade show" role="alert">
          {{ session()->get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div> 
        @endif  
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="card card-primary">
            <div class="card-header">
              <h4  >Admin Login</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf

                <div class="form-group">
                    <label for="email" class="f-12">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <div class="d-block">
                    <label for="password" class="f-12">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mt-3">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" tabindex="3" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Login') }}   
                  </button>
                </div>
              </form>
             
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>
</div>

@endsection

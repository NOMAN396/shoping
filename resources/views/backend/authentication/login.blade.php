@extends('backend.layouts.appAuth')
      @section('content')
      <div class="authentication-wrapper authentication-basic d-flex justify-content-center">
        <div class="authentication-inner py-5">
          <!-- Login -->
            <div class="card p-2">
            <!-- Logo -->
           <div class="app-brand justify-content-center mt-5">
                <span class="app-brand-text demo text-heading fw-semibold">My shop</span>
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-4">
              <form id="formAuthentication" class="col-12" action="{{route('login.check')}}" method="post">
                     @csrf
                <div class="form-floating form-floating-inline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    value="{{old('email')}}"
                    
                    placeholder="Enter your email"
                    autofocus />                    
                        @if ($errors->has('email'))
              <small>{{ $errors->first('email') }}</small>
                     @endif
                  <label for="email">Email</label>
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control"
                          name="password"
                           value="{{old('password')}}"
                          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                          aria-describedby="password" />
                              @if ($errors->has('password'))
                          <small>
                        {{ $errors->First('password') }}
                    </small>
                @endif 
                        <label for="password">Password</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
               
                    <span>Forgot Password?</span>
                  </a>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" value="login" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}">
                  <span>Create an account</span>
                </a>
              </p>          
          </div>
        </div>
      </div>
</div>
 @endsection
 
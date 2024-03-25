    @extends('backend.layouts.appAuth')
    @section('title','Sign Up')
    @section('content')
     <div class="authentication-wrapper authentication-basic d-flex justify-content-center">
        <div class="authentication-inner py-4">
          <!-- Register Card -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
                <span class="app-brand-text demo text-heading fw-semibold">My Shop</span>
              </a>
            </div>
            <!-- /Logo -->
            <div class="card-body mt-2">
              <form id="formAuthentication" class="mb-3" action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="name"
                    placeholder="Enter your username"
                     value="{{ old('name') }}" required
                    autofocus />
                      @if ($errors->has('FullName'))
                      <small>
                            {{ $errors->first('FullName') }}
                        </small>
                         @endif
                  <label for="username">Username</label>
                </div>
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="contact"
                    name="contact"
                    placeholder="Enter your contact number"
                     value="{{ old('contact') }}" required
                    autofocus />
                      @if ($errors->has('contact'))
                      <small>
                            {{ $errors->first('contact') }}
                        </small>
                         @endif
                  <label for="contact">contact</label>
                </div>
               <div class="form-floating form-floating-outline mb-3">
    <input type="text" class="form-control mail" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required/>
    <label for="email">Email</label>
</div>
@if ($errors->has('email'))
    <small>{{ $errors->first('email') }}</small>
@endif
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                          value="{{ old('password') }}"
                        placeholder="enter you password"
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
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                      <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password_confirmation"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                      <label for="password">Confirm Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid" name="register" value="">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                  <span class="btn btn-danger">Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
   $(document).ready(function() {
    function validate() {
        let dataValid = true;
        $('.mail').each(function() {
            let cur = $(this);
            cur.next('span').remove();
            let emailPattern = /^([a-z0-9_\.-]+)@([\da-z\da-z\.-])\.([a-z\.]{2,6})$/;
            if (!emailPattern.test(cur.val())) {
                cur.after('<span class="error">wrong email </span>');
                dataValid = false;
            }
        });
        return dataValid; // Return the validation result
    }

    // $('form').submit(function(event) {
    //     if (!validate()) {
    //         event.preventDefault(); // Prevent form submission if validation fails
    //     }
    // });
});

  </script>
@extends('front_end.layout.main')
@section('content')

<!-- Login Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="signup_inner">
                <div class="form-container">
                    <form action="{{ route('register.post') }}" method="POST" id="login-signup">
                        @csrf
                        <h3 class="text-center">Sign Up</h3>
                        @if(Session::has('success'))
                            <span class="alert alert-success text-center success-msg">{{ Session::get('success') }}</span>
                        @endif
                        <fieldset>
                            <input placeholder="Your Name" type="text" name="first_name" id="firstName" tabindex="1" value="{{ old('first_name') }}">
                            @error('first_name')
                                <br>
                                <span class="text-danger" style="color:red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input placeholder="last Name" name="last_name" id="lastName" type="text" tabindex="2" value="{{ old('last_name') }}" autofocus>
                            @error('last_name')
                            <br>
                            <span class="text-danger" style="color:red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input placeholder="Enter Email Address" type="email" name="email" id="email" value="{{ old('email') }}" tabindex="3" >
                            @error('email')
                            <br>
                            <span class="text-danger" style="color:red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input name="phone" id="phoneNumber" placeholder="Enter Your Phone Number" type="tel" tabindex="4" value="{{ old('phone') }}">
                            @error('phone')
                            <br>
                            <span class="text-danger" style="color:red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input placeholder="Enter Your Password" type="password" tabindex="5" name="password" id="password">
                            @error('password')
                            <br>
                            <span class="text-danger" style="color:red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input name="password_confirmation" id="confirmPassword" placeholder="Confirm Password" type="password" tabindex="6">
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="signup-submit" data-submit="...Sending">Sing
                                Up</button>
                        </fieldset>
                        <p class="jump-text">
                            Already have an account? <a href="{{ route('login') }}">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Form Section End -->

@endsection

@section('custom-script')

<script>
    $(document).ready(function () {
        var response = 'You have to complete the CAPTCHA.';
        @if($errors->has('g-recaptcha-response'))
        $('#captchaModal').modal('show');
        $('#cap-message').text(response);
        @endif
    });


    $(document).ready(function () {
        $('#phoneNumber').on('input', function () {
            var value = $(this).val();
            if (value < 0) {
                $(this).val('');
            }
        });
    });

</script>


@endsection

@extends('front_end.layout.main')
@section('content')

<!-- Login Page  -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="signup_inner">
                <div class="form-container">
                    <form action="{{ route('login.post') }}" method="POST" id="login-signup">
                    @csrf

                        <h3 class="text-center">Login</h3>
                        @if(Session::has('error'))
                            <span class="alert alert-danger error-msg">{{ Session::get('error') }}</span>
                        @endif
                        <fieldset>
                            <input placeholder="Enter Your E-Mail" type="email" name="email" id="email" tabindex="1" autofocus>
                            @error('email')
                                <br>
                                <span class="text-danger" style="color: red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <input name="password" placeholder="Enter Your Password" type="password" tabindex="2" >
                            @error('password')
                                <span class="text-danger" style="color: red;">{{ $message }}</span>
                            @enderror
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="login-submit" data-submit="...Sending">
                                Login</button>
                        </fieldset>
                        <p class="jump-text">
                            You don't have an account yet? <a href="{{ route('register') }}">Sing Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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

</script>


@endsection

@extends('front_end.layout.main')
@section('title', 'Contact Us')
@section('content')
<!-- Banner Section Start -->
<section class="banner banner--contact">
    <div class="banner_content">
        <h1 class="banner_heading heading">
            Contact Us
        </h1>
        <p class="banner_desc">We’re here to help! At Draft Trax, we value our users and strive to provide the best
            possible support for your fantasy football experience. Whether you have a question about your fantasy
            league, need technical assistance, or want to share feedback, our team is ready to assist.</p>
    </div>
</section>
<!-- contact us  -->
<section class="contact section">
    <div class="container">
        <div class="contact_wrapper">

            <div class="contact_inner">
                <div class="contact_left">

                    <div class="form_rest">
                    @if(Session::has('success'))
                            <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
                        @endif
                        <form action="{{ route('contact.save') }}" method="post" class="mt-60">
                            @csrf
                            <div class="mb-3">
                                <input type="text" placeholder="Full Name" name="full_name" id="full_name" class="form-control para"  value="{{ old('full_name') }}" require>
                                <p class="text-danger d-none contact-error" id="nameError"></p>

                            </div>

                            <div class="mb-3">
                                <input type="email" placeholder="Enter Your Email" class="form-control para"
                                name="email" id="email" value="{{ old('email') }}">
                                <p class="text-danger d-none contact-error" id="emailError"></p>

                            </div>

                            <!-- <div class="mb-3">
                                <div class="show_password">
                                    <input type="password" placeholder="Password" class="form-control para"
                                        id="password-field" name="password">
                                </div>
                            </div> -->
                            <textarea rows="4" cols="50" placeholder="Message" id="message-text-area"></textarea>
                            <p class="text-danger d-none contact-error" id="messageError"></p>

                            <div class="g-recaptcha" data-sitekey="6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa">
                                <!-- <div style="width: 304px; height: 78px;">
                                    <div>
                                        <iframe title="reCAPTCHA" width="304" height="78" role="presentation"
                                            name="a-69crwsttqsnj" frameborder="0" scrolling="no"
                                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddY1MqAAAAAKlmrOJAthAVb6M3RpCXGIvs-gJa&amp;co=aHR0cHM6Ly9ob2NraWRyYWZ0LmNvbTo0NDM.&amp;hl=en&amp;v=pPK749sccDmVW_9DSeTMVvh2&amp;size=normal&amp;cb=1utssnebsd9e"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                        class="g-recaptcha-response"
                                        style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div><iframe style="display: none;"></iframe> -->
                                <button type="button" class="btn submit_btn contact-btn">Submit</button>
                                 <button type="submit" class="d-none" id="contect-form-btn"></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact_right">
                    <div class="contact_rightImg"></div>
                </div>
            </div>
            <div class="contact_content">
                <div class="socials">
                    <p class="sec_desc">Submit your message, and we’ll respond within 24-48 hours.
                    </p>
                    <h4 class="sub_title">Email Support</h4>
                    <p class="sec_desc">For general inquiries, league questions, or account issues, email us at <a class="sec_email" href="info@drafttrax.com">info@drafttrax.com .</a></p>
                    <h4 class="sub_title">Social Media</h4>
                    <p class="sec_desc">Connect with us on social media for updates, tips, and announcements:</p>
                    <div class="socials_wrapper">
                        <div class="social">
                            <a href="https://x.com" target="__blank" class="social_iconWrapp">
                                <div class="social_icon social_icon--twitter"> </div>
                            </a>
                        </div>
                        <div class="social">
                            <a href="https://www.facebook.com/" target="__blank" class="social_iconWrapp">
                                <div class="social_icon social_icon--fb"> </div>
                            </a>
                        </div>
                        <div class="social">
                            <a href="https://www.linkedin.com/" target="__blank"class="social_iconWrapp">
                                <div class="social_icon social_icon--insta"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <h3 class="sec_title">Business Inquiries</h3>
                <p class="sec_desc">For partnerships, media requests, or business opportunities, please contact us at
                     <a class="sec_email" href="mailto:partners@drafttrax.com.">partners@drafttrax.com.</a></p>
                <h3 class="sec_title">Need Help Fast?</h3>

                <p class="sec_desc">Check out our Playing Guide for tips, guides, and troubleshooting advice on
                    everything from setting up your league to optimizing your fantasy football strategy.</p>
                <p class="sec_desc">At Draft Trax, we’re committed to making your fantasy sports experience seamless and
                    enjoyable. Don’t hesitate to reach out—we’re always here for our community of passionate fantasy
                    players.</p>
            </div>
        </div>
    </div>
</section>


@endsection

@section('custom-script')

<script>
    $(document).ready(function () {

        $('.contact-btn').on('click', function () {
           
            var valid = true;
            $(".contact-error").addClass('d-none');
            //$('.text-danger')).css('font-size', '15px');

            if ($('#full_name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();

            if ($('#email').val().trim() === '') {
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#message-text-area').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }


            // if (grecaptcha.getResponse() == '') {
            //     $('#captchaError').removeClass('d-none').text('You must complete the CAPTCHA.');
            //     valid = false;
            // }

            // if (!$('#agree').is(':checked')) {
            //     $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
            //     valid = false;
            // }

            if (valid) {
                $('#contect-form-btn').click();
            }
        });





    });

</script>


@endsection

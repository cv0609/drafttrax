@extends('front_end.layout.main')
@section('title', 'Home')
@section('content')

<!-- banner section -->
<section class="banner">
    <div class="banner_content">
        <h1 class="banner_heading heading">DraftTrax</h1>
        <p class="banner_desc">Your Fantasy Football Hub</p>
        <a href="{{ route('leagues') }}" class="btn banner_btn">Play Now</a>
    </div>
</section>
<!-- why section -->
<section class="why">
    <div class="container">
        <h2 class="heading why_heading">Why DraftTrax?</h2>
        <div class="why_inner">
            <div class="why_card">
                <div class="why_imgSec">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title ">The Ultimate Fantasy Football
                        Draft Room</h3>
                    <p class="why_desc">At Draft Trax, we redefine your
                        fantasy sports experience with our cutting-edge,
                        real-time draft room. Whether you’re a seasoned
                        pro or new to fantasy leagues, our intuitive
                        interface ensures you stay ahead of the game
                        with smart suggestions, player insights, and
                        live updates.</p>
                </div>
            </div>
            <div class="why_card ">
                <div class="why_imgSec why_imgSec--advance">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Advanced Player Analytics for
                        Fantasy Successm</h3>
                    <p class="why_desc"> Dominate your fantasy football
                        league with data-driven decisions. Draft Trax
                        provides in-depth player analytics, weekly
                        projections, injury reports, and performance
                        trends—all in one place. With Draft Trax, you’ll
                        always know which players to start, sit, or
                        trade.
                    </p>
                </div>
            </div>
            <div class="why_card">
                <div class="why_imgSec why_imgSec--leagues">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Custom Fantasy Leagues, Your
                        Way</h3>
                    <p class="why_desc"> Create your dream league with
                        customizable settings tailored to your fantasy
                        football style. From scoring systems to roster
                        sizes, Draft Trax lets you design the
                        testimonial
                        fantasy league for you and your friends.
                        Flexibility and control are at your fingertips.
                    </p>
                </div>
            </div>
            <div class="why_card">
                <div class="why_imgSec  why_imgSec--realTime">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Real-Time Match Updates and
                        Weekly Insights</h3>
                    <p class="why_desc"> Stay on top of your fantasy
                        sports game with live scoring and real-time
                        updates during every matchup. Draft Trax keeps
                        you informed with weekly summaries, trends, and
                        tips to help you outplay your competition.
                    </p>
                </div>
            </div>
            <div class="why_card">
                <div class="why_imgSec why_imgSec--userexp">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Seamless User Experience
                        Across Devices</h3>
                    <p class="why_desc"> Whether you’re managing your
                        team from a desktop, tablet, or smartphone,
                        Draft Trax offers a responsive, mobile-friendly
                        design to keep your fantasy football league
                        within reach. Never miss a pick, trade, or
                        update—wherever you are.
                    </p>
                </div>
            </div>
            <div class="why_card">
                <div class="why_imgSec why_imgSec--trust">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Trusted by Fantasy Sports Fans
                        Everywhere</h3>
                    <p class="why_desc"> Join thousands of fantasy
                        sports enthusiasts who trust Draft Trax for
                        their leagues. Our platform is designed by
                        players, for players, ensuring that you get the
                        best fantasy football experience possible.
                    </p>
                </div>
            </div>
            <div class="why_card">
                <div class="why_imgSec why_imgSec--hub">
                    <div class="why_img"></div>
                </div>
                <div class="why_content">
                    <h3 class="why_title title">Your One-Stop Hub for Fantasy
                        Sports</h3>
                    <p class="why_desc"> Draft Trax isn’t just for
                        fantasy football—it’s your go-to platform for
                        all things fantasy sports. Explore options for
                        other fantasy leagues and connect with
                        like-minded fans to take your game to the next
                        level.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- singup section -->
<section class="singup">
    <div class="container">
        <div class="singup_inner">
            <div class="singup_content">
                <h3 class="singup_heading">
                    Sign up now!
                </h3>
                <form class="singup_form">
                    <input type="email" placeholder="Enter Email Address" class="singup_input" required>
                    <input type="submit" value="Subscribe" class="subscribe_btn submit_btn btn ">
                </form>
            </div>
        </div>
    </div>
</section>
<!--testimonial  section -->
<section class="testimonial">
    <div class="container">
        <h2 class="testimonial_heading heading">Testimonial </h2>
        <div class="testimonial_wrapper">
            <div class="testimonialSlider">
                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">"The Best Fantasy Football Platform Yet!"</h5>
                        <p class="testimonial-text">“Draft Trax
                            completely transformed my fantasy football
                            experience. The real-time draft room was
                            seamless, and the player analytics helped me
                            crush my league. The design is clean,
                            intuitive, and perfect for both beginners
                            and pros. Highly recommend it to anyone who
                            loves fantasy sports!”
                        </p>
                        <p class="user-name">— Chris T., Denver, USA</p>
                    </div>

                </div>

                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">"A Game-Changer for Fantasy Football Fans!"</h5>
                        <p class="testimonial-text">“Draft Trax is
                            awesome! I’m part of a super competitive
                            league here in Sydney, and the platform made
                            drafting and managing my team a breeze. The
                            stats are spot-on, and I loved the weekly
                            match updates. It’s great to see such a
                            high-quality tool for fantasy players down
                            under.”

                        </p>
                        <p class="user-name">— Liam J., Sydney,
                            Australia</p>
                    </div>

                </div>

                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">
                            "Awesome Platform with a Few Minor Hiccups!"</h5>
                        <p class="testimonial-text">“Draft Trax has so
                            much potential. The platform is easy to use,
                            and the analytics are brilliant. My only
                            suggestion would be to speed up the live
                            updates during games—it’s not a big issue,
                            but something I noticed. Overall, I’m really
                            happy with my experience!”
                        </p>
                        <p class="user-name">— Sophia K., Melbourne,
                            Australia</p>
                    </div>

                </div>

                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">"Fantasy Football Made Simple and Fun!"</h5>
                        <p class="testimonial-text">“I’m new to fantasy
                            football, and Draft Trax made it so easy to
                            jump in. The player stats and weekly
                            insights gave me confidence in my picks. I
                            also loved the mobile interface—it worked
                            perfectly during the draft while I was on
                            the go! I’d recommend this to anyone in the
                            UK looking to get started.”
                        </p>
                        <p class="user-name">— Evan R., London,
                            England</p>
                    </div>

                </div>

                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">"Draft Trax is My New Go-To!"</h5>
                        <p class="testimonial-text">“Draft Trax is a
                            solid platform that feels built for serious
                            fantasy players. The draft room and
                            customizable settings were fantastic. I also
                            appreciated how smooth it was on my mobile
                            during a family road trip in Quebec. Can’t
                            wait for next season!”

                        </p>
                        <p class="user-name"> — Danielle M., Toronto,
                            Canada</p>
                    </div>

                </div>

                <div>
                    <div class="testimonial-card">
                        <h5 class="testimonial_title">"A Great Start with Room to Grow!"</h5>
                        <p class="testimonial-text">“Draft Trax is an
                            exciting new platform for fantasy football.
                            It worked well for our league here in
                            Wellington, and I loved the live scoring
                            feature. That said, I’d love to see more
                            local league options and partnerships. It’s
                            a great tool, and I’ll definitely use it
                            again!”

                        </p>
                        <p class="user-name">— Jake L., Wellington, New
                            Zealand</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        @if(Session::has('error'))
        var flashMessage = "<?= Session::get('error') ?>";
        $("#error-message").html(flashMessage)
        $("#errorModal").modal('show');
        @endif
    })

</script>
@endsection

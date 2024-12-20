@extends('front_end.layout.main')
@section('title', 'My Profile')
@section('content')
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat banner_myProfile">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Homepage</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        My Profile
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Leagues Content Section Start -->
<section class="my-profile">
    <div class="container">
        <div class="mmy-profile-inner">
             @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                @if(Session::has('success'))
                    <span class="alert alert-success col-md-12 text-center profile-success">{{ Session::get('success')  }}</span>
                @endif
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">

                                <form action="{{ route('profile.update') }}" method="POST" class="mt-60 ">
                                   @csrf
                                       <div class="row">
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Name" class="form-control para" id="name"
                                            name="first_name" autocomplete="off" value="{{ Auth::user()->first_name }}">
                                            @error('first_name')
                                            <br>
                                            <span class="text-danger" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="User Name" class="form-control para"
                                            id="last-name" autocomplete="off" name="last_name" value="{{ Auth::user()->last_name }}">
                                            @error('last_name')
                                            <br>
                                            <span class="text-danger" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                            id="email" name="email" autocomplete="off" value="{{ Auth::user()->email }}">
                                            @error('email')
                                            <br>
                                            <span class="text-danger" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3 col-sm-6">
                                            <input type="text" placeholder="Telephone" class="form-control para"
                                            id="Phone" autocomplete="off" name="phone" value="{{ Auth::user()->phone  }}">
                                            @error('phone')
                                            <br>
                                            <span class="text-danger" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->


@endsection

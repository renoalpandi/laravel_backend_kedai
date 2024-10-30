@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">P, Reno!</h2>
                <p class="section-lead">

                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image"
                                    src="{{ asset('img/reno.jpeg') }}"
                                    class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Posts</div>
                                        <div class="profile-widget-item-value">1</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Followers</div>
                                        <div class="profile-widget-item-value">6,8M</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Following</div>
                                        <div class="profile-widget-item-value">1K</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name">reno alpandi <div
                                        class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> Web Developer
                                    </div>
                                </div>
                                nama saya reno  saya org <b>Indonesia</b>,saya orangnya baik hati,humoris,murah senyum dan pangmarah
                                <b>'Reno Alpandi'</b>.
                            </div>
                            <div class="card-footer text-center">
                                <div class="font-weight-bold mb-2">Follow reno Dong</div>
                                <div class="col-md-4 d-flex align-items-center">
                                <a href="#"
                                    class="btn btn-social-icon btn-facebook mr-1">
                                    <i class="fab fa-facebook-f"></i>
                                    <img src="./img/facebbok.jpeg" height="23px" />
                                </a>
                                <a href="#"
                                    class="btn btn-social-icon btn-twitter mr-1">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/twiter.jpeg" height="25px" />
                                </a>
                                <a href="#"
                                    class="btn btn-social-icon btn-github mr-1">
                                    <i class="fab fa-github"></i>
                                    <img src="./img/github.jpeg" height="25x" />
                                </a>
                                <a href="https://www.instagram.com/renzzayee?igsh=MWlsazd5Yng1OGd2aQ=="
                                    class="btn btn-social-icon btn-instagram">
                                    <i class="fab fa-instagram"></i>
                                    <img src="./img/ig.jpg" height="25px" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post"
                                class="needs-validation"
                                novalidate="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush

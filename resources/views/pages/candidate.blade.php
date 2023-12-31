@extends('pages.layout.app')
@section('content')
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Candidate</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb justify-content-center">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Candidate</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Team Area Wrapper ==-->
        <section class="team-area team-inner2-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/1.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Lauran Benitez</a></h4>
                                <h5 class="sub-title">Web Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech">
                            </div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/2.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Valentine Anders</a></h4>
                                <h5 class="sub-title">UI/UX Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">Bootstrap, CSS3, HTML5, Javascript, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech">
                            </div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/3.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Shakia Aguilera</a></h4>
                                <h5 class="sub-title">Web Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">Javascript, Bootstrap, Jquery, CSS3, HTML5</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech">
                            </div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/4.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Assunta Manson</a></h4>
                                <h5 class="sub-title">App. Developer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">HTML5, CSS3, Jquery, Javascript, Bootstrap</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech">
                            </div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png"
                                    alt="Image-HasTech"></div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/5.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">David Silva</a></h4>
                                <h5 class="sub-title">Web Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech">
                            </div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png"
                                    alt="Image-HasTech"></div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/6.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Jason Holt</a></h4>
                                <h5 class="sub-title">UI/UX Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech">
                            </div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png"
                                    alt="Image-HasTech"></div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/7.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Elnora Morton</a></h4>
                                <h5 class="sub-title">App. Developer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech">
                            </div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png"
                                    alt="Image-HasTech"></div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <!--== Start Team Item ==-->
                        <div class="team-item">
                            <div class="thumb">
                                <a href="{{ route('candidate-details') }}">
                                    <img src="assets/img/team/8.jpg" width="160" height="160" alt="Image-HasTech">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="{{ route('candidate-details') }}">Leona Spencer</a></h4>
                                <h5 class="sub-title">UI/UX Designer</h5>
                                <div class="rating-box">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div>
                                <p class="desc">CSS3, HTML5, Javascript Bootstrap, Jquery</p>
                                <a class="btn-theme btn-white btn-sm" href="{{ route('candidate-details') }}">View Profile</a>
                            </div>
                            <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech">
                            </div>
                            <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png"
                                    alt="Image-HasTech"></div>
                        </div>
                        <!--== End Team Item ==-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-area">
                            <nav>
                                <ul class="page-numbers d-inline-flex">
                                    <li>
                                        <a class="page-number active" href="{{ route('candidate') }}">1</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="{{ route('candidate') }}">2</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="{{ route('candidate') }}">3</a>
                                    </li>
                                    <li>
                                        <a class="page-number next" href="{{ route('candidate') }}">
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Team Area Wrapper ==-->
    </main>
@endsection

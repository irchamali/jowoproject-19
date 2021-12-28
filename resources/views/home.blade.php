@extends('layouts.main')

@section('container')
<main>
    <!-- slider area start -->
    <section class="slider__area p-relative">
        <div class="slider__wrapper swiper-container">
            <div class="swiper-wrapper">
                <div class="single-slider swiper-slide slider__height slider__overlay d-flex align-items-center"
                    data-background="frontend/img/slider/slider-4.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-9 col-sm-10">
                                <div class="slider__content">
                                    <span>Learn & Achieve</span>
                                    <h3 class="slider__title">Find the right Online <span class="yellow-bg">tutor
                                            <img src="frontend/img/shape/yellow-bg.png" alt=""> </span> for you.</h3>
                                    <p>Meet university,and cultural institutions, who'll share their experience.</p>
                                    <a href="about.html" class="e-btn slider__btn">Ready to get Started?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider swiper-slide slider__height slider__overlay d-flex align-items-center"
                    data-background="frontend/img/slider/slider-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-9 col-sm-10">
                                <div class="slider__content">
                                    <span>Learn & Achieve</span>
                                    <h3 class="slider__title">Fundamentals of music <span class="yellow-bg">theory
                                            <img src="frontend/img/shape/yellow-bg.png" alt=""> </span> Learn</h3>
                                    <p>Meet university,and cultural institutions, who'll share their experience.</p>
                                    <a href="about.html" class="e-btn slider__btn">Ready to get Started?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider swiper-slide slider__height slider__overlay d-flex align-items-center"
                    data-background="frontend/img/slider/slider-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-9 col-sm-10">
                                <div class="slider__content">
                                    <span>Learn & Achieve</span>
                                    <h3 class="slider__title">Become a product <span class="yellow-bg">Manager <img
                                                src="frontend/img/shape/yellow-bg.png" alt=""> </span> & learn.</h3>
                                    <p>Meet university,and cultural institutions, who'll share their experience.</p>
                                    <a href="about.html" class="e-btn slider__btn">Ready to get Started?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider swiper-slide slider__height slider__overlay d-flex align-items-center"
                    data-background="frontend/img/slider/slider-3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-9 col-sm-10">
                                <div class="slider__content">
                                    <span>Learn & Achieve</span>
                                    <h3 class="slider__title">Launch your <span class="yellow-bg">online <img
                                                src="frontend/img/shape/yellow-bg.png" alt=""> </span> learning
                                        Platform.</h3>
                                    <p>Meet university,and cultural institutions, who'll share their experience.</p>
                                    <a href="about.html" class="e-btn slider__btn">Ready to get Started?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container slider__nav d-none d-md-block">
            <div class="swiper-wrapper">
                <div class="slider__nav-item swiper-slide orange-bg"
                    data-background="frontend/img/slider/nav/slider-nav-4.jpg">
                    <div class="slider__nav-content">
                        <span>6 Courses</span>
                        <h4>Programming Languages</h4>
                    </div>
                </div>
                <div class="slider__nav-item swiper-slide blue-bg"
                    data-background="frontend/img/slider/nav/slider-nav-1.jpg">
                    <div class="slider__nav-content">
                        <span>4 Courses</span>
                        <h4>Idea Discussion</h4>
                    </div>
                </div>
                <div class="slider__nav-item swiper-slide pink-bg"
                    data-background="frontend/img/slider/nav/slider-nav-2.jpg">
                    <div class="slider__nav-content">
                        <span>8 Courses</span>
                        <h4>Web Development</h4>
                    </div>
                </div>
                <div class="slider__nav-item swiper-slide green-bg"
                    data-background="frontend/img/slider/nav/slider-nav-3.jpg">
                    <div class="slider__nav-content">
                        <span>8 Courses</span>
                        <h4>System Administration</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- about area start -->
    <section class="about__area pt-120 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6">
                    <div class="about__thumb-wrapper">

                        <div class="about__review">
                            <h5> <span>8,200+</span> five ster reviews</h5>
                        </div>
                        <div class="about__thumb ml-100">
                            <img src="frontend/img/about/about.jpg" alt="">
                        </div>
                        <div class="about__banner mt--210">
                            <img src="frontend/img/about/about-banner.jpg" alt="">
                        </div>
                        <div class="about__student ml-270 mt--80">
                            <a href="#">
                                <img src="frontend/img/about/student-4.jpg" alt="">
                                <img src="frontend/img/about/student-3.jpg" alt="">
                                <img src="frontend/img/about/student-2.jpg" alt="">
                                <img src="frontend/img/about/student-1.jpg" alt="">
                            </a>
                            <p>Join over <span>4,000+</span> students</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                            <h2 class="section__title">Achieve your <br><span class="yellow-bg-big">Goals <img
                                        src="frontend/img/shape/yellow-bg-2.png" alt=""></span> with Educal </h2>
                            <p>Lost the plot bobby such a fibber bleeding bits and bobs don't get shirty with me
                                bugger all mate chinwag super pukka william barney, horse play buggered.</p>
                        </div>
                        <div class="about__list mb-35">
                            <ul>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Upskill your
                                    organization.</li>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Access more then
                                    100K online courses</li>
                                <li class="d-flex align-items-center"> <i class="icon_check"></i> Learn the latest
                                    skills</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="e-btn e-btn-border">apply now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- brand area start -->
    <section class="brand__area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="brand__content text-center">
                        <h3 class="brand__title">Trusted by 100 world's best companies</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="brand__slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-1.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-2.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-3.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-4.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-5.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="frontend/img/brand/brand-6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="brand__more text-center">
                        <a href="about.html" class="link-btn">
                            View all partners
                            <i class="far fa-arrow-right"></i>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand area end -->

    <!-- course area start -->
    <section class="course__area grey-bg pt-115 pb-120">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                    <div class="section__title-wrapper mb-60">
                        <h2 class="section__title">Online<span class="yellow-bg"> Courses <img
                                    src="frontend/img/shape/yellow-bg-2.png" alt=""> </span> <br> For anyone, anywhere
                        </h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4">
                    <div class="category__more mb-60 float-md-end fix">
                        <a href="course-grid.html" class="link-btn">
                            View All Courses
                            <i class="far fa-arrow-right"></i>
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="course__item course__item-2 white-bg mb-30 transition-3">
                        <div class="course__thumb fix w-img">
                            <a href="course-details.html">
                                <img src="frontend/img/course/home-3/course-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="course__content-2">
                            <h3 class="course__title-2"><a href="course-details.html">Product Manager Learn the
                                    Skills & job.</a></h3>
                            <p>Top instructors from around the world teach millions of students on Quillow. Get
                                unlimited.</p>
                            <div class="course__bottom d-sm-flex justify-content-between align-items-center">
                                <div class="course__teacher-2 d-flex align-items-center">
                                    <div class="course__teacher-thumb-2 mr-20">
                                        <img src="frontend/img/course/teacher/home-3/teacher-1.jpg" alt="">
                                        <div class="course__teacher-rating">
                                            <i class="icon_star"></i>
                                        </div>
                                    </div>
                                    <div class="course__teacher-info">
                                        <h6><a href="instructor-details.html">Jim Séchen</a></h6>
                                        <span>Product Designer</span>
                                    </div>
                                </div>
                                <div class="course__meta">
                                    <div class="course__lesson">
                                        <span><i class="far fa-book-alt"></i>43 Lesson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="course__item course__item-2 white-bg mb-30 transition-3">
                        <div class="course__thumb fix w-img">
                            <a href="course-details.html">
                                <img src="frontend/img/course/home-3/course-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="course__content-2">
                            <h3 class="course__title-2"><a href="course-details.html">The Importance Of Intrinsic
                                    for Students.</a></h3>
                            <p>Top instructors from around the world teach millions of students on Quillow. Get
                                unlimited.</p>
                            <div class="course__bottom d-sm-flex justify-content-between align-items-center">
                                <div class="course__teacher-2 d-flex align-items-center">
                                    <div class="course__teacher-thumb-2 mr-20">
                                        <img src="frontend/img/course/teacher/home-3/teacher-2.jpg" alt="">
                                        <div class="course__teacher-rating">
                                            <i class="icon_star"></i>
                                        </div>
                                    </div>
                                    <div class="course__teacher-info">
                                        <h6><a href="instructor-details.html">Craig Weber</a></h6>
                                        <span>UX Designer</span>
                                    </div>
                                </div>
                                <div class="course__meta">
                                    <div class="course__lesson">
                                        <span><i class="far fa-book-alt"></i>30 Lesson</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course area end -->

    <!-- teacher area start -->
    <section class="teacher__area pt-115 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3">
                    <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Our Most <br>
                            Popular <span class="yellow-bg"> Teachers <img src="frontend/img/shape/yellow-bg-2.png"
                                    alt=""> </span> <br>
                        </h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="frontend/img/teacher/teacger-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title"><a href="instructor-details.html">Lillian Walsh,</a></h3>
                            <span> CO Founder</span>

                            <div class="teacher__social">
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="frontend/img/teacher/teacher-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title"><a href="instructor-details.html">Kelly Franklin,</a></h3>
                            <span>Desginer</span>

                            <div class="teacher__social">
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                        <div class="teacher__thumb w-img fix">
                            <a href="#">
                                <img src="frontend/img/teacher/teacher-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="teacher__content">
                            <h3 class="teacher__title"><a href="instructor-details.html">Hilary Ouse,</a></h3>
                            <span>Markater</span>

                            <div class="teacher__social">
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="teacher__more text-center mt-30">
                        <a href="contact.html" class="e-btn e-btn-border e-btn-5">Become an Instructor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teacher area end -->

    <!-- cta area start -->
    <section class="cta__area pb-150">
        <div class="container">
            <div class="cta__inner-3 p-relative grey-bg-2 pt-75 pb-75 fix">
                <div class="cta__shape-3">
                    <img class="cta-2" src="frontend/img/cta/cta-shape-1.png" alt="">
                    <img class="cta-3" src="frontend/img/cta/cta-shape-2.png" alt="">
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__content text-center p-relative">
                            <span>Coming June</span>
                            <h3 class="cta__title-2">Built to stand out.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="cta__form grey-bg-2">
                            <div class="cta__form-inner">
                                <form action="#">
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email">
                                    <button type="submit" class="e-btn e-btn-6">Take A Free Course</button>
                                </form>
                            </div>
                            <div class="cta__agree d-flex align-items-center">
                                <input class="e-check-input" type="checkbox" id="e-agree">
                                <label class="e-check-label" for="e-agree">By signing up you agree to our <a href="#">
                                        Terms & Conditions</a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area start -->

    <!-- testimonial area start -->
    <section class="testimonial__area pt-145 pb-150"
        data-background="frontend/img/testimonial/home-3/testimonial-bg-3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                    <div class="testimonial__slider-3">
                        <h3 class="testimonial__title">Student <br> Community Feedback</h3>
                        <div class="testimonial__slider-wrapper swiper-container testimonial-text mb-35">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had
                                            improved to very advanced levels. While I am studying at my university,
                                            I design as an additional
                                            income and I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>James Lee,</h4>
                                            <span>Student @Educal University</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had
                                            improved to very advanced levels. While I am studying at my university,
                                            I design as an additional
                                            income and I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>James Lee,</h4>
                                            <span>Student @Educal University</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had
                                            improved to very advanced levels. While I am studying at my university,
                                            I design as an additional
                                            income and I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>James Lee,</h4>
                                            <span>Student @Educal University</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-3">
                                        <p>“After I started learning design with Quillow, I realized that I had
                                            improved to very advanced levels. While I am studying at my university,
                                            I design as an additional
                                            income and I am sure that I will do this professionally.”</p>

                                        <div class="testimonial__info-2">
                                            <h4>James Lee,</h4>
                                            <span>Student @Educal University</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container testimonial-nav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="frontend/img/testimonial/home-3/testi-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="frontend/img/testimonial/home-3/testi-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="frontend/img/testimonial/home-3/testi-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__nav-thumb">
                                        <img src="frontend/img/testimonial/home-3/testi-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10">
                    <div class="testimonial__video ml-70 fix">
                        <div class="testimonial__thumb-3">
                            <iframe src="https://www.youtube.com/embed/Rr0uFzAOQus" title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                        </div>
                        <div class="testimonial__video-content d-sm-flex">
                            <div class="testimonial__video-icon mr-20 mb-20">
                                <span>
                                    <svg version="1.1" id="educal-youtube" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                        style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                        <path class="st0"
                                            d="M22,11.1V12c0,5.5-4.5,10-10,10C6.5,22,2,17.5,2,12C2,6.5,6.5,2,12,2c1.4,0,2.8,0.3,4.1,0.9" />
                                        <polyline class="st0" points="22,4 12,14 9,11 " />
                                    </svg>
                                </span>
                            </div>
                            <div class="testimonial__video-text">
                                <h4>Course Outcome</h4>
                                <p>Faff about A bit of how's your father getmate cack codswallop crikey argy-bargy
                                    cobblers lost his bottle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->

    <!-- why area start -->
    <section class="why__area pt-125">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                    <div class="why__content pr-50 mt-40">
                        <div class="section__title-wrapper mb-30">
                            <span class="section__sub-title">Why Choses Me</span>
                            <h2 class="section__title">Tools for <span class="yellow-bg yellow-bg-big">Teachers<img
                                        src="frontend/img/shape/yellow-bg.png" alt=""></span> and Learners</h2>
                            <p>Oxford chimney pot Eaton faff about blower blatant brilliant, bubble and squeak he
                                legged it Charles bonnet arse at public school bamboozled.</p>
                        </div>
                        <div class="why__btn">
                            <a href="contact.html" class="e-btn e-btn-3 mr-30">Join for Free</a>
                            <a href="about.html" class="link-btn">
                                Learn More
                                <i class="far fa-arrow-right"></i>
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8">
                    <div class="why__thumb">
                        <img src="frontend/img/why/why.png" alt="">
                        <img class="why-green" src="frontend/img/why/why-shape-green.png" alt="">
                        <img class="why-pink" src="frontend/img/why/why-shape-pink.png" alt="">
                        <img class="why-dot" src="frontend/img/why/why-shape-dot.png" alt="">
                        <img class="why-line" src="frontend/img/why/why-shape-line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why area end -->


    <!-- blog area start -->
    <section class="blog__area pt-115 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 offset-xxl-3">
                    <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">We share <br>
                            Our <span class="yellow-bg yellow-bg-big">thoughts <img src="frontend/img/shape/yellow-bg.png"
                                    alt=""></span>on design</h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                            <a href="blog-details.html">
                                <img src="frontend/img/blog/blog-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content">
                            <div class="blog__tag">
                                <a href="#">Art & Design</a>
                            </div>
                            <h3 class="blog__title"><a href="blog-details.html">The Challenge Of Global Learning In
                                    Public Education</a></h3>

                            <div class="blog__meta d-flex align-items-center justify-content-between">
                                <div class="blog__author d-flex align-items-center">
                                    <div class="blog__author-thumb mr-10">
                                        <img src="frontend/img/blog/author/author-1.jpg" alt="">
                                    </div>
                                    <div class="blog__author-info">
                                        <h5>Jim Séchen</h5>
                                    </div>
                                </div>
                                <div class="blog__date d-flex align-items-center">
                                    <i class="fal fa-clock"></i>
                                    <span>April 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                            <a href="blog-details.html">
                                <img src="frontend/img/blog/blog-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content">
                            <div class="blog__tag">
                                <a href="#" class="purple">Marketing</a>
                            </div>
                            <h3 class="blog__title"><a href="blog-details.html">Exactly How Technology Can Make
                                    Reading Better</a></h3>

                            <div class="blog__meta d-flex align-items-center justify-content-between">
                                <div class="blog__author d-flex align-items-center">
                                    <div class="blog__author-thumb mr-10">
                                        <img src="frontend/img/blog/author/author-2.jpg" alt="">
                                    </div>
                                    <div class="blog__author-info">
                                        <h5>Barry Tone</h5>
                                    </div>
                                </div>
                                <div class="blog__date d-flex align-items-center">
                                    <i class="fal fa-clock"></i>
                                    <span>July 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                            <a href="blog-details.html">
                                <img src="frontend/img/blog/blog-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content">
                            <div class="blog__tag">
                                <a href="#" class="pink">UX Design</a>
                            </div>
                            <h3 class="blog__title"><a href="blog-details.html">New Chicago school budget relies on
                                    state pension</a></h3>

                            <div class="blog__meta d-flex align-items-center justify-content-between">
                                <div class="blog__author d-flex align-items-center">
                                    <div class="blog__author-thumb mr-10">
                                        <img src="frontend/img/blog/author/author-3.jpg" alt="">
                                    </div>
                                    <div class="blog__author-info">
                                        <h5>Barry Tone</h5>
                                    </div>
                                </div>
                                <div class="blog__date d-flex align-items-center">
                                    <i class="fal fa-clock"></i>
                                    <span>July 02, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end -->

</main>
@endsection

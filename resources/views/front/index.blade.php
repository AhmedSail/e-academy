@extends('front.app')

@section('title', 'Homepage')

@section('content')
    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-2 bg_cover" style="background-image: url({{ asset('images/slider/s-1.jpg') }}"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">More than 5,000+ courses for develop your skill
                            </h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider slider-2 bg_cover" style="background-image: url({{ asset('images/slider/s-3.jpg') }})"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">More than 5,000+ courses for develop your
                                skill</h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider slider-2 bg_cover" style="background-image: url({{ asset('images/slider/s-1.jpg') }})"
            data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-10">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">More than 5,000+ courses for develop your
                                skill</h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->


    <!--====== CATEGORY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                {{-- @foreach ($courses as $course)
                    <div class="col-lg-4">
                        <div class="singel-course-2">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('images/' . $course->image) }}" alt="Course">
                                </div>
                                <div class="price">
                                    <span>${{ $course->price }}</span>
                                </div>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="courses-singel.html"><img width="50" height="50"
                                                style="object-fit: cover"
                                                src="{{ asset('images/' . $course->teacher->image) }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="{{ route('teacher', $course->teacher_id) }}">
                                            <h6>{{ $course->teacher->name }}</h6>
                                        </a>
                                    </div>
                                    <div class="review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cont">
                                <a href="{{ route('course', $course->id) }}">
                                    <h4>{{ $course->{'name_' . app()->currentLocale()} }}</h4>
                                </a>
                            </div>
                        </div> <!-- singel course -->
                    </div>
                @endforeach --}}
                @foreach ($courses as $course)
                    <div class="col-md-4">
                        <div class="singel-course-2">
                            <div class="thum">
                                <div class="image">
                                    <img src="{{ asset('uploads/course/' . $course->image) }}" alt="">
                                </div>
                                <div class="price">
                                    <span>${{ $course->price}}</span>
                                </div>
                                <div class="course-teacher">
                                    <div class="thum">
                                        <a href="{{ route('course',$course->id) }}"><img width="50" height="50"
                                                style="object-fit: cover"
                                                src="{{ asset('uploads/teacher/'.$course->teacher->image) }}" alt="teacher"></a>
                                    </div>
                                    <div class="name">
                                        <a href="{{ route('teacher',$course->teacher_id) }}">
                                            <h6>{{ $course->teacher->name }}</h6>
                                        </a>
                                    </div>
                                    <div class="review">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="cont">
                                <h4>{{ $course->{'name_' . app()->currentLocale()} }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>

    <!--====== COURSE PART ENDS ======-->

    <!--====== COUNTER PART START ======-->

    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8"
        style="background-image: url({{ asset('images/bg-2.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">{{ $s_count }}</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">{{ $c_count }}</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">{{ $t_count }}</span>+</span>
                        <p>Teacher Count</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== COUNTER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-65 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-50 pb-25">
                        <h5>Top Tutors</h5>
                        <h2>Featured Teachers</h2>
                    </div> <!-- section title -->
                    <div class="teachers-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="{{ asset('images/teachers/teacher-2/tc-1.jpg') }}" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php">
                                            <h5>Mark anthem</h5>
                                        </a>
                                        <p>JAVA Expert</p>
                                        <span><i class="fa fa-book"></i>10 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="{{ asset('images/teachers/teacher-2/tc-2.jpg') }}" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php">
                                            <h5>Hellen Mark</h5>
                                        </a>
                                        <p>Laravel Expert</p>
                                        <span><i class="fa fa-book"></i>05 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="{{ asset('images/teachers/teacher-2/tc-1.jpg') }}" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php">
                                            <h5>Maria Noor</h5>
                                        </a>
                                        <p>JAVA Expert</p>
                                        <span><i class="fa fa-book"></i>10 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="{{ asset('images/teachers/teacher-2/tc-1.jpg') }}" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-singel.php">
                                            <h5>Alan hen</h5>
                                        </a>
                                        <p>Laravel Expert</p>
                                        <span><i class="fa fa-book"></i>05 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers 2 -->
                </div>
                <div class="col-lg-6 ">
                    <div class="happy-student mt-55">
                        <div class="happy-title">
                            <h3>Happy Students</h3>
                        </div>
                        <div class="student-slied">
                            <div class="singel-student">
                                <img src="{{ asset('images/teachers/teacher-2/quote.png') }}" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis
                                    sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->

                            <div class="singel-student">
                                <img src="{{ asset('images/teachers/teacher-2/quote.png') }}" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis
                                    sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->

                            <div class="singel-student">
                                <img src="{{ asset('images/teachers/teacher-2/quote.png') }}" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis
                                    sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->
                        </div> <!-- student slied -->
                        <div class="student-image">
                            <img src="{{ asset('images/teachers/teacher-2/happy.png') }}" alt="Image">
                        </div>
                    </div> <!-- happy student -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== EVENT 2 PART START ======-->

    <section id="event-part" class="pt-120">
        <div class="container">
            <div class="event-bg bg_cover" style="background-image: url({{ asset('images/bg-3.jpg') }})">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming events</h3>
                            </div> <!-- event title -->
                            <ul>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.html">
                                            <h4>Campus clean workshop</h4>
                                        </a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.html">
                                            <h4>Tech Summit</h4>
                                        </a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="events-singel.html">
                                            <h4>Enviroement conference</h4>
                                        </a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- event 2 -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>

    <!--====== EVENT 2 PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="{{ asset('images/news/n-1.jpg') }}" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><i class="fa fa-calendar"></i>2 December 2018 </li>
                                <li><span>By</span> Adam linn</li>
                            </ul>
                            <a href="blog-singel.php">
                                <h3>Tips to grade high cgpa in university life</h3>
                            </a>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons
                                equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                                mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{ asset('images/news/ns-1.jpg') }}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>2 December 2018</li>
                                        <li><span>By</span> Adam linn</li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Intellectual communication</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{ asset('images/news/ns-2.jpg') }}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>2 December 2018</li>
                                        <li><span>By</span> Adam linn</li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Study makes you perfect</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{ asset('images/news/ns-3.jpg') }}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>2 December 2018</li>
                                        <li><span>By</span> Adam linn</li>
                                    </ul>
                                    <a href="blog-singel.php">
                                        <h3>Technology edcution is now....</h3>
                                    </a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons vel.
                                    </p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NEWS PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-1.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-2.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-3.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-4.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-2.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="{{ asset('images/patnar-logo/p-3.png') }}" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->
@endsection

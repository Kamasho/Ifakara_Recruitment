{{-- <!DOCTYPE html>
<html>

<head>
    @include('user.include.head')

</head>

<body>
    <div class="container my-3">
        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">

            @include('layouts.welcome.header')

            <div class="card-body">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <p style="text-align:justify"> Applicants for Employment Opportunities are required to <b>update</b> your
                        information using the number The National Identity of <b>NIN</b>, in the <b>Personal Details</b> area, you
                        also need to update information on the area of <b>Academic Qualification</b> by placing your course in
                        the relevant category. To see the <b>STATUS</b> of your job application, enter the <b>MY APPLICATION</b>
                        section after <b>Login</b> to your account. This section will allow you to see the number of
                        interviews for those They were successful and the reason for not being called for by those who
                        have not succeeded.</p>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2 text-center">
                        <p>Mwongozo wa Matumizi ya Mfumo wa Maombi ya Kazi Ifakara Dioceses Recruitment Portal User
                            Guide v 1.0 <a href="#">Here</a></p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <p style="color: red;">Malalamiko: +255736005511, +255679398259, Email:
                            malalamiko@ifakaradioceses.go.tz</p>
                    </div>
                </div>

                <div class="row justify-content-center mt-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card"
                            style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                            <div class="card-header text-center">
                                <h2 style="font-family: 'Times New Roman', Times, serif">Job Posts By Categories</h2>
                            </div>

                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Accounting and Auditing (5)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">IT and Telecoms (5)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Taxation and Social Protection (0)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Tourism and Travel (0)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Legal (0)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Banking, Economics and Financial Services (4)</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Physical & Natural Sciences (0)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Linguistics (0)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Trades and Services (3)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Water, Mining and Natural Resources (2)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">Healthcare and Pharmaceutical (3)</a></li>
                                            </ul>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <ul>
                                                <li><a href="{{ route('viewjob') }}">HR & Administration (7)</a></li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <hr class="hr hr-blurry">

                <div class="row mt-4">
                    <div class="col-lg-7 col-md-7 col-sm-7 mt-3">
                        <div class="card" style="height: 245px;">
                            <div class="card-body">
                                <div id="exTab2">
                                    <ul class="nav nav-tabs nav-fill">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#1" aria-current="page"
                                                data-toggle="tab">How Do I</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#2"
                                                data-toggle="tab">Tips</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="#3"
                                                data-toggle="tab">Resources</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                            <ul
                                                style="list-style: lower-roman; font-family:'Times New Roman', Times, serif; font-size:medium;">
                                                <li><a href="{{ route('howtoapplyjob') }}">Apply for Jobs</a></li>
                                                <li><a href="{{ route('howtoapplyjob') }}">Subscribe to Job Alerts</a>
                                                </li>
                                                <li><a href="{{ route('howtoapplyjob') }}">Write a good CV</a></li>
                                                <li><a href="{{ route('howtoapplyjob') }}">Write a Cover letter</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="2">
                                            <ul style="font-family:'Times New Roman', Times, serif; font-size:medium;">
                                                <li><a href="{{ route('interview') }}">Get prepared for the
                                                        Interview</a></li>
                                                <li><a href="{{ route('interview') }}">How to take the stress out of job interview</a>
                                                </li>
                                                <li><a href="{{ route('interview') }}">Practice your answers</a></li>
                                                <li><a href="{{ route('interview') }}">Look the part</a></li>
                                                <li><a href="{{ route('interview') }}">Interview Attire</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="3">
                                            <ul style="font-family:'Times New Roman', Times, serif; font-size:medium;">
                                                <li><a href="#">Download: User Manual</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 mt-3">
                        <div class="card">

                            <div class="card-body">
                                <div class="card-header text-center text-black fw-bold">
                                    Application
                                    General Condition
                                </div>
                                <ul>
                                    <li>All applicants must be Citizens of Tanzania.</li>
                                    <li>Applicants must attach their detailed relevant certified copies of Academic
                                        certificates.</li>
                                    <li>Applicants should apply on the strength of the information given in the
                                        advertisement.</li>
                                    <a href="{{ route('generalinformation') }}">Read More</a>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            @include('layouts.welcome.footer') --}}

        @include('layouts.welcome.header')


        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('{{ asset('web/img/cover_img.png') }}');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <h1 data-aos="fade-up" data-aos-delay="100" style="font-weight: bold;">IFAKARA DIOCESE PORTAL</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">With the aim of
                                        improving
                                        perfomance and staffs workign in a digital world as diocese.</p>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#"
                                            class="btn  py-3 px-5 btn-pill" style="background-color: #001D23; color:#FF6F0F;">Register to apply Job</a></p>

                                </div>
                                <div class="col-lg-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                                    <div class="py-1" style="background-color: #fff; border-radius:10px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
                                        <form  action="{{ route('login') }}" method="post" class="form-box">
                                            @csrf
                                            <h3 class="h4 text-black text-center" style="font-weight: 900;">Login Here
                                            </h3>
                                            <div class="mt-5">
                                                <div class="form-group">
                                                    <label for="email" style="font-size: 15px;">{{ __('Email Address') }}</label>
                                                    <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                                        placeholder="Enter your email addresss" required name="email">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" style="font-size: 15px">{{ __('Password') }}</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="Enter  your password" name="password" required>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-check">
                                                   
                                                    <label class="form-check-label" for="flexCheckDefault" style="font-size: 15px">
                                                        <input class="form-check-input mt-1" name="remember" type="checkbox" value=""  id="flexCheckDefault"   {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                                                    </label>
                                                </div>

                                            </div>

                                            <button class="btn btn-primary btn-block btn-pill mt-3" type="submit">{{ __('Login') }}</button>
                                        </form>
                                        <div class="mt-1" style="">
                                            <p class="text-center">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" style="font-size: 13px; font-weight:600;"> {{ __('Forgot Your Password?') }}</a>
                                                @endif
                                                </p>
                                            <p class="text-center" style="color: #000">Don't have an account? <a
                                                    href="{{ route('register') }}" style="font-size: 13px; font-weight:600">Register
                                                    here</a></p>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="site-section courses-title" id="courses-section" style="background-color: #fff">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title" style="color: #000">Vacancies Categories</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            {{-- <figure class="m-0">
                                <a href="course-single.html"><img src="{{asset('web/images/img_1.jpg')}}" alt="Image"
                                        class="img-fluid"></a>
                            </figure> --}}
                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">1</span>
                                <div class="meta"><span class="icon-clock-o"></span><b class="text-success">
                                        2023-09-12</b> | <b class="text-success">Open</b></div>
                                <h3><a href="#" style="color: #FF6F0F">Accounting and Auditing</a></h3>
                                <p>Required for the accountant .. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-sign-in"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            {{-- <figure class="m-0">
                                <a href="course-single.html"><img src="{{asset('web/images/img_2.jpg')}}" alt="Image"
                                        class="img-fluid"></a>
                            </figure> --}}
                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">1</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">IT and Telecoms</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                            {{-- <figure class="m-0">
                                <a href="course-single.html"><img src="{{asset('web/images/img_3.jpg')}}" alt="Image"
                                        class="img-fluid"></a>
                            </figure> --}}
                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">9</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">Healthcare and Pharmaceutical </a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">2</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#" style="color: #FF6F0F; font-weight:700">HR & Administration</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">10</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#"  style="color: #FF6F0F; font-weight:700">Socaials Studys and Arts</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="course bg-white h-100 align-self-stretch"
                            style=" box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

                            <div class="course-inner-text py-4 px-4">
                                <span class="course-price">9</span>
                                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                                <h3><a href="#" style="color: #FF6F0F; font-weight:700">Science Studies and Technincian</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4" style="color: #FF6F0F; font-weight:600"><span class="icon-sign-in"></span> Apply Now</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chart"></span> 2
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        {{-- <div class="site-section" id="programs-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Our Programs</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque!
                            Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas
                            quibusdam ullam, illum sed veniam!</p>
                    </div>
                </div>
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">We Are Excellent In Education</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro
                            possimus fugiat quo molestiae illo.</p>

                        <div class="d-flex align-items-center custom-icon-wrap mb-3">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                            <div>
                                <h3 class="m-0">22,931 Yearly Graduates</h3>
                            </div>
                        </div>

                        <div class="d-flex align-items-center custom-icon-wrap">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                            <div>
                                <h3 class="m-0">150 Universities Worldwide</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Strive for Excellent</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro
                            possimus fugiat quo molestiae illo.</p>

                        <div class="d-flex align-items-center custom-icon-wrap mb-3">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                            <div>
                                <h3 class="m-0">22,931 Yearly Graduates</h3>
                            </div>
                        </div>

                        <div class="d-flex align-items-center custom-icon-wrap">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                            <div>
                                <h3 class="m-0">150 Universities Worldwide</h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Education is life</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro
                            possimus fugiat quo molestiae illo.</p>

                        <div class="d-flex align-items-center custom-icon-wrap mb-3">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
                            <div>
                                <h3 class="m-0">22,931 Yearly Graduates</h3>
                            </div>
                        </div>

                        <div class="d-flex align-items-center custom-icon-wrap">
                            <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
                            <div>
                                <h3 class="m-0">150 Universities Worldwide</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="site-section" id="teachers-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Our Teachers</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut
                            neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in
                            quas quibusdam ullam, illum sed veniam!</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="teacher text-center">
                            <img src="images/person_1.jpg" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Benjamin Stone</h3>
                                <p class="position">Physics Teacher</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit
                                    delectus enim iusto tempora, adipisci at provident.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="teacher text-center">
                            <img src="images/person_2.jpg" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Katleen Stone</h3>
                                <p class="position">Physics Teacher</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit
                                    delectus enim iusto tempora, adipisci at provident.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="teacher text-center">
                            <img src="images/person_3.jpg" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Sadie White</h3>
                                <p class="position">Physics Teacher</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit
                                    delectus enim iusto tempora, adipisci at provident.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 text-center testimony">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                        <h3 class="mb-4">Jerome Jensen</h3>
                        <blockquote>
                            <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit
                                eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo
                                provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section pb-0">

            <div class="future-blobs">
                <div class="blob_2">
                    <img src="images/blob_2.svg" alt="Image">
                </div>
                <div class="blob_1">
                    <img src="images/blob_1.svg" alt="Image">
                </div>
            </div>
            <div class="container">
                <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
                    <div class="col-lg-7 text-center">
                        <h2 class="section-title">Why Choose Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">

                        <div class="p-4 rounded bg-white why-choose-us-box">

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-graduation-cap"></span></span></div>
                                <div>
                                    <h3 class="m-0">22,931 Yearly Graduates</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-university"></span></span></div>
                                <div>
                                    <h3 class="m-0">150 Universities Worldwide</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-graduation-cap"></span></span></div>
                                <div>
                                    <h3 class="m-0">Top Professionals in The World</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-university"></span></span></div>
                                <div>
                                    <h3 class="m-0">Expand Your Knowledge</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-graduation-cap"></span></span></div>
                                <div>
                                    <h3 class="m-0">Best Online Teaching Assistant Courses</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                                <div class="mr-3"><span class="custom-icon-inner"><span
                                            class="icon icon-university"></span></span></div>
                                <div>
                                    <h3 class="m-0">Best Teachers</h3>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
                        <img src="images/person_transparent.png" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> --}}


      @include('layouts.welcome.footer')


  
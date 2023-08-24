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


<!DOCTYPE html>
<html lang="en">

<head>
    <title>ICD | PORTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('web/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">

    <style>
        /* html,
        body * {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif
        }

        body {
            background: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwcNDQ0NBw0HBwgNBw0HDQcHBw8ICQcNFREWFhURExUYHSggGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0NDisZFRkrNysrKystKysrKy0rKzcrKy0tKysrKysrKy0tKy0tKysrKysrKysrKysrKysrKysrK//AABEIALwBDAMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAABAgAGB//EABYQAQEBAAAAAAAAAAAAAAAAAAABEf/EABkBAQEBAQEBAAAAAAAAAAAAAAIBBgUAA//EABURAQEAAAAAAAAAAAAAAAAAAAAB/9oADAMBAAIRAxEAPwDzxmZtnzZmLzzQsRKGGCKiUoYY0VBONDGInDC0MGlDDGioNONDGkVBpRoYyohRoqCKgnGioIqDTjGNDBOQxUEVBpRoqCKgnI0VBFQacMLESjkWZncZllQQosJjQwThhjQwaUMUIqIcaKgihKNDGhg04YYyoNKNFQRQnGioFQaUjKgioNONCxgnIYqCKiUo0VGMGnGio0I05DDGhg04YWhEpHHkKjuMuxYxDhhjQwaUMVBFDTjKgioJyNDGioNKNFQQwacMVBFRCjKgioJRoqCKgnGioFQacjQxoqCcaKjSEaUaKgioJyNFSNDBpwwxoUKQwscE446KgLuMvDDGiolONDGipBpRoYyhORooRUGlGioIoacZUEVBpRoqCKgnGioIqDSjRUaFKcaKgioJyNFQRUGlIYY0ME4YY0hg04YY0VBONFQQwaUMUIoTkcaYxjusvDIY0VBpRooRUE40VBFRKcaKgioJRoqCKg040VBFQSjRUEUNORoqNIYJRoqBUE5GioIqJThhjQhSkMMaFKchioIqCcaKEVBONFQRUGlGVgihOONioIqO7WXjRUEUJRoqCKg05GVBFQaUaKEVBONFRoRKNFRoYlOGGNDBpQwxjBORoqCKgnGkVGhg05CY0MGlIYqCKg040VBFQTjRUEVINKNFMYNOGERSHHGxUEVHcrLQwwRUQ5GigqDTjKgihKNFQSKgnDDGhEoYWhgnDDGI0o0VBFRDkMMjQwachMaGCUhhjRUGnGioIqCcaKEVBpxoqNDBpSNFRoYJyGFpChyONimhjuMtGioIqCcaKEVBpRoqCKiU4YY0MEoYY0MGnIYY0MEoTGhgnIYY0MGnDDGhgnDDGiolKRoqCKgHGioFRKcaKjSGDSkJgioJyGGNDBpyGFiJyONio0Md1loyoIqDSjRTQwacMMaGCUMLQxKchMaGCcMMaGDSkaKjQyCcMVBFQacjQxoqCcjRUEVBpRoqCKgnI0VBFSDThkLGCUhMaGIcMLQwachhaQicjjoYxjustI0VBFDSjRUaGCcMMaGCUMMYwacMLQjSkMMaGCchioIqJTkZUgioJyNFQRUGlGioIqCcjRUEVBpwwxoYNOQwxoYJQxUEihpyNDGipBpyNDjRSHI42GNDHcZWGGNDBpwwxjEKGGNDBOQxUEMEoTGME5DDI0VBpxooKgnI0VBFQacjSKgioJSNFRoYlORoqNCNOQmRoYJSGKkEVBpyNDGVBpyNIoKg05GihFYJyONhEVHdrKwwxoYNOGGNDBpQqkEMSnDCxg0oYZGME4YoQwacMVBFQacaKgioNKGGCKgnGipAqCcMMYwacMMaGDShioClOGKgioNONFQRUE40UIoSkf/Z) no-repeat center center fixed;
            background-size: cover
        } */

        .container {
            width: 100%;
            padding-top: 60px;
            padding-bottom: 100px
        }

        .frame {
            height: 600px;
            width: 420px;
            /* background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS82mL0lCjn8cUhnzzoE1oYnjPkobX4USGFXw&usqp=CAU) no-repeat center center; */
            background-size: cover;
            margin-left: auto;
            margin-right: auto;
            border-top: solid 1px rgba(255, 255, 255, .5);
            border-radius: 5px;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: all .5s ease
        }

        .frame-long {
            height: 615px
        }

        .frame-short {
            height: 400px;
            margin-top: 50px;
            box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.1)
        }

        .nav {
            width: 100%;
            height: 100px;
            padding-top: 40px;
            opacity: 1;
            transition: all .5s ease
        }

        .nav-up {
            transform: translateY(-100px);
            opacity: 0
        }

        li {
            padding-left: 10px;
            font-size: 18px;
            display: inline;
            text-align: left;
            text-transform: uppercase;
            padding-right: 10px;
            color: #000000
        }

        .signin-active a {
            padding-bottom: 10px;
            color: #000000;
            text-decoration: none;
            border-bottom: solid 2px #1059FF;
            transition: all .25s ease;
            cursor: pointer
        }

        .signin-inactive a {
            padding-bottom: 0;
            color: rgba(255, 255, 255, .3);
            text-decoration: none;
            border-bottom: none;
            cursor: pointer
        }

        .signup-active a {
            cursor: pointer;
            color: #000000;
            text-decoration: none;
            border-bottom: solid 1px #1059FF;
            padding-bottom: 10px
        }

        .signup-inactive a {
            cursor: pointer;
            color: rgba(255, 255, 255, .3);
            text-decoration: none;
            transition: all .25s ease
        }

        .form-signin {
            width: 430px;
            height: 375px;
            font-size: 16px;
            font-weight: 300;
            padding-left: 37px;
            padding-right: 37px;
            padding-top: 55px;
            transition: opacity .5s ease, transform .5s ease
        }

        .form-signin-left {
            transform: translateX(-400px);
            opacity: .0
        }

        .form-signup {
            width: 430px;
            height: 375px;
            font-size: 12px;
            font-weight: 300;
            padding-left: 37px;
            padding-right: 37px;
            padding-top: 55px;
            position: relative;
            top: -375px;
            left: 400px;
            opacity: 0;
            transition: all .5s ease
        }

        .form-signup-left {
            transform: translateX(-399px);
            opacity: 1
        }

        .form-signup-down {
            top: 0px;
            opacity: 0
        }

        .success {
            width: 80%;
            height: 150px;
            text-align: center;
            position: relative;
            top: -890px;
            left: 450px;
            opacity: .0;
            transition: all .8s .4s ease
        }

        .success-left {
            transform: translateX(-406px);
            opacity: 1
        }

        .successtext {
            color: #040303;
            font-size: 16px;
            font-weight: 300;
            margin-top: -35px;
            padding-left: 37px;
            padding-right: 37px
        }

        #check path {
            stroke: #000000;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: .85px;
            stroke-dasharray: 60px 300px;
            stroke-dashoffset: -166px;
            fill: rgba(255, 255, 255, .0);
            transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s
        }

        #check.checked path {
            stroke-dashoffset: 33px;
            fill: rgba(255, 255, 255, .03)
        }

        .form-signin input,
        .form-signup input {
            color: #000000;
            font-size: 13px
        }

        .form-styling {
            width: 100%;
            height: 35px;
            padding-left: 15px;
            border-color:#000;
            border-radius: 20px;
            margin-bottom: 20px;
            background-color: #e7e7e7;
        }

        label {
            font-weight: 400;
            text-transform: uppercase;
            font-size: 13px;
            padding-left: 15px;
            padding-bottom: 10px;
            color: rgba(255, 255, 255, .7);
            display: block
        }

        :focus {
            outline: none
        }

        .form-signin input:focus,
        textarea:focus,
        .form-signup input:focus,
        textarea:focus {
            background: rgba(255, 255, 255, .3);
            border: none;
            padding-right: 40px;
            transition: 0.5s ease
        }

        [type="checkbox"]:not(:checked),
        [type="checkbox"]:checked {
            position: absolute;
            display: none
        }

        [type="checkbox"]:not(:checked)+label,
        [type="checkbox"]:checked+label {
            position: relative;
            padding-left: 85px;
            padding-top: 2px;
            cursor: pointer;
            margin-top: 8px
        }

        [type="checkbox"]:not(:checked)+label:before,
        [type="checkbox"]:checked+label:before,
        [type="checkbox"]:not(:checked)+label:after,
        [type="checkbox"]:checked+label:after {
            content: '';
            position: absolute
        }

        [type="checkbox"]:not(:checked)+label:before,
        [type="checkbox"]:checked+label:before {
            width: 65px;
            height: 30px;
            background: rgba(255, 255, 255, .2);
            border-radius: 15px;
            left: 0;
            top: -3px;
            transition: all .2s ease
        }

        [type="checkbox"]:not(:checked)+label:after,
        [type="checkbox"]:checked+label:after {
            width: 10px;
            height: 10px;
            background: rgba(255, 255, 255, .7);
            border-radius: 50%;
            top: 7px;
            left: 10px;
            transition: all .2s ease
        }

        [type="checkbox"]:checked+label:before {
            background: #0F4FE6
        }

        [type="checkbox"]:checked+label:after {
            background: #ffffff;
            top: 7px;
            left: 45px
        }

        [type="checkbox"]:checked+label .ui,
        [type="checkbox"]:not(:checked)+label .ui:before,
        [type="checkbox"]:checked+label .ui:after {
            position: absolute;
            left: 6px;
            width: 65px;
            border-radius: 15px;
            font-size: 14px;
            font-weight: bold;
            line-height: 22px;
            transition: all .2s ease
        }

        [type="checkbox"]:not(:checked)+label .ui:before {
            content: "no";
            left: 32px;
            color: rgba(255, 255, 255, .7)
        }

        [type="checkbox"]:checked+label .ui:after {
            content: "yes";
            color: #ffffff
        }

        [type="checkbox"]:focus+label:before {
            box-sizing: border-box;
            margin-top: -1px
        }

        .btn-signup {
            float: left;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            text-align: center;
            color: #ffffff;
            padding-top: 8px;
            width: 100%;
            height: 35px;
            border: none;
            border-radius: 20px;
            margin-top: 23px;
            background-color: #1059FF
        }

        .btn-signin {
            float: left;
            padding-top: 8px;
            width: 100%;
            height: 35px;
            border: none;
            border-radius: 20px;
            margin-top: -8px
        }

        .btn-animate {
            float: left;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            text-align: center;
            color: rgba(255, 255, 255, 1);
            padding-top: 8px;
            width: 100%;
            height: 35px;
            border: none;
            border-radius: 20px;
            margin-top: 23px;
            background-color: rgba(16, 89, 255, 1);
            left: 0px;
            top: 0px;
            transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s
        }

        .btn-animate-grow {
            width: 130%;
            height: 625px;
            position: relative;
            left: -55px;
            top: -420px;
            color: rgba(255, 255, 255, 0);
            background-color: rgba(255, 255, 255, 1)
        }

        a.btn-signup:hover,
        a.btn-signin:hover {
            cursor: pointer;
            background-color: #0F4FE6;
            transition: background-color .5s
        }

        .forgot {
            height: 100px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            padding-top: 24px;
            margin-top: -535px;
            border-top: solid 1px rgba(255, 255, 255, .3);
            transition: all 0.5s ease
        }

        .forgot-left {
            transform: translateX(-400px);
            opacity: 0
        }

        .forgot-fade {
            opacity: 0
        }

        .forgot a {
            color: rgba(255, 255, 255, .3);
            font-weight: 400;
            font-size: 13px;
            text-decoration: none
        }

        .welcome {
            width: 100%;
            height: 50px;
            position: relative;
            color: rgba(35, 43, 85, 0.75);
            opacity: 0;
            transition: transform 1.5s ease .25s, opacity .1s ease 1s
        }

        .welcome-left {
            transform: translateY(-780px);
            opacity: 1
        }

        .cover-photo {
            height: 150px;
            position: relative;
            left: 0px;
            top: -900px;
            background-color: #0F4FE6
            /* background: linear-gradient(rgba(35, 43, 85, 0.75), rgba(35, 43, 85, 0.95)), url(https://img.icons8.com/bubbles/100/000000/user.png); */
            background-size: cover;
            opacity: 0;
            transition: all 1.5s ease 0.55s
        }

        .cover-photo-down {
            top: -575px;
            opacity: 1
        }

        .profile-photo {
            height: 125px;
            width: 125px;
            position: relative;
            border-radius: 70px;
            left: 155px;
            top: -1000px;
            background: url(https://img.icons8.com/bubbles/100/000000/user.png);
            background-size: 100% 135%;
            background-position: 100% 100%;
            opacity: 0;
            transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
            border: solid 3px #ffffff
        }

        .profile-photo-down {
            top: -636px;
            opacity: 1
        }

        h1 {
            color: #ffffff;
            font-size: 35px;
            font-weight: 300;
            text-align: center
        }

        .btn-goback {
            position: relative;
            margin-right: auto;
            top: -400px;
            float: left;
            padding: 8px;
            width: 83%;
            margin-left: 37px;
            margin-right: 37px;
            height: 35px;
            border-radius: 20px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            text-align: center;
            color: #1059FF;
            margin-top: -8px;
            border: solid 1px #1059FF;
            opacity: 0;
            transition: top 1.5s ease 0.35s, opacity .75s ease .5s
        }

        .btn-goback-up {
            top: -1080px;
            opacity: 1
        }

        a.btn-goback:hover {
            cursor: pointer;
            background-color: #0F4FE6;
            transition: all .5s;
            color: #ffffff
        }

      
    </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner"
            style="background-color: aliceblue; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="/" style="color: black">PORTAL</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link" style="color: black">Home</a></li>
                                <li><a href="#courses-section" class="nav-link" style="color: black">Vacancies</a></li>
                                <li><a href="#programs-section" class="nav-link" style="color: black">ICD
                                        Organisations</a></li>
                                <li><a href="#teachers-section" class="nav-link" style="color:black">Feedback</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact
                                            Us</span></a></li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('{{ asset('web/img/cover_img.png') }}');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 ">
                                    <h1 data-aos="fade-up" data-aos-delay="100">IFAKARA DIOCESE PORTAL</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">With the aim of
                                        improving
                                        perfomance and staffs workign in a digital world as diocese.</p>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#"
                                            class="btn btn-primary py-3 px-5 btn-pill">Register to apply Job</a></p>

                                </div>

                                <div class="col-lg-5 mt-5" data-aos="fade-up" data-aos-delay="500">
                                    <div class="row">

                                        <div class="container">
                                            <div class="frame" style="background-color:aliceblue">
                                                <div class="nav">
                                                    <ul class="links">
                                                        <li class="signin-active"><a class="btn">SIGN IN</a>
                                                        </li>
                                                        <li class="signup-inactive"><a class="btn">SIGN UP</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div ng-app ng-init="checked = false">
                                                    <form action="" method="post" class="form-box">
                                                        {{-- <h3 class="h4 text-black mb-4">Sign Up</h3> --}}
                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Email</label>
                                                          <input type="text" class="form-control" placeholder="Email Addresss">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Password</label>
                                                          <input type="password" class="form-control" placeholder="Password">
                                                        </div>
                                                      
                                                        <div class="form-group">
                                                          <input type="submit" class="btn btn-primary btn-pill py-2 px-7" value="Sign up">
                                                        </div>
                                                      </form>

                                                    <p style="color: #000;font-size:13px" class="mt-2 text-center"> <a href="#" class="text-primary" style="font-weight: 800;font-size:12px">Forget Password? </a></p>

                                                    <p style="color: #000;font-size:13px" class="mt-4 text-center">Do you have an account ? please  <a href="#" class="text-primary" style="font-weight: 800;font-size:14px">SIGN UP </a></p>
                                                   
                                                    {{-- <form class="form-signup" action="" method="post"
                                                        name="form"> <label for="fullname">Full name</label> <input
                                                            class="form-styling" type="text" name="email"
                                                            placeholder="" /><label for="email">Email</label>
                                                        <input class="form-styling" type="text" name="email"
                                                            placeholder="" /> <label for="dlno">Enter DL
                                                            Number</label> <input class="form-styling" type="text"
                                                            name="dlno" placeholder="" /> <label
                                                            for="password">Create password</label> <input
                                                            class="form-styling" type="text"
                                                            name="confirmpassword" placeholder="" /> <a
                                                            ng-click="checked = !checked"
                                                            class="btn-signup">REGISTER</a>
                                                    </form> --}}

                                                    <form action="" method="post" class="form-box">
                                                        {{-- <h3 class="h4 text-black mb-4">Sign Up</h3> --}}
                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Name</label>
                                                          <input type="text" class="form-control" placeholder="Email Addresss">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Email</label>
                                                          <input type="text" class="form-control" placeholder="Email Addresss">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Password</label>
                                                          <input type="password" class="form-control" placeholder="Password">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="formFileSm" class="form-label" style="color: #000">Confirm Password</label>
                                                          <input type="password" class="form-control" placeholder="Password">
                                                        </div>
                                                      
                                                        <div class="form-group">
                                                          <input type="submit" class="btn btn-primary btn-pill py-2 px-7" value="Sign up">
                                                        </div>
                                                      </form>
                                           
                                                </div>
                                               
                                              
                                            </div>
                                         
                                        </div>
                                    </div>

                                    {{-- <p class="text-center mt-3" style="font-weight: 700; color:#fff">Do you have an
                                        account ? please<a href="http://" class="text-primary"> Login</a></p> --}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">
                                      
                      <div class="course bg-white h-100 align-self-stretch">
                        <form action="" method="post" class="form-box">
                            <h3 class="h4 text-black mb-4">Sign Up</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Addresss">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control"
                                    placeholder="Re-type Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-pill btn-block" value="Sign up">
                            </div>
                        </form>
                      </div>
          
                      <div class="course bg-white h-100 align-self-stretch">
                        <form action="" method="post" class="form-box">
                            <h3 class="h4 text-black mb-4">Login</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Addresss">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control"
                                    placeholder="Re-type Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-pill btn-block" value="Sign up">
                            </div>
                        </form>
                      </div>
          
                    </div>
          
                   
          
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-7 text-center">
                      <button class="customPrevBtn btn btn-primary m-1">Login</button>
                      <button class="customNextBtn btn btn-primary m-1">Register</button>
                    </div>
                  </div>
                </div> --}}
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
                                <h3><a href="#">Accounting and Auditing</a></h3>
                                <p>Required for the accountant .. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"> <a href="http://"
                                        class="btn btn-primary  btn-pill  btn-block btn-small"> <span
                                            class="icon-sign-in"></span> View More</a></div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
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
                                <h3><a href="#">IT and Telecoms</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
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
                                <h3><a href="#">Healthcare and Pharmaceutical </a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
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
                                <h3><a href="#">HR & Administration</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
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
                                <h3><a href="#">Socaials Studys and Arts</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
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
                                <h3><a href="#">Science Studies and Technincian</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


        <div class="site-section" id="programs-section">
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
        </div>





        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>About OneSchool</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et
                            veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt
                            sit quaerat dicta.</p>
                    </div>

                    <div class="col-md-3 ml-auto">
                        <h3>Links</h3>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Programs</a></li>
                            <li><a href="#">Teachers</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>Subscribe</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto
                            architecto? Numquam, natus?</p>
                        <form action="#" class="footer-subscribe">
                            <div class="d-flex mb-5">
                                <input type="text" class="form-control rounded-0" placeholder="Email">
                                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row pt-2 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="{{ asset('web/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('web/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('web/js/aos.js') }}"></script>
    <script src="{{ asset('web/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('web/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('web/js/main.js') }}"></script>

    <script>
        $(function() {
            $(".btn").click(function() {
                $(".form-signin").toggleClass("form-signin-left");
                $(".form-box").toggleClass("form-signup-left");
                $(".frame").toggleClass("frame-long");
                $(".signup-inactive").toggleClass("signup-active");
                $(".signin-active").toggleClass("signin-inactive");
                $(".forgot").toggleClass("forgot-left");
                $(this).removeClass("idle").addClass("active");
            });
        });

        $(function() {
            $(".btn-signup").click(function() {
                $(".nav").toggleClass("nav-up");
                $(".form-signup-left").toggleClass("form-signup-down");
                $(".success").toggleClass("success-left");
                $(".frame").toggleClass("frame-short");
            });
        });

        $(function() {
            $(".btn-signin").click(function() {
                $(".btn-animate").toggleClass("btn-animate-grow");
                $(".welcome").toggleClass("welcome-left");
                $(".cover-photo").toggleClass("cover-photo-down");
                $(".frame").toggleClass("frame-short");
                $(".profile-photo").toggleClass("profile-photo-down");
                $(".btn-goback").toggleClass("btn-goback-up");
                $(".forgot").toggleClass("forgot-fade");
            });
        });
    </script>

</body>

</html>

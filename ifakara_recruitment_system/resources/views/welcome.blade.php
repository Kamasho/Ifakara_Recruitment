<!DOCTYPE html>
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

            @include('layouts.welcome.footer')

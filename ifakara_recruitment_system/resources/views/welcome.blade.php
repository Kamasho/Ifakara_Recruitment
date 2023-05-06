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
                    Waombaji wa fursa za Ajira mnatakiwa kuhuisha <b>Update</b> taarifa zenu kwa kutumia namba ya
                    utambulisho wa Taifa <b>NIN</b>, kwenye eneo ya <b>Personal Details</b>, aidha mnatakiwa kuhuisha
                    taarifa kwenye eneo la <b>Academic Qualification</b> kwa kuweka kozi yako kwenye Category husika.
                    Ili kuona <b>STATUS</b> ya maombi yako ya kazi, ingia sehemu ya <b>MY APPLICATION</b> baada ya
                    ku-<b>login</b> katika akaunti yako. Sehemu hii itakuwezesha kuona namba ya usaili kwa wale
                    waliofanikiwa na sababu ya kutokuitwa kwa wale ambao hawajafanikiwa.
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

                            </div>
                        </div>
                    </div>


                </div>
                <hr class="hr hr-blurry">

                <div class="row mt-4">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-header text-center text-black fw-bold">
                                  How Do I
                                </div>
                                <div class="card-body">
                                  <ul style="list-style: lower-roman">
                                    <li><a href="#">Apply for Jobs</a></li>
                                    <li><a href="#">Subscribe to Job Alerts</a></li>
                                    <li><a href="#">Write a good CV</a></li>
                                    <li><a href="#">Write a Cover letter</a></li>
                                </ul>
                                </div>
                              </div> 
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-header text-center text-black fw-bold">
                                  Tips
                                </div>
                              </div>
                                
                            </div>
                            <div class="col-md-4">
                              <div class="card">
                                <div class="card-header text-center text-black fw-bold">
                                  Resources

                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="card">
                        <div class="card-header text-center text-black fw-bold">
                          Application
                          General Condition
                        </div>
                        <div class="card-body">
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

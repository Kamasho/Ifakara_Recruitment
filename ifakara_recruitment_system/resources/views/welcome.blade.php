<!DOCTYPE html>
<html >
    <head>
        @include('user.include.head')
    </head>
    <body>
        <div class="container my-3">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                        <img src="{{ asset('style/admin/images/ifakarachurch.jpg') }}" style="height: 100px; opacity: 0.8" class="card-img-top" alt="...">
                        <div class="card-img-overlay">
                            <h2 class="card-title text-center"  style="font-family: 'Times New Roman', Times, serif">Mfumo wa Ajira Jimbo La Ifakara</h2>
                          </div>
                          <div class="card-title mb-0"> 
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                              <button class="btn btn-light d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <i class="fa fa-bars"></i>
                              </button>
                        
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">
                                  <li class="nav-item">
                                      <a class="nav-link" href="/">Home</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Vacancies</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">Login</a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Feedback</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </nav>
                        </div>

                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Waombaji wa fursa za Ajira mnatakiwa kuhuisha <b>Update</b> taarifa zenu kwa kutumia namba ya utambulisho wa Taifa <b>NIN</b>, kwenye eneo ya <b>Personal Details</b>, aidha mnatakiwa kuhuisha taarifa kwenye eneo la  <b>Academic Qualification</b> kwa kuweka kozi yako kwenye Category husika.
                        Ili kuona <b>STATUS</b> ya maombi yako ya kazi, ingia sehemu ya <b>MY APPLICATION</b> baada ya ku-<b>login</b> katika akaunti yako. Sehemu hii itakuwezesha kuona namba ya usaili kwa wale waliofanikiwa na sababu ya kutokuitwa kwa wale ambao hawajafanikiwa.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                            <p>Mwongozo wa Matumizi ya Mfumo wa Maombi ya Kazi Ifakara Dioceses Recruitment Portal User Guide v 1.0 <a href="#">Here</a></p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p style="color: red;">Malalamiko: +255736005511, +255679398259, Email: malalamiko@ifakaradioceses.go.tz</p>
                        </div>
                      </div>

                      <div class="row justify-content-center mt-2">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                                <div class="card-header text-center"><h2 style="font-family: 'Times New Roman', Times, serif">Job Posts By Categories</h2></div>
                      
                                <div class="card-body">
                                  
                                </div>
                            </div>
                        </div>
                      </div>
                      <hr class="hr hr-blurry">

                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                        <!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
    <li class="nav-item active" role="presentation">
      <a style="text-decoration: none; color: black;"
        class="nav-link active"
        id="ex2-tab-1"
        data-mdb-toggle="tab"
        href="#ex2-tabs-1"
        role="tab"
        aria-controls="ex2-tabs-1"
        aria-selected="true"
        >How Do I</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a style="text-decoration: none; color: black;"
        class="nav-link"
        id="ex2-tab-2"
        data-mdb-toggle="tab"
        href="#ex2-tabs-2"
        role="tab"
        aria-controls="ex2-tabs-2"
        aria-selected="false"
        >Tips</a
      >
    </li>
    <li class="nav-item" role="presentation">
      <a style="text-decoration: none; color: black;"
        class="nav-link"
        id="ex2-tab-3"
        data-mdb-toggle="tab"
        href="#ex2-tabs-3"
        role="tab"
        aria-controls="ex2-tabs-3"
        aria-selected="false"
        >Resources</a
      >
    </li>
  </ul>
  <!-- Tabs navs -->
  
  <!-- Tabs content -->
  <div class="tab-content" id="ex2-content">
    <div
      class="tab-pane fade show active"
      id="ex2-tabs-1"
      role="tabpanel"
      aria-labelledby="ex2-tab-1"
    >
    <ul>
        <li><a href="#">Apply for Jobs</a></li>
        <li><a href="#">Subscribe to Job Alerts</a></li>
        <li><a href="#">Write a good CV</a></li>
        <li><a href="#">Write a Cover letter</a></li>
      </ul>
    </div>
    <div
      class="tab-pane fade"
      id="ex2-tabs-2"
      role="tabpanel"
      aria-labelledby="ex2-tab-2"
    >
      Tab 2 content
    </div>
    <div
      class="tab-pane fade"
      id="ex2-tabs-3"
      role="tabpanel"
      aria-labelledby="ex2-tab-3"
    >
      Tab 3 content
    </div>
  </div>
  <!-- Tabs content -->
                        </div>    
                        <div class="col-lg-8 col-md-8 col-sm-12 mt-4">
                            <!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a
        class="nav-link active"
        id="ex2-tab-1"
        data-mdb-toggle="tab"
        href="#ex2-tabs-1"
        role="tab"
        aria-controls="ex2-tabs-1"
        aria-selected="true"
        >Application General Conditions</a
      >
    </li>
  </ul>
  <!-- Tabs navs -->
  
  <!-- Tabs content -->
  <div class="tab-content" id="ex2-content">
    <div
      class="tab-pane fade show active"
      id="ex2-tabs-1"
      role="tabpanel"
      aria-labelledby="ex2-tab-1"
    >
      <ul>
        <li>All applicants must be Citizens of Tanzania.</li>
        <li>Applicants must attach their detailed relevant certified copies of Academic certificates.</li>
        <li>Applicants should apply on the strength of the information given in the advertisement.</li>
        <a href="{{ route('generalinformation') }}">Read More</a>
      </ul>
    </div>
  </div>
  <!-- Tabs content -->
                        </div>
                      </div>
                   
                </div>
                <hr class="hr hr-blurry">
                <div class="footer"><p class="text-center">Hatimiliki © 2023 ifakara dioceses catholic church Haki zote Zimehifadhiwa</p></div>
                </div>
 
                                          

    <script src="style/admin/js/jquery.min.js"></script>
    <script src="style/admin/js/popper.js"></script>
    <script src="style/admin/js/bootstrap.min.js"></script>
    <script src="style/admin/js/main.js"></script>
    </body>
</html>

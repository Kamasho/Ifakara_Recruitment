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
                                      <a class="nav-link" href="#">Home</a>
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
                    <ol>
                        <li>All applicants must be Citizens of Tanzania and not above 45 years old, however, should also observe the age limit for each position where indicated.</li>
                        <li>Applicants must attach an up-to-date current Curriculum Vitae (CV) having reliable contact, postal address, e-mail and telephone numbers.</li>
                        <li>Applicants should apply on the strength of the information given in the advertisement.</li>
                        <li>The title of the position and institution applied for should be written in the subject of the application letter; short of which will make the application invalid.</li>
                        <li>Applicants must attach their detailed relevant certified copies of Academic certificates:</li>
                        <ul>
                            <li>Postgraduate/Degree/Advanced Diploma/Diploma/Certificates.</li>
                            <li>Postgraduate/Degree/Advanced Diploma/Diploma transcripts.</li>
                            <li>Form IV and Form VI National Examination Certificates.</li>
                            <li>Computer Certificate</li>
                            <li>Professional certificates from respective boards</li>
                            <li>One recent passport size picture and birth certificate.</li>
                        </ul>
                        <li>FORM IV AND FORM VI RESULTS SLIPS ARE STRICTLY NOT ACCEPTED</li>
                        <li>Testimonials, Partial transcripts and results slips will NOT be accepted.</li>
                        <li>Presentation of forged academic certificates and other information in the CV will necessitate to legal action</li>
                        <li>Applicants for senior positions currently employed in the public service should route their application letters through their respective employers.</li>
                        <li>Applicants for entry levels currently employed in the Public Service should not apply, they have to adhere to Government Circular Na. CAC. 45/257/01/D/140 dated 30th November 2010.</li>
                        <li>Applicants who have/were retired from the Public Service for whatever reason should not apply.</li>
                        <li>Applicants should indicate three reputable referees with their reliable contacts.</li>
                        <li>Certificates from foreign examination bodies for ordinary or advanced level education should be certified by The National Examination Council of Tanzania (NECTA)</li>
                        <li>Certificates from foreign Universities should be verified by The Tanzania Commission for Universities (TCU)</li>
                        <li>Applicants with special needs/case (disability) are supposed to indicate</li>
                        <li>Women are highly encouraged to apply</li>
                        <li>Application letters should be written in English or Swahili</li>
                    </ol>
                <hr>
                <div class="footer"><p class="text-center">Hatimiliki © 2023 ifakara dioceses catholic church Haki zote Zimehifadhiwa</p></div>
                </div>
            </div>
        </div>
 
                                          

    <script src="style/admin/js/jquery.min.js"></script>
    <script src="style/admin/js/popper.js"></script>
    <script src="style/admin/js/bootstrap.min.js"></script>
    <script src="style/admin/js/main.js"></script>
    </body>
</html>

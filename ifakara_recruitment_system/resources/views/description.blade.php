@include('layouts.welcome.header')

<div class="intro-section single-cover" id="home-section">

    <div class="slide-1 " style="background-image: url('{{ asset('web/img/cover_img.png') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-lg-6">
                            <h1 data-aos="fade-up" data-aos-delay="0">JOB Description</h1>
                            <p data-aos="fade-up" data-aos-delay="100">As Ifakara Diocese We have different organization
                                that manage as ifakara </p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="course bg-white h-100 align-self-stretch mt-4">
                    {{-- <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/img/catholic_history.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure> --}}
                    <div class="course-inner-text py-4 px-4">

                        <h3><b>Job Title: {{ $post->vacant->name }}</h3>

                        <p style="text-align: justify"> {{ $post->vacant->description }}

                        </p>
                        <h3><b>Position:</b> {{ $post->vacant->position_name }}</h3>
                        <p style="text-align: justify"> <span> Position Description:
                            </span>{{ $post->vacant->position_description }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-center">JOB QUALIFICATION</h3>
                            <hr>

                            <p class="m-3 text-justify"> <span>Education Level</span>{{ $post->education_level }} with
                                Education name {{ $post->education_categorie }} and Program {{ $post->education_name }}
                            </p>
                        </div>
                        <div class="col-md-6">

                            <h3 class="text-center">Other Requiments</h3>
                            <hr>

                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Applicant Age:</b> {{ $post->age_range }}</h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Experience:</b> {{ $post->year_experience }}</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap mb-3">
                                <span class="custom-icon-inner ml-3">
                                    <span class="icon icon-graduation-cap"></span>
                                </span>
                                <div>
                                    <h3 class="m-1"><b>Gender:</b>{{ $post->gender }}</h3>
                                </div>
                            </div>



                        </div>

                        <div class="col-md-12">
                            <p class="m-3"><b>Post Summay:</b> {{ $post->summary }}</p>

                            <p class="m-3">Application End Date:<span
                                    class="text-danger">{{ $post->end_date }}</span></p>
                        </div>

                    </div>

                    <div class="d-flex border-top stats">

                        <a href="#" class="text-center m-2 btn btn-info">Apply Now</a>
                        {{-- <h3 class="text-center"><span class="icon-users"></span>Apply Now</h3> --}}
                    </div>
                </div>
            </div>





        </div>
        {{-- <div class="row mt-5">
            <div class="col-lg-6">

                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                    
                      <h3><a href="#">JS Programming Language</a></h3>
                      <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing eli. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae fugiat ea ratione cumque quisquam, fugit eveniet, 
                        nesciunt temporibus natus, a repudiandae rerum libero aut expedita quaerat adipisci nemo velit esse. </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-6">

                <div class="course bg-white h-100 align-self-stretch">
                    <figure class="m-0">
                      <a href="course-single.html"><img src="{{asset('web/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
                    </figure>
                    <div class="course-inner-text py-4 px-4">
                      
                      <h3><a href="#">JS Programming Language</a></h3>
                      <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis magnam molestiae consequuntur quasi ex facere exercitationem reiciendis tempore
                        , assumenda voluptas blanditiis, quam repellat obcaecati laboriosam veniam quos culpa, aperiam nemo? </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                      <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                    </div>
                  </div>
            </div>
          </div> --}}

    </div>
</div>



@include('layouts.welcome.footer')

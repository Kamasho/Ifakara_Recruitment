@extends('layouts.include.users.user')
@section('content')
    {{-- <div class="row">
    <div class="col col-sm-12 col-lg-12">
        <h2 style="margin-bottom: 10px;">APPLICATION TIPS</h2>
        <p style="margin-bottom: 10px;">Complete your Profile to maximize your earning opportunities</p>
        <p style="margin-bottom: 10px;">A professional profile is essential to effectively showcase your skills. Applicants who have completed their profile are far more likely to get hired by employers.</p>
        <p style="margin-bottom: 3px;"><strong>Step 1: </strong>Complete your Profile.</p>
        <p style="margin-bottom: 10px;">Please complete ALL of the required fields of the forms found in the left-hand menu of this page.</p>
        <p style="margin-bottom: 3px;"><strong>Step 2: </strong>Apply to a vacancy online</p>
        <ul style="margin-bottom: 10px; list-style-type:circle; margin-left: 40px;">
            <li>Click on the <strong>vacancies tab </strong> at the top of the page.</li>
            <li>Select a vacancy of interest.</li>
            <li>Read the job requirements thoroughly.</li>
            <li>Click 'apply' for this vacancy.</li>
        </ul>
        <p style="margin-bottom: 10px;">Receipt of online applications will be confirmed via the email address or mobile phone number you have provided.</p>
        <p style="margin-bottom: 10px;">Click on the Review CV menu bar to review your CV before submission and verify that your email address is correct.
            If you are experiencing additional problems, please give us a feedback <a href="#">here</a>.</p>

        
    </div>
</div>
<div class="contaner" style="border-style:ridge; margin-right: 15px; padding: 15px;">
    <div class="row">
        <div class="col" style="margin: 15px">
            <h2>Job Posts By Categories</h2>
        </div>
    </div>
    <hr>
</div> --}}


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-md-6">

                <div class="page-title-box">
                    {{-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Dashboard 2</li>
                    </ol>
                </div> --}}


                    <h4 class="page-title text-success">welcome {{ Auth::user()->name }}</h4>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <a href="#" class="btn btn-primary">Register to alert job</a>
                    <a href="#" class="btn btn-primary">vacancy</a>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-blue rounded">
                                    <i class="fe-layers avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">12,008</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-success rounded">
                                    <i class="fe-award avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">7,410</span></h3>
                                    <p class="text-muted mb-0 text-truncate">New Leads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-danger rounded">
                                    <i class="fe-delete avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">2,125</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Deals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card bg-pattern">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-warning rounded">
                                    <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark my-1">$<span data-plugin="counterup">256</span>k</h3>
                                    <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4"> Job Posts By Categories</h4>
                        {{-- <div class="">
                        <h4 class="font-13 text-muted text-uppercase">About Me :</h4>
                        <p class="mb-3">
                            All applicants must be Citizens of Tanzania
                        </p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Date of Birth :</h4>
                        <p class="mb-3"> Applicants must attach their detailed relevant certified copies of Academic
                            certificates</p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Company :</h4>
                        <p class="mb-3">Applicants should indicate three reputable referees with their reliable
                            contacts</p>



                    </div> --}}
                    </div>
                </div>
            </div>.
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                <p class="mb-3"><i class="fe-disc"></i>
                                    All applicants must be Citizens of Tanzania
                                </p>
                                 
                                <p class="mb-3"><i class="fe-disc"></i> Applicants must attach their detailed relevant certified copies of Academic
                                  </p>
                                  
                                <p class="mb-3"><i class="fe-disc"></i>Applicants should indicate three reputable referees with their reliable
                                    contacts</p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                            </div>
                           
    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                <p class="mb-3"><i class="fe-disc"></i>
                                    All applicants must be Citizens of Tanzania
                                </p>
                                 
                                <p class="mb-3"><i class="fe-disc"></i> Applicants must attach their detailed relevant certified copies of Academic
                                  </p>
                                  
                                <p class="mb-3"><i class="fe-disc"></i>Applicants should indicate three reputable referees with their reliable
                                    contacts</p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                            </div>
                           
    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                              
                                <p class="mb-3"><i class="fe-disc"></i>
                                    All applicants must be Citizens of Tanzania
                                </p>
                                 
                                <p class="mb-3"><i class="fe-disc"></i> Applicants must attach their detailed relevant certified copies of Academic
                                  </p>
                                  
                                <p class="mb-3"><i class="fe-disc"></i>Applicants should indicate three reputable referees with their reliable
                                    contacts</p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                                    <p class="mb-3"><i class="fe-disc"></i>
                                        All applicants must be Citizens of Tanzania
                                    </p>
                            </div>
                           
    
                        </div>
                    </div>
                </div>
               
            </div>

        </div>
        <div class="row">

            <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Application justification</h4>

                        <ul class="nav nav-tabs nav-bordered nav-justified">
                            <li class="nav-item">
                                <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    How Do i
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                    Tips
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#messages-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    Resources
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="home-b2">
                                <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam
                                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                    enim.</p>
                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                    mollis pretium. Integer tincidunt.Cras dapibus.
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>
                            <div class="tab-pane active" id="profile-b2">
                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                    rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                    pretium. Integer tincidunt.Cras dapibus.
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus. Donec quam
                                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                    enim.</p>
                            </div>
                            <div class="tab-pane" id="messages-b2">
                                <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus. Donec quam
                                    felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                    enim.</p>
                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                    mollis pretium. Integer tincidunt.Cras dapibus.
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card-->
            </div>
            <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title mb-4"> Application General Conditions </h4>
                        <div class="">
                            <h4 class="font-13 text-muted text-uppercase">About Me :</h4>
                            <p class="mb-3">
                                All applicants must be Citizens of Tanzania
                            </p>

                            <h4 class="font-13 text-muted text-uppercase mb-1">Date of Birth :</h4>
                            <p class="mb-3"> Applicants must attach their detailed relevant certified copies of Academic
                                certificates</p>

                            <h4 class="font-13 text-muted text-uppercase mb-1">Company :</h4>
                            <p class="mb-3">Applicants should indicate three reputable referees with their reliable
                                contacts</p>



                        </div>
                    </div>
                </div>
                <!-- end card-->
            </div>
        </div>


        <!-- end row -->
    </div>
@endsection

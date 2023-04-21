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
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Dashboard 2</li>
                    </ol>
                </div>

                <h4 class="page-title text-success">welcome back HR</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-blue rounded">
                                <i class="fe-aperture avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span></h3>
                                <p class="text-muted mb-1 text-truncate">Income status</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-end">60%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="visually-hidden">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-success rounded">
                                <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span></h3>
                                <p class="text-muted mb-1 text-truncate">January's Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-end">49%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                                <span class="visually-hidden">49% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-warning rounded">
                                <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark my-1">$<span data-plugin="counterup">8947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Payouts</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-end">18%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                                <span class="visually-hidden">18% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-sm bg-info rounded">
                                <i class="fe-cpu avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark my-1"><span data-plugin="counterup">178</span></h3>
                                <p class="text-muted mb-1 text-truncate">Available Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h6 class="text-uppercase">Target <span class="float-end">74%</span></h6>
                        <div class="progress progress-sm m-0">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                                <span class="visually-hidden">74% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
@endsection
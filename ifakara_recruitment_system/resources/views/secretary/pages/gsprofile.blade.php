@include('assets.css')

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.secretary.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.secretary.sidebar')


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                             
                                <h4 class="page-title">Manage Profile</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 class="mt-5 text-uppercase bg-light p-2 text-center"
                                                style="margin-top: 100%;"><i class="mdi mdi-account-circle me-1"></i>
                                                Personal Information</h5>
                                            <!-- end card-->
                                        </div>
                                        <div class="col-lg-8">
                                            <form action="#">
                                                <div class="row">
                                                    <div
                                                        class="col-md-3 d-flex align-items-center mb-3 text-center justify-content-center mt-2">
                                                        <img class="d-flex me-3 rounded-circle avatar-xl"
                                                            src="../assets/images/users/user-8.jpg"
                                                            alt="Generic placeholder image">

                                                    </div>
                                                    <div class="col-md-9 mt-3">
                                                        <label for="image">Profile Image</label>
                                                        <input type="file" class="form-control"
                                                            placeholder="Select your profile picture">
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <label for="name" class="label">name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="name" class="label">Eamil</label>
                                                        <input type="email" class="form-control" name="name"
                                                            value="{{ Auth::user()->email}}">
                                                    </div>


                                                </div>
                                                <div class="float-md-left mt-3">
                                                    <button type="submit"
                                                        class="btn btn-warning .d-grid btn-block">Save</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>


                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h5 class="mt-5 text-uppercase bg-light p-2 text-center"
                                                style="margin-top: 100%;"><i
                                                    class="mdi-lock-plus-outline me-1"></i>Update Password</h5>
                                            <!-- end card-->
                                        </div>
                                        <div class="col-lg-8">
                                            <form action="#">
                                                <div class="col-md-12 mt-3">
                                                    <label for="image">Current Password</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your current passoword">
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <label for="name" class="label">New Password</label>
                                                        <input type="Password" class="form-control" name="name"
                                                            value="general secretary">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="name" class="label">Confirm
                                                            Password</label>
                                                        <input type="password" class="form-control" name="name"
                                                            value="gs@gmail.com">
                                                    </div>


                                                </div>

                                                <button type="submit"
                                                    class="btn btn-warning .d-grid btn-block mt-3">Save</button>


                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- end col -->


                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('layouts.hr.footer')
            <!-- end Footer -->

        </div>




    </div>
    <!-- END wrapper -->



    @include('assets.js')

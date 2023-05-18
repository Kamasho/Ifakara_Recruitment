@include('assets.css')

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.hr.header')


        @include('layouts.hr.sidebar')



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">



                    <div class="row mt-3">
                       
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between mb-2">
                                        <div class="col-auto">
                                            <form>
                                                <div class="mb-2">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <input type="search" class="form-control" id="inputPassword2"
                                                        placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-sm-end">
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#custom-modal">Add New Uploads
                                                    </button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Upload ID</th>
                                                    <th>Title</th>
                                                    <th>Upload Date</th>
                                                    <th>Description</th>
                                                    <th>Created Date</th>
                                                    <th style="width: 82px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="../assets/images/users/user-4.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul
                                                            J. Friend</a>
                                                    </td>
                                                    <td>
                                                        937-330-1634
                                                    </td>
                                                    <td>
                                                        pauljfrnd@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Vine Corporation
                                                    </td>
                                                    <td>
                                                        07/07/2018
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="../assets/images/users/user-3.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body fw-semibold">Bryan J. Luellen</a>
                                                    </td>
                                                    <td>
                                                        215-302-3376
                                                    </td>
                                                    <td>
                                                        bryuellen@dayrep.com
                                                    </td>
                                                    <td>
                                                        Blue Motors
                                                    </td>
                                                    <td>
                                                        09/12/2018
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="../assets/images/users/user-3.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body fw-semibold">Kathryn S. Collier</a>
                                                    </td>
                                                    <td>
                                                        828-216-2190
                                                    </td>
                                                    <td>
                                                        collier@jourrapide.com
                                                    </td>
                                                    <td>
                                                        Arcanetworks
                                                    </td>
                                                    <td>
                                                        06/30/2018
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="../assets/images/users/user-1.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body fw-semibold">Timothy Kauper</a>
                                                    </td>
                                                    <td>
                                                        (216) 75 612 706
                                                    </td>
                                                    <td>
                                                        thykauper@rhyta.com
                                                    </td>
                                                    <td>
                                                        Boar Records
                                                    </td>
                                                    <td>
                                                        09/08/2018
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="../assets/images/users/user-5.jpg" alt="table-user"
                                                            class="me-2 rounded-circle">
                                                        <a href="javascript:void(0);" class="text-body fw-semibold">Zara
                                                            Raws</a>
                                                    </td>
                                                    <td>
                                                        (02) 75 150 655
                                                    </td>
                                                    <td>
                                                        austin@dayrep.com
                                                    </td>
                                                    <td>
                                                        Bearings
                                                    </td>
                                                    <td>
                                                        07/15/2018
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-square-edit-outline"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                    <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('layouts.hr.footer')
            <!-- end Footer -->

        </div>



    </div>
    <!-- END wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Uploads </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Details</h4>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="field-4" placeholder="document title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field-5" class="form-label">Upload Date</label>
                                <input type="date" class="form-control" id="field-5" placeholder="last name">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-1" class="form-label">Document</label>
                                <input type="file" class="form-control" id="field-1"
                                    placeholder="phone number">
                            </div>
                        </div>
                        
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="field-3" class="form-label">Upload Description</label>
                                <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    @include('assets.js')

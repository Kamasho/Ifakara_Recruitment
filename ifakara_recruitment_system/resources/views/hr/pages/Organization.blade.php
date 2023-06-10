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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Institutions</h4>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab"
                                                role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" href="#v-pills-home" role="tab"
                                                    aria-controls="v-pills-home" aria-selected="true">

                                                    <span>All Instituions </span></a>
                                                <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                    href="#v-pills-profile" role="tab"
                                                    aria-controls="v-pills-profile" aria-selected="false">
                                                    Head of Institutions</a>
                                                <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                    href="#v-pills-messages" role="tab"
                                                    aria-controls="v-pills-messages" aria-selected="false">
                                                    Uploads</a>

                                            </div>
                                        </div>
                                        <!-- end col-->
                                        <div class="col-sm-9">
                                            <div class="tab-content pt-0">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-auto">
                                                                    <form>
                                                                        <div class="mb-2">
                                                                            <label for="inputPassword2"
                                                                                class="visually-hidden">Search</label>
                                                                            <input type="search" class="form-control"
                                                                                id="inputPassword2"
                                                                                placeholder="Search...">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#position-modal"> Add
                                                                            Institutions

                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>Name of Institution</th>
                                                                            <th>Locatiions</th>
                                                                            <th>Email of Institutions</th>
                                                                            <th>Category</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        {{-- @foreach ($jobs as $job)
                                                                            <tr>
                                                                                <td>
                                                                                    {{ $job->id }}
                                                                                </td>

                                                                                <td>
                                                                                    {{ $job->job_name }}
                                                                                </td>
                                                                                <td>{{ $job->job_location }}</td>
                                                                                <td>
                                                                                    {{ $job->position_name }}
                                                                                </td>
                                                                                <td>{{ $job->created_at }}</td>

                                                                                <td>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon"> <i
                                                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                                                    <a href="javascript:void(0);"
                                                                                        class="action-icon"> <i
                                                                                            class="mdi mdi-delete"></i></a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach --}}
                                                                    </tbody>


                                                                </table>
                                                            </div>


                                                            {{-- {{ $jobs->onEachSide(3)->links() }} --}}




                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-auto">
                                                                    <form>
                                                                        <div class="mb-2">
                                                                            <label for="inputPassword2"
                                                                                class="visually-hidden">Search</label>
                                                                            <input type="search" class="form-control"
                                                                                id="inputPassword2"
                                                                                placeholder="Search...">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#custom-modal">Assign
                                                                            Institution head
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>First name</th>
                                                                            <th>Last name</th>
                                                                            <th>Email</th>
                                                                            <th>Contact </th>
                                                                            <th>Location</th>
                                                                            <th>Institution</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        {{-- @foreach ($staffs as $staff)
                                                                        <tr>
                                                                            <td> {{$staff->id}}</td>
                                                                            <td>
                                                                                {{$staff->first_name}}
                                                                            </td>
                                                                            <td>
                                                                                {{$staff->last_name}}
                                                                            </td>
                                                                            <td>
                                                                                {{$staff->email}}
                                                                            </td>
                                                                            <td>{{$staff->contacts}}</td>
                                                                            <td>{{$staff->location}}</td>
                                                                            <td>{{$job->job_name}}</td>
                                                                            <td>{{$staff->created_at}}</td>
                                                                            <td>
                                                                                <a href="#"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                                <a href="#"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-delete"></i></a>
                                                                            </td>
                                                                        </tr>

                                                                        @endforeach --}}

                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                            <ul
                                                                class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="javascript: void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">4</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                    aria-labelledby="v-pills-messages-tab">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row justify-content-between mb-2">
                                                                <div class="col-auto">
                                                                    <form>
                                                                        <div class="mb-2">
                                                                            <label for="inputPassword2"
                                                                                class="visually-hidden">Search</label>
                                                                            <input type="search" class="form-control"
                                                                                id="inputPassword2"
                                                                                placeholder="Search...">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <button type="button"
                                                                            class="btn btn-primary waves-effect waves-light mb-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#uploads-modal">Add New
                                                                            Uplaods</button>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-centered table-nowrap table-hover mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>SN</th>
                                                                            <th>Job Title</th>
                                                                            <th>Job Location</th>
                                                                            <th>Position</th>
                                                                            <th>Created Date</th>
                                                                            <th style="width: 82px;">Action</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>

                                                                            <td>

                                                                            </td>

                                                                            <td>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                                                <a href="javascript:void(0);"
                                                                                    class="action-icon"> <i
                                                                                        class="mdi mdi-delete"></i></a>
                                                                            </td>
                                                                        </tr>






                                                                    </tbody>


                                                                </table>
                                                            </div>

                                                            <ul
                                                                class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="javascript: void(0);">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">2</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">3</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">4</a>
                                                                </li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="javascript: void(0);">5</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link" href="javascript: void(0);"
                                                                        aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                        <!-- end card-body-->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                    aria-labelledby="v-pills-settings-tab">
                                                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur
                                                        reprehenderit consectetur elit id dolor proident in cupidatat
                                                        officia. Voluptate excepteur commodo labore nisi cillum duis
                                                        aliqua do. Aliqua amet
                                                        qui mollit consectetur nulla mollit velit aliqua veniam nisi id
                                                        do Lorem deserunt amet. Culpa ullamco sit adipisicing labore
                                                        officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col-->
                                    </div>
                                    <!-- end row-->
                                </div>
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

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Modal -->
    <div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Information Instituions </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                        <span class="fw-bold text-danger">Please consider this:</span> Registration of a Institution
                        and its
                        corresponding position now will save time when you need to refer or to assign staff. This
                        way, it will be stored in the database of the system, reducing the time required for future
                        postings
                    </div>

                    <h4>INSTITUIONS INFORMATION</h4>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Instituions Name</label>
                                    <input type="text" class="form-control" id="field-1" name=""
                                        placeholder="Malecela Secondary School">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="" id="field-2"
                                        placeholder="Ifakara Morogoro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Institution Email</label>
                                    <input type="email" class="form-control" name="" id="field-2"
                                        placeholder="malecela.school@ifakaracatholic">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Instituions Category</label>
                                    <select class="form-select" id="example-select" name="job_id">

                                        <option value="1">School</option>
                                        <option value="2">Health Institions</option>
                                        <option value="3">Parish</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>

                            </div>
                        </div>
                    </form>




                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Assign Head of Institions </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h4>Person Information</h4>
                    <form action="{{ route('staff_registrations') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-4" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="field-4"
                                        placeholder="first name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-5" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="field-5"
                                        placeholder="last name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="field-6" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="field-6" name="email"
                                        placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Contanct</label>
                                    <input type="interger" class="form-control" id="field-1" name="contacts"
                                        placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Instituions Name</label>
                                    <select class="form-select" id="example-select" name="job_id">

                                        <option value="1">Malecela Secondary School</option>
                                        <option value="2">Benigins Secondary School</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    

                        <button type="submit" class="btn btn-primary btn-block">Assign</button>
                    </form>


                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="uploads-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Uploads </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="" method="post">
                        <div class="row">
                            <div class="mb-3">
                                <label for="field-4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="field-4"
                                    placeholder="position name">
                            </div>
                            <div class="mb-3">
                                <label for="field-5" class="form-label">Document</label>
                                <input type="file" class="form-control" id="field-5"
                                    placeholder="positon name">
                            </div>



                            <div class="mb-3">
                                <label for="field-3" class="form-label">Description</label>
                                <textarea class="form-control" id="field-7" placeholder="Write something about job"></textarea>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3 justify-content-end">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </form>


                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    @include('assets.js')

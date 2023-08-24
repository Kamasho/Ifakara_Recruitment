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
                <div class="row justify-content-center mt-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card"
                            style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                            <div class="card-header text-center">
                                <h2 style="font-family: 'Times New Roman', Times, serif">Available Jobs Vacancies</h2>
                            </div>

                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row justify-content-between">
                                        <div class="col">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link"
                                                            href="#">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>

                                            </nav>
                                        </div>
                                        <div class="col">
                                            <form class="form-inline">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                                    aria-label="Search">
                                                {{-- <button class="btn btn-outline-success my-2 my-sm-0"
                                                    type="submit">Search</button> --}}
                                            </form>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <table class="table table-bordered table-striped dataTable no-footer">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Closing Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0px;"><strong>POST: </strong><a href="#">ASSISTANT
                                                                    LIBRARIAN TRAINEE (HEALTH INFORMATION SYSTEMS) - 1
                                                                    POST</a></p><br>
                                                            <p style="margin: 0px;"><strong>Employer: </strong>The University of Dodoma (UDOM)
                                                            </p><br>
                                                            <a href="{{ route('postdeatail') }}" style="margin: 0px;">More Details</a>
                                                        </td>
                                                        <td>
                                                            <p>23-04-2023</p><br>
                                                            <a href="#"><i class="fa-regular fa-lock-keyhole"></i>Login To Apply</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0px;"><strong>POST: </strong><a href="#">DIRECTOR OF E- BUSINESS, FINANCIAL AND AGENCY(RE-ADVERTISED) - 1 POST</a></p><br>
                                                            <p style="margin: 0px;"><strong>Employer: </strong>Shirika la Posta Tanzania (TPC)
                                                            </p><br>
                                                            <a href="{{ route('postdeatail') }}" style="margin: 0px;">More Details</a>
                                                        </td>
                                                        <td>
                                                            <p>11-08-2023</p><br>
                                                            <a href="#"><i class="fa-regular fa-lock-keyhole"></i>Login To Apply</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            @include('layouts.welcome.footer')

 




   
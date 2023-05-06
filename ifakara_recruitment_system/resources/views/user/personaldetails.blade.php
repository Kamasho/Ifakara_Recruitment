@extends('user.userhomepage')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 style="font-family: 'Times New Roman', Times, serif">Personal Details</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Particular</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td contenteditable="true">Godfrey J. Kamasho</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td contenteditable="true">Male</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Region of Birth</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Originality</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>District of Birth</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Disability</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Country of Residence </td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Current Resident Region</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Current Resident District</td>
                                <td contenteditable="true"></td>
                            </tr>
                            <tr>
                                <td>Mobile (eg: 255710125458) </td>
                                <td contenteditable="true"></td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                      $(document).ready(function() {
                          $("td[contenteditable=true]").blur(function() {
                              var tableName = $(this).closest('table').attr('id');
                              var rowIndex = $(this).closest('tr').index();
                              var cellIndex = $(this).index();
                              var newValue = $(this).text();
                              $('#' + tableName + ' tr:eq(' + rowIndex + ') td:eq(' + cellIndex + ')').html(newValue);
                          });
                      });
                  </script>



                </div>
            </div>
        </div>
    </div>
@endsection

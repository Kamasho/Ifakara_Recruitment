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
                        <td>Godfrey J. Kamasho</td>     
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>     
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Region of Birth</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Originality</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>District of Birth</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Marital Status</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Disability</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Country of Residence </td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Current Resident Region</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Current Resident District</td>
                        <td></td>     
                      </tr>
                      <tr>
                        <td>Mobile (eg: 255710125458) </td>
                        <td></td>     
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
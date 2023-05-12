@extends('user.userhomepage')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow">
            <div class="card-header">
              
              <h3 style="float: left; font-family: 'Times New Roman', Times, serif">Working Experience</h3>
              <a style="float: right; margin-top: 5px; border:none; font-size:25px; color:black;" data-toggle="modal"
                        data-target=".bd-work-modal-lg"><i class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Institution</th>
                        <th>Position</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>    
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-work-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif">Add Working Experience</h3>
                <hr>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="">Institution/Organization</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Institution Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Job Title</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Supervisor Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Supervisor Address</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 my-3">
                                <label for="">Duties Responsibilities</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-3 my-3">
                                <label for="">Supervisor Telephone Number</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-3 my-3">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-3 my-3">
                                <label for="">Is this your Current Date</label>
                                <select name="" id="" class="form-control">
                                    <option value="">No</option>
                                    <option value="">Yes</option>
                                </select>
                            </div>
                            <div class="col-3 my-3">
                                <label for="">End Date</label>
                                <input type="date" class="form-control">
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection
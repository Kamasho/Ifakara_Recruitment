@extends('layouts.include.users.user')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <h2 style="margin-bottom: 10px;">Personal Details</h2>
            <hr>
        </div>
    </div>
    
    <div style="border-style:ridge; margin: 20px; height: 100%; width: auto; padding: 15px;">
        <table class="table">
            <thead>
              <tr>
                <th>Particular</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Full Name</td>
                <td>John Julias Kimambo</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
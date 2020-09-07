@extends('cpanel/layouts/contentLayoutMaster') 

@section('title', 'Jobs applicants') 

@section('content')
<section id="recruit">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="mb-0">Dispatched Orders</h4>
            </div>
            <div class="card-content">
              <div class="table-responsive mt-1">
                <table class="table table-hover-animation mb-0">
                  <thead>
                    <tr>
                      <th>no job</th>
                      <th>titlt</th>
                      <th>name</th>
                      <th>LOCATION</th>
                      <th>phone</th>
                      <th>data app</th>
                      <th>cv</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>121</td>
                      <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>roma roam</td>
                      <td>
                        malek test
                      </td>
                      <td>usa</td>
                      <td>
                       0943219671
                      </td>
                      <td>28/09/2020</td>
                      <td><a href="#">file</a></td>
                    </tr>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection
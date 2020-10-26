@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Recorded Issues</p>
              <h3 class="card-title">{{$issue ?? '-'}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-danger">warning</i>
                <a href="{{route('table')}}">Check issue table...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">update</i>
              </div>
              <p class="card-category">Processed Issues</p>
              <h3 class="card-title">{{$processed ?? '-'}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Fixed Issues</p>
              <h3 class="card-title"> {{$fixedissue ?? '-'}} </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Successed
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Citizens Account</p>
              <h3 class="card-title">{{$account ?? '-'}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> {{$time ?? '-'}}
              </div>
            </div>
          </div>
        </div>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Problem</h4>
            <p class="card-category">Report From People's Problem</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Id</th>
                  <th>Problem</th>
                  <th>Status</th>
                  <th>Problem Type</th>
                  <th>Report by</th>
                  <th>Update</th>
                </thead>
                @foreach($join as $m)
                <tbody>
                  <tr>
                  <td>{{ $m->id }}</td>
			            <td>{{ $m->problem_masalah }}</td>
			            <td>{{ $m->status_masalah }}</td>
			            <td>{{ $m->bidang['nama_bidang'] }}</td>
			            <td>{{ $m->user['name'] }}</td>
                  <td>
                  <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('update', $m->id) }}" data-original-title="" title="">
                    <i class="material-icons">edit</i>
                    <div class="ripple-container"></div>
                  </a>
                  </td>
                  </tr>
                 </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
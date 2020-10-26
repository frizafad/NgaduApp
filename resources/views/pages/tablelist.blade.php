@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Report Problem')])

@section('content')
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
                  <th>Created at</th>
                  <th>Updated at</th>
                </thead>
                @foreach($masalah as $m)
                <tbody>
                  <tr>
                  <td>{{ $m->id_masalah }}</td>
			            <td>{{ $m->problem_masalah }}</td>
			            <td>{{ $m->status_masalah }}</td>
			            <td>{{ $m->id_bidang }}</td>
			            <td>{{ $m->id_user }}</td>
                  <td>{{ $m->created_at }}</td>
                  <td>{{ $m->updated_at }}</td> 
                  </tr>
                 </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
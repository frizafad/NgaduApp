@extends('layouts.app', ['activePage' => 'citizen', 'titlePage' => __('Citizen Data')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Citizen Data</h4>
        <p class="card-category">This account is owned by citizen</p>
      </div>
      <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>Id</th>
                  <th>Identity Number</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                </thead>
                @foreach($warga as $w)
                <tbody>
                  <tr>
                  <td>{{ $w->id_warga }}</td>
			            <td>{{ $w->identitas_warga }}</td>
			            <td>{{ $w->nama_warga }}</td>
			            <td>{{ $w->telepon_warga }}</td>
			            <td>{{ $w->alamat_warga }}</td>
                  <td>{{ $w->created_at }}</td>
                  <td>{{ $w->updated_at }}</td> 
                  </tr>
                 </tbody>
                @endforeach
              </table>
            </div>
          </div>
    </div>
  </div>
</div>
@endsection
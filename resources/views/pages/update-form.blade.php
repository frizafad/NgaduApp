@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('store', $masalah->id) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Status Update</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('home') }}" class="btn btn-sm btn-primary">{{ __('Back') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Problem Issue') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="problem" id="input-name" aria-required="true" cols="30" rows="10" value="" disabled>{{$masalah->problem_masalah}}</textarea>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                  <div class="col-sm-7">
                  <input type="text" name="status" list="select-status" placeholder="{{$masalah->status_masalah}}" class="input-status">
                  <datalist id="select-status" name="status">
                    <div>
                      <option value="terkirim">
                      <option value="diproses">
                      <option value="selesai">
                    </div>
                  </datalist>
                  </div>
                </div>
                <br>
                <br>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <style>
  .input-status {
    width: 50%;
    padding: 10px;
    border: 1px solid #a33eb7;
    border-radius: 5px;
    color: black;
  }
  </style>
  @endsection
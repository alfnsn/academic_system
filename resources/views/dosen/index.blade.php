@extends('layouts.index')

@section('content')
  <div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Tables</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Datatables</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title">Add Row</h4>
                <a class="btn btn-primary btn-round ms-auto" href="{{ route('dosenCreate') }}">
         
                  <i class="fa fa-plus"></i>
                  Add Row
                </a>
              </div>
            </div>
            <div class="card-body">
              <!-- Modal -->
              

              <div class="table-responsive">
                <table
                  id="add-row"
                  class="display table table-striped table-hover"
                >
                  <thead>
                    <tr>
                        <th>NIK</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>BIRTH DATE</th>
                      <th style="width: 10%">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>NIK</th>
                      <th>NAME</th>
                      <th>EMAIL</th>
                      <th>BIRTH DATE</th>
                      <th>ACTION</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($lectures as $lecturer )
                    <tr>
                      <td>{{$lecturer->nik}}</td>
                      <td>{{$lecturer->name}}</td>
                      <td>{{$lecturer->email}}</td>
                      <td>{{$lecturer->birth_date}}</td>
                      <td>
                        <div class="form-button-action">
                          <button
                            type="button"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Edit Task"
                          >
                            <i class="fa fa-edit"></i>
                          </button>
                          <button
                            type="button"
                            data-bs-toggle="tooltip"
                            title=""
                            class="btn btn-link btn-danger"
                            data-original-title="Remove"
                          >
                            <i class="fa fa-times"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('ExtraCSS')
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
@endsection

@section('ExtraJS')
@endsection
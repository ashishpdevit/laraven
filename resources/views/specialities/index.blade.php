@extends('layout.layout')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
@section('content')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Speciality Management</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Specialities</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Specialities List</h3>
                                            <a class="btn btn-primary" href="{{ route('specialities.create') }}">
                                                Add</a>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                      @include('common.error-message')
                                      </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="specialities" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($specialitiesData) && !empty($specialitiesData))
                                                    @foreach ($specialitiesData as $data)
                                                        <tr>
                                                            <td>{{ $data->name }}</td>
                                                            <td>
                                                            <span class="badge @if($data->status == 'active') 
                                                            bg-success @else bg-danger @endif">
                                                            {{ucfirst($data->status)}}</span>
                                                            </td>
                                                            <td class="indexaction">
                                                                <a href="{{ route('specialities.edit', $data->id) }}"><i
                                                                        title="Edit" class="fa fa-edit"></i></a> &nbsp;
                                                                <a href="javascript:void(0)" data-toggle="modal"
                                                                data-id="{{$data->id}}" class="delete_row">
                                                                <i title="Delete" class="fa fa-trash"></i></a> &nbsp;
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="4">No Record Found!</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
@endsection
@include('common.delete',['action_url' => 'specialities.delete'])
@section('script')
<script src="{{ url('js/specialities.js') }}"></script>
@endsection




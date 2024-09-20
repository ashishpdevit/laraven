@extends('layouts.layout')
@section('contents')
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Product Management</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                @if ($errors->any())
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                        <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span>
                        </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="list-style-type: none;">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Add Product</h3>
                                    </div>
                                    
                                        <!-- /.card-header -->
                                        <form action="{{ route('products.store') }}" method="POST"
                                            enctype="multipart/form-data" id="productFormAddEdit">
                                            <div class="card-body">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label for="name">{{ __('Name') }} <span
                                                                    class="text-danger">{{ _('*') }}</span></label>
                                                            <input type="text" id="name" name="name"
                                                                value="" placeholder="Enter Product Name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>{{ __('Status') }}</label>
                                                            <select class="custom-select" id="status" name="status">
                                                                <option value="active">{{ __('Active') }}</option>
                                                                <option value="inactive">{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-success"
                                                    name="submit">{{ __('Submit') }}</button>
                                                <a class="btn btn-warning" href="{{ route('products.index') }}">
                                                    {{ __('Back') }}</a>
                                            </div>
                                        </form>
                                        <!-- /.card-body -->
                                   
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

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
    @endsection
    
@section('script')
<script src="{{ url('js/jquery.validate.min.js') }}"></script>
<script src="{{ url('js/products.js') }}"></script>
@endsection



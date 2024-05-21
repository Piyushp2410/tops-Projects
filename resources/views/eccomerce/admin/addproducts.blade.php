@extends('eccomerce.admin.layout')
@section('title_nale')
    Login Pages
@endsection
@section('dashboard')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add Product</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-login/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add Product
                    </div>
                    <div class="card-body">
                        @if (Session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" enctype="multipart/form-data" class="row g-3 ">
                            @csrf
                            <div class="col-md-12">
                                <input type="text" name="pname"
                                    class="@error('pname') is-invalid @enderror form-control" placeholder="Product Name">
                                @error('pname')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="pprice"
                                    class="@error('pprice') is-invalid @enderror form-control" placeholder="Product Price">
                                @error('pprice')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="file" name="pimg"
                                    class="@error('pimg') is-invalid @enderror form-control">
                                @error('pimg')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <textarea type="text" name="pdes" class="@error('pdes') is-invalid @enderror form-control" rows="6"
                                    placeholder="Products Description"></textarea>
                                @error('pdes')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    @endsection

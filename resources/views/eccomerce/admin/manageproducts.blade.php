@extends('eccomerce.admin.layout')
@section('title_nale')
    manage product
@endsection
@section('dashboard')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage all Product</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-login/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage all Product</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Manage Product
                    </div>
                    <div class="card-body">
                        @if (Session('del'))
                            <div class="alert alert-danger">
                                {{ session('del') }}
                            </div>
                        @endif

                        <table id="datatablesSimple">
                            <thead>
                                {{ $srno = 0 }}

                                <tr>
                                    <th>#</th>
                                    <th>pname</th>
                                    <th>pprice</th>
                                    <th>pimg</th>
                                    <th>pdes</th>
                                    <th>Action</th>
                                    {{-- <th>Edit</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{ $srno = 0 }}
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $srno = $srno + 1 }}</td>
                                        <td>{{ $row->pname }}</td>
                                        <td>{{ $row->pprice }}</td>
                                        <td><img src="{{ asset('uploads/' . $row->pimg) }}" style="height: 100px;"
                                                class="img-fluid w-50"></td>
                                        </a></td>

                                        <td>{{ $row->pdes }}</td>

                                        <td><a href='{{ URL('/admin-login/manage-product/' . $row->id) }}'
                                                class="btn btn-sm btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete Data')"><span
                                                    class="fa fa-trash"></span>

                                        <a href='{{ URL('/admin-login/add-product/' . $row->id) }}'
                                            class="btn btn-sm btn-primary"><span class="fa fa-edit"></span>
                                        </a></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    @endsection

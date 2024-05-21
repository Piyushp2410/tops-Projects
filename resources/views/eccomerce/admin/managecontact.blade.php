@extends('eccomerce.admin.layout')
@section('title_nale')
    Login Pages
@endsection
@section('dashboard')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Manage all Contacts</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/admin-login/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage all Contacts</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Manage Contacts
                    </div>
                    <div class="card-body">
                        <!-- flash data successfully message add here -->
                        @if (Session('del'))
                            <div class="alert alert-danger">
                                {{ session('del') }}
                            </div>
                        @endif
                        <table class="table table-responsive" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Contact Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{$srno=0}}
                                @foreach ($data as $row)

                                    <tr>
                                        <td>{{ $srno = $srno +1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->subjectname }}</td>
                                        <td>{{ $row->message }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td><a href='{{ URL('/admin-login/manage-contacts/' . $row->contactid) }}'
                                                class="btn btn-sm btn-danger text-white"
                                                onclick="return confirm('Are you sure to delete Data')"><span
                                                    class="fa fa-trash"></span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    @endsection

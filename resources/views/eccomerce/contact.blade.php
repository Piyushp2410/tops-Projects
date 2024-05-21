@extends('eccomerce.layout')
@section('title_name')
    Contact Page
@endsection
@section('content')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Contacts</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contacts</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <!-- validations errors messages -->
                    {{-- @if ($errors->any())
                <div class="alert alert-danger">
                   @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                   @endforeach
                </div>
            @endif --}}
                    <!-- flash data successfully message add here -->
                    @if (Session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form method="post" novalidate="novalidate">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="@error('name') is-invalid @enderror form-control p-4"
                                        name="name" id="name" placeholder="Your Name" required="required"
                                        data-validation-required-message="Please enter your name" />
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="@error('email') is-invalid @enderror form-control p-4"
                                        id="email" name="email" placeholder="Your Email" required="required"
                                        data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <select name="subject" class="@error('email') is-invalid @enderror form-control">
                                    <option value="" name="subject">-select subject-</option>
                                    @foreach ($subject as $subject1)
                                        <option value="{{ $subject1->id }}">{{ $subject1->subjectname }}</option>
                                    @endforeach
                                </select>
                                @error('email')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mt-4">
                                <textarea class="form-control p-4" rows="6" name="message" id="message" placeholder="Message"
                                    required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <input type="submit" value="Send" class="btn btn-primary btn-block py-3 px-5"
                                    id="sendMessageButton">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

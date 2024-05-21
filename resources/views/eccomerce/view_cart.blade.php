@extends('eccomerce.layout')
@section('title_name')
    Add_cart
@endsection
@section('content')
    <!-- Header Start -->
    {{-- <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Cart</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Cart</p>
        </div>
    </div>
</div> --}}
    <!-- Header End -->

    <!-- Portfolio Start -->
    <div class="shadow shadow-lg p-3 mt-5">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('assets/ecom/customer/images/portfolio-1.jpg') }}" style="height: 300px;">
            </div>

            <div class="col-md-7" style="margin-top: 50px;">
                <h3>Chocolate</h3>
                <h5>$200</h5>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolore sit ipsa ipsam commodi optio
                    consequuntur maiores laborum architecto a ab, sed doloremque dolor ratione atque, mollitia suscipit!
                    Nostrum, mollitia.</h5>
                    <a href="#" class="btn btn-sm btn-primary" style="margin-top: 50px;">Order
                        now</a>
                    <a href="#" class="btn btn-sm btn-danger" style="margin-top: 50px; ">&times;</a>
            </div>




        </div>
    </div>
    <!-- Portfolio End -->
@endsection

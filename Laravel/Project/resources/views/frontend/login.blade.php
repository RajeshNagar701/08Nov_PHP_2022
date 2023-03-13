@extends('frontend.layout.main')

@section('main_container')
@include('sweetalert::alert')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Login Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Login Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Login Us</h6>
                <h1 class="display-5">Please Feel Free To Login Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="bg-primary h-100 p-5">
                        <form action="{{url('/logincheck')}}" method="post">
						@csrf
                            <div class="row g-3">
								<div class="col-12">
                                    <input type="text" name="unm" class="form-control bg-light border-0 px-4" placeholder="Your Username" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="pass" class="form-control bg-light border-0 px-4" placeholder="Your Password" style="height: 55px;">
                                </div>
                                
                               
                                <div class="col-12">
                                    <input name="submit" class="btn btn-secondary w-100 py-3" type="submit" value="Login">
                                </div>
								<div class="col-12">
                                    <a href="{{url('/signup')}}" class="text-white w-100 py-3">If not register then click Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
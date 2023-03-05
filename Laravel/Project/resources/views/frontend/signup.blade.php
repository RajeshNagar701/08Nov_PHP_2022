@extends('frontend.layout.main')

@section('main_container')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Signup Us</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Signup Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Signup Us</h6>
                <h1 class="display-5">Please Feel Free To Signup Us</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="bg-primary h-100 p-5">
                        <form action="" method="post">
                            <div class="row g-3">
								<div class="col-12">
                                    <input type="text" name="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                </div>
								<div class="col-12">
                                    <input type="email" name="username" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="password" class="form-control bg-light border-0 px-4" placeholder="Your Password" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select name="cid" class="form-control bg-light border-0 px-4" style="height: 55px;">
										<option>Select Country</option>
									</select>
                                </div>
								
								<div class="col-12 text-white">
                                    Male :  <input type="radio" name="gender" value="Male" >
									Female : <input type="radio" name="gender" value="Female">
                                </div>
								<div class="col-12 text-white">
                                    Hindi :  <input type="checkbox" name="lag[]" value="Hindi" >
									English : <input type="checkbox" name="lag[]" value="English">
									Gujarati : <input type="checkbox" name="lag[]" value="Gujarati">
                                </div>
								<div class="col-12">
                                    <input type="file" name="file" class="form-control bg-light border-0 px-4" style="height: 55px;">
                                </div>
                               
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Login</button>
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
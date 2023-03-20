@extends('frontend.layout.main')

@section('main_container')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Edit Profile</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Edit Profile</h6>
                <h1 class="display-5">Please Feel Free To Edit Profile</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="bg-primary h-100 p-5">
                        <form action="{{url('/updateprofile/'.$data->id)}}" method="post" enctype="multipart/form-data">
							@csrf
                            <div class="row g-3">
								<div class="col-12">
                                    <input type="text" value="{{$data->name}}" name="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                </div>
								<div class="col-12">
                                    <input type="email" value="{{$data->unm}}" name="unm" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                    <select name="cid" class="form-control bg-light border-0 px-4" style="height: 55px;">
										<option>Select Country</option>
										@foreach($countrydata as $d)
											@if($d->id==$data->cid)	
											<option value="{{$d->id}}" selected>{{$d->cnm}}</option>
											@else
											<option value="{{$d->id}}">{{$d->cnm}}</option>
											@endif
										@endforeach
									</select>
                                </div>
								
								<div class="col-12 text-white">
									
                                    Male :  <input type="radio" name="gen" value="Male" 
									<?php
									$gen=$data->gen;
									if($gen=="Male")
									{
										echo "checked";
									}										
									?>>
									Female : <input type="radio" name="gen" value="Female"
									<?php
									$gen=$data->gen;
									if($gen=="Female")
									{
										echo "checked";
									}										
									?>>
                                </div>
								<div class="col-12 text-white">
                                    Hindi :  <input type="checkbox" name="lag[]" value="Hindi" <?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('Hindi',$lag_arr))
									{
										echo "checked";
									}										
									?>>
									English : <input type="checkbox" name="lag[]" value="English"
									<?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('English',$lag_arr))
									{
										echo "checked";
									}										
									?>>
									Gujarati : <input type="checkbox" name="lag[]" value="Gujarati" 
									<?php
									$lag=$data->lag;
									$lag_arr=explode(',',$lag);
									if(in_array('Gujarati',$lag_arr))
									{
										echo "checked";
									}										
									?>>
                                </div>
								<div class="col-12">
                                    <input type="file" name="file" class="form-control bg-light border-0 px-4" style="height: 55px;">
									<img src="{{url('upload/customer/'.$data->file)}}" width="50px">
                                </div>
                               
                                <div class="col-12">
                                    <input class="btn btn-secondary w-100 py-3" type="submit" name="submit" value="Save">
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
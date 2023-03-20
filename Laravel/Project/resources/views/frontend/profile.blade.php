@extends('frontend.layout.main')

@section('main_container')
@include('sweetalert::alert')
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
                    <div class=" h-100 p-5">
                        <table class="table">
							<tr>
								<td colspan="2" align="center">
									<img src="{{url('upload/customer/'.$data->file)}}" width="50px">
								</td>
							</tr>
							<tr>
								<td>id</td>
								<td>{{$data->id}}</td>
							</tr>
							<tr>
								<td>Name</td>
								<td>{{$data->name}}</td>
							</tr>
							<tr>
								<td>Username</td>
								<td>{{$data->unm}}</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>{{$data->gen}}</td>
							</tr>
							<tr>
								<td>Launguages</td>
								<td>{{$data->lag}}</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<a href="{{url('editprofile/'.$data->id)}}">Edit Profile</a>
								</td>
							</tr>
							
						</table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
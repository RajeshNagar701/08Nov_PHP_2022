@extends('frontend.layout.main')

@section('main_container')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Blog Grid</h1>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Blog Grid</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-1.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-2.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-3.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-1.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-2.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-3.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-1.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-2.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-3.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/blog-1.jpg')}}" alt="">
                            <a class="blog-overlay" href="">
                                <h4 class="text-white">Lorem elitr magna stet eirmod labore amet</h4>
                                <span class="text-white fw-bold">Jan 01, 2050</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg justify-content-center m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Design</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Keyword Research</a>
                        <a class="fs-5 fw-bold text-white" href="#"><i class="bi bi-arrow-right me-2"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="bg-primary p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{url('frontend/img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{url('frontend/img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{url('frontend/img/blog-3.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="{{url('frontend/img/blog-1.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0" src="{{url('frontend/img/blog-2.jpg')}}" style="width: 75px;" alt="">
                            <a href="" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Lorem ipsum dolor sit amet elit
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{url('frontend/img/blog-1.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                        <a href="" class="btn btn-primary m-1">Design</a>
                        <a href="" class="btn btn-primary m-1">Development</a>
                        <a href="" class="btn btn-primary m-1">Marketing</a>
                        <a href="" class="btn btn-primary m-1">SEO</a>
                        <a href="" class="btn btn-primary m-1">Writing</a>
                        <a href="" class="btn btn-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-secondary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
 @endsection 
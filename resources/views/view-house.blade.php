@extends('layouts.app')

@section('dark')@show
    
@section('content')
      <!-- Start -->
      <section class="section mt-5 pt-4">
        <div class="container-fluid mt-2">
            <div class="row g-2">
                <div class="col-md-6">
                    <a href="{{$house->images?->first()->path}}" class="lightbox" title="">
                        <img src="{{$house->images?->first()->path}}" class="img-fluid rounded-3 shadow w-100" alt="">
                    </a>
                </div><!--end col-->

                <div class="col-md-6">
                    <div class="row g-2">
                        @foreach ($house->images->take(-4) as $image)
                        <div class="col-6">
                            <a href="{{$image->path}}" class="lightbox" title="">
                                <img src="{{$image->path}}" class="img-fluid rounded-3 shadow w-100" alt="">
                            </a>
                        </div>
                        @endforeach
                        

                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row g-4">
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="section-title">
                        <h4 class="title mb-0">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h4>
                        
                        <ul class="list-unstyled mb-0 py-3">
                            <li class="list-inline-item">
                                <span class="d-flex align-items-center me-4">
                                    <i class="mdi mdi-arrow-expand-all fs-4 me-2 text-primary"></i>
                                    <span class="text-muted fs-5">8000sqf</span>
                                </span>
                            </li>

                            <li class="list-inline-item">
                                <span class="d-flex align-items-center me-4">
                                    <i class="mdi mdi-bed fs-4 me-2 text-primary"></i>
                                    <span class="text-muted fs-5">4 Beds</span>
                                </span>
                            </li>

                            <li class="list-inline-item">
                                <span class="d-flex align-items-center">
                                    <i class="mdi mdi-shower fs-4 me-2 text-primary"></i>
                                    <span class="text-muted fs-5">4 Baths</span>
                                </span>
                            </li>
                        </ul>

                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        <p class="text-muted">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <p class="text-muted">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>

                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" class="rounded-3" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-5 col-12">
                    <div class="rounded-3 shadow bg-white sticky-bar p-4">
                        <h5 class="mb-3">Price:</h5>

                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">$ 45,231</h5>
                            <span class="badge bg-primary">For Sale</span>
                        </div>

                        <div class="">
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <span class="small text-muted">Days on Towntor</span>
                                <span class="small">124 Days</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <span class="small text-muted">Price per sq ft</span>
                                <span class="small">$ 186</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <span class="small text-muted">Monthly Payment (estimate)</span>
                                <span class="small">$ 1497/Monthly</span>
                            </div>
                        </div>

                        <div class="d-flex mt-3">
                            <a href="javascript:void(0)" class="btn btn-primary w-100 me-2">Book Now</a>
                            <a href="javascript:void(0)" class="btn btn-primary w-100">Offer now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Related Properties</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-12">
                    <div class="tiny-slide-three">
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/1.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
    
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                        
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/2.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                        
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/3.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">3723 SANDBAR DR, Addis, LA 70710, USA</a>
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                        
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/4.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                        
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/5.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                        
                        <div class="tiny-slide">
                            <div class="card property border-0 shadow position-relative overflow-hidden rounded-3 m-3">
                                <div class="property-image position-relative overflow-hidden shadow">
                                    <img src="{{asset('images/property/6.jpg')}}"  class="img-fluid" alt="">
                                    <ul class="list-unstyled property-icon">
                                        <li class=""><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="home" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="camera" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content p-4">
                                    <a href="property-detail.html" class="title fs-5 text-dark fw-medium">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                                    <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">8000sqf</span>
                                        </li>
        
                                        <li class="d-flex align-items-center me-3">
                                            <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Beds</span>
                                        </li>
        
                                        <li class="d-flex align-items-center">
                                            <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                            <span class="text-muted">4 Baths</span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                                        <li class="list-inline-item mb-0">
                                            <span class="text-muted">Price</span>
                                            <p class="fw-medium mb-0">$5000</p>
                                        </li>
                                        <li class="list-inline-item mb-0 text-muted">
                                            <span class="text-muted">Rating</span>
                                            <ul class="fw-medium text-warning list-unstyled mb-0">
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                                                <li class="list-inline-item mb-0 text-dark">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end items-->
                        </div><!--end col-->
                    </div>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
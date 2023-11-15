@extends('layouts.app')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table align-items-center w-100 pb-5" style="background: url('images/bg/01.jpg') top;">
    <div class="bg-overlay bg-linear-gradient-2"></div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <div class="title-heading text-center">
                    <h4 class="heading fw-bold text-white title-dark mb-3">ভাড়াপাই.কম</h4>
                    <p class="para-desc text-white-50 title-dark mx-auto mb-0">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div>
                
                <div class="mt-4">
                    
                    <div class="bg-white rounded-3 sm-rounded-0 shadow" >
                        
                        <div class="card border-0" >
                            <form class="card-body text-start">
                                <div class="registration-form text-dark text-start">
                                    <div class="row g-lg-0">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label fs-6">Search :</label>
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                    <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label fs-6">Select Area:</label>
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                    <select class="form-select" id="choices-catagory-buy">
                                                        <option>Area</option>
                                                        @foreach (\App\Models\House::AREA as $key => $price)
                                                            <option value="{{$key}}" >{{$price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label fs-6">Min Price :</label>
                                                <div class="filter-search-form position-relative filter-border">
                                                    <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                    <select class="form-select" id="choices-min-price-buy">
                                                        <option>Min Price</option>
                                                        @foreach (\App\Models\House::PRICE_RANGE as $key => $price)
                                                            <option value="{{$key}}" >{{$price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <div class="mb-3">
                                                <label class="form-label fs-6">Max Price :</label>
                                                <div class="filter-search-form position-relative">
                                                    <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                    <select class="form-select" id="choices-max-price-buy">
                                                        <option>Max Price</option>
                                                        @foreach (\App\Models\House::PRICE_RANGE as $key => $price)
                                                            <option value="{{$key}}" >{{$price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-3 col-md-6 col-12">
                                            <input type="submit" id="search" name="search" style="height: 48px;" class="btn btn-primary searchbtn w-100" value="Search">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </form><!--end form-->
                        </div><!--end teb pane-->
                        

                        
                    </div><!--end tab content-->
                </div>
            </div>
        </div><!--end row-->

        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1 g-4 mt-0">
            <div class="col">
                <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                    <img src="{{asset('images/icons/house.png')}}"  class="avatar avatar-small" alt="">

                    <div class="mt-4">
                        <a href="#" class="title text-dark fs-5 fw-medium">Houses</a>
                        <p class="text-muted small mb-0">46 Listings</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col">
                <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                    <img src="{{asset('images/icons/bungalow.png')}}"  class="avatar avatar-small" alt="">

                    <div class="mt-4">
                        <a href="#" class="title text-dark fs-5 fw-medium">Villas</a>
                        <p class="text-muted small mb-0">124 Listings</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col">
                <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                    <img src="{{asset('images/icons/buildings.png')}}"  class="avatar avatar-small" alt="">

                    <div class="mt-4">
                        <a href="#" class="title text-dark fs-5 fw-medium">Apartments</a>
                        <p class="text-muted small mb-0">265 Listings</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col">
                <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                    <img src="{{asset('images/icons/commercial.png')}}"  class="avatar avatar-small" alt="">

                    <div class="mt-4">
                        <a href="#" class="title text-dark fs-5 fw-medium">Commercial</a>
                        <p class="text-muted small mb-0">452 Listings</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col">
                <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                    <img src="{{asset('images/icons/industries.png')}}"  class="avatar avatar-small" alt="">

                    <div class="mt-4">
                        <a href="#" class="title text-dark fs-5 fw-medium">Industries</a>
                        <p class="text-muted small mb-0">12 Listings</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
<!-- Hero End -->

<!-- Start -->
<section class="section pt-5">
    


    <div class="container ">
    

        <div class="row g-4 mt-0">

            @foreach ($houses as $house)
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                    <div class="property-image position-relative overflow-hidden shadow">
                        @if ($house->firstImage)
                            
                        <img src="{{$house->firstImage->path}}" class="img-fluid" alt="">
                        @endif
                        <ul class="list-unstyled property-icon">
                            <li class="mt-1"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><i data-feather="heart" class="icons"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body content p-4">
                        <a href="{{ route('houses.show',$house) }}" class="title fs-5 text-dark fw-medium">{{$house->address}}</a>

                        <ul class="list-unstyled mt-3 py-3 border-top border-bottom d-flex align-items-center justify-content-between">
                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-arrow-expand-all fs-5 me-2 text-primary"></i>
                                <span class="text-muted">{{$house->size_sqm}}sqf</span>
                            </li>

                            <li class="d-flex align-items-center me-3">
                                <i class="mdi mdi-bed fs-5 me-2 text-primary"></i>
                                <span class="text-muted">{{$house->bedrooms}} Beds</span>
                            </li>

                            <li class="d-flex align-items-center">
                                <i class="mdi mdi-shower fs-5 me-2 text-primary"></i>
                                <span class="text-muted">{{$house->bathrooms}} Baths</span>
                            </li>
                        </ul>
                        <ul class="list-unstyled d-flex justify-content-between mt-2 mb-0">
                            <li class="list-inline-item mb-0">
                                <span class="text-muted">Price</span>
                                <p class="fw-medium mb-0">${{$house->rent_amount}}</p>
                            </li>
                            <li class="list-inline-item mb-0 text-muted">
                                <a class="btn btn-primary mt-2" href="{{ route('houses.show',$house) }}" wire:navigate>
                                    See Details
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--end items-->
            </div><!--end col-->
            @endforeach
            
            
        

            <div class="col-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="grid.html" class="mt-3 fs-6 text-primary">View More Properties <i class="mdi mdi-arrow-right align-middle"></i></a>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->


    
</section><!--end section-->
<!-- End -->
@endsection
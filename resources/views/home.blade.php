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
                            <ul class="nav nav-pills bg-white shadow border-bottom p-3 flex-row d-md-inline-flex nav-justified mb-0 rounded-top-3 position-relative overflow-hidden" id="pills-tab" role="tablist">
                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-4 active rounded-3 fw-medium" id="buy-login" data-bs-toggle="pill" href="#buy" role="tab" aria-controls="buy" aria-selected="false">
                                        Buy
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-4 rounded-3 fw-medium" id="sold-login" data-bs-toggle="pill" href="#sold" role="tab" aria-controls="sold" aria-selected="false">
                                        Sell
                                    </a><!--end nav link-->
                                </li><!--end nav item-->

                                <li class="nav-item m-1">
                                    <a class="nav-link py-2 px-4 rounded-3 fw-medium" id="rent-login" data-bs-toggle="pill" href="#rent" role="tab" aria-controls="rent" aria-selected="false">
                                        Rent
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul>
                            <div class="tab-content bg-white rounded-3 sm-rounded-0 shadow" id="pills-tabContent">
                                <div class="card border-0 tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-login">
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
                                                        <label class="form-label fs-6">Select Categories:</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-catagory-buy">
                                                                <option>Houses</option>
                                                                <option>Apartment</option>
                                                                <option>Offices</option>
                                                                <option>Townhome</option>
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
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
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
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
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
    
                                <div class="card border-0 tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-login">
                                    <form class="card-body text-start">
                                        <div class="registration-form text-dark text-start">
                                            <div class="row g-lg-0">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Search :</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                            <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Select Categories:</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-catagory-sell">
                                                                <option>Houses</option>
                                                                <option>Apartment</option>
                                                                <option>Offices</option>
                                                                <option>Townhome</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
    
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Min Price :</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-min-price-sell">
                                                                <option>Min Price</option>
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
    
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Max Price :</label>
                                                        <div class="filter-search-form position-relative">
                                                            <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-max-price-sell">
                                                                <option>Max Price</option>
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
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
    
                                <div class="card border-0 tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-login">
                                    <form class="card-body text-start">
                                        <div class="registration-form text-dark text-start">
                                            <div class="row g-lg-0">
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Search :</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="search" class="fea icon-ex-md icons"></i>
                                                            <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
                                                
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Select Categories:</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="home" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-catagory-rent">
                                                                <option>Houses</option>
                                                                <option>Apartment</option>
                                                                <option>Offices</option>
                                                                <option>Townhome</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
    
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Min Price :</label>
                                                        <div class="filter-search-form position-relative filter-border">
                                                            <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-min-price-rent">
                                                                <option>Min Price</option>
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
    
                                                <div class="col-lg-3 col-md-6 col-12">
                                                    <div class="mb-3 text-start">
                                                        <label class="form-label fs-6">Max Price :</label>
                                                        <div class="filter-search-form position-relative">
                                                            <i data-feather="dollar-sign" class="fea icon-ex-md icons"></i>
                                                            <select class="form-select" id="choices-max-price-rent">
                                                                <option>Max Price</option>
                                                                <option>500</option>
                                                                <option>1000</option>
                                                                <option>2000</option>
                                                                <option>3000</option>
                                                                <option>4000</option>
                                                                <option>5000</option>
                                                                <option>6000</option>
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
                            <img src="images/icons/house.png" class="avatar avatar-small" alt="">

                            <div class="mt-4">
                                <a href="#" class="title text-dark fs-5 fw-medium">Houses</a>
                                <p class="text-muted small mb-0">46 Listings</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col">
                        <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                            <img src="images/icons/bungalow.png" class="avatar avatar-small" alt="">

                            <div class="mt-4">
                                <a href="#" class="title text-dark fs-5 fw-medium">Villas</a>
                                <p class="text-muted small mb-0">124 Listings</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col">
                        <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                            <img src="images/icons/buildings.png" class="avatar avatar-small" alt="">

                            <div class="mt-4">
                                <a href="#" class="title text-dark fs-5 fw-medium">Apartments</a>
                                <p class="text-muted small mb-0">265 Listings</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col">
                        <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                            <img src="images/icons/commercial.png" class="avatar avatar-small" alt="">

                            <div class="mt-4">
                                <a href="#" class="title text-dark fs-5 fw-medium">Commercial</a>
                                <p class="text-muted small mb-0">452 Listings</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col">
                        <div class="categories position-relative overflow-hidden rounded-3 p-4 text-center bg-white">
                            <img src="images/icons/industries.png" class="avatar avatar-small" alt="">

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
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/1.jpg" class="img-fluid" alt="">
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
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/2.jpg" class="img-fluid" alt="">
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
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/3.jpg" class="img-fluid" alt="">
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
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/4.jpg" class="img-fluid" alt="">
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
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/5.jpg" class="img-fluid" alt="">
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
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card property border-0 shadow position-relative overflow-hidden rounded-3">
                            <div class="property-image position-relative overflow-hidden shadow">
                                <img src="images/property/6.jpg" class="img-fluid" alt="">
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
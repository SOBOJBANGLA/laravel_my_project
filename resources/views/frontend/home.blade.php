@extends('frontend.layouts.app')

@section('title','Home Page')

@section('content')
<section class="bg-half-260 d-table w-100" style="background: url('images/hero/bg.jpg');">
  <div class="bg-overlay bg-primary-gradient-overlay"></div>
  <div class="container">
      <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
              <div class="title-heading text-center">
                  <h1 class="heading text-white fw-bold">Find & Hire Experts <br> for any Job</h1>
                  <p class="para-desc text-white-50 mx-auto mb-0">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>
              
                  <div class="d-md-flex justify-content-between align-items-center bg-white shadow rounded p-2 mt-4">
                      <form class="card-body text-start">
                          <div class="registration-form text-dark text-start">
                              <div class="row g-lg-0">
                                  <div class="col-lg-3 col-md-6 col-12">
                                      <div class="mb-3 mb-sm-0">
                                          <label class="form-label d-none fs-6">Search :</label>
                                          <div class="filter-search-form position-relative filter-border">
                                              <i data-feather="search" class="fea icon-20 icons"></i>
                                              <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                          </div>
                                      </div>
                                  </div><!--end col-->
                                  
                                  <div class="col-lg-3 col-md-6 col-12">
                                      <div class="mb-3 mb-sm-0">
                                          <label class="form-label d-none fs-6">Location:</label>
                                          <div class="filter-search-form position-relative filter-border">
                                              <i data-feather="map-pin" class="fea icon-20 icons"></i>
                                              <select class="form-select" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
                                                  <option value="AF">Afghanistan</option>
                                                  <option value="AZ">Azerbaijan</option>
                                                  <option value="BS">Bahamas</option>
                                                  <option value="BH">Bahrain</option>
                                                  <option value="CA">Canada</option>
                                                  <option value="CV">Cape Verde</option>
                                                  <option value="DK">Denmark</option>
                                                  <option value="DJ">Djibouti</option>
                                                  <option value="ER">Eritrea</option>
                                                  <option value="EE">Estonia</option>
                                                  <option value="GM">Gambia</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div><!--end col-->

                                  <div class="col-lg-3 col-md-6 col-12">
                                      <div class="mb-3 mb-sm-0">
                                          <label class="form-label d-none fs-6">Type :</label>
                                          <div class="filter-search-form relative filter-border">
                                              <i data-feather="briefcase" class="fea icon-20 icons"></i>
                                              <select class="form-select" data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
                                                  <option selected="" value="1">Full Time</option>
                                                  <option value="2">Part Time</option>
                                                  <option value="3">Freelancer</option>
                                                  <option value="4">Remote Work</option>
                                                  <option value="5">Office Work</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div><!--end col-->

                                  <div class="col-lg-3 col-md-6 col-12">
                                      <input type="submit" id="search" name="search" style="height: 60px;" class="btn btn-primary searchbtn w-100" value="Search">
                                  </div><!--end col-->
                              </div><!--end row-->
                          </div>
                      </form><!--end form-->
                  </div>

                  <div class="mt-2">
                      <span class="text-white-50"><span class="text-white">Popular Searches :</span> Designer, Developer, Web, IOS, PHP Senior Engineer</span>
                  </div>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
  <div class="shape overflow-hidden text-white">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
  </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
  <div class="container">
      <div class="row justify-content-center mb-4 pb-2">
          <div class="col-12">
              <div class="section-title text-center">
                  <h4 class="title mb-3">Trending Services</h4>
                  <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>
          </div><!--end col-->
      </div><!--end row-->

      <div class="row">
          <div class="col-12 mt-4">
              <div class="tiny-five-item">
                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/01.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">Product & Branding Design</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/02.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">Wordpress Development</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/03.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">Audio & Video Editing</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/04.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">Admin & Customer Support</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/05.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">UX / UI Designer</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->

                  <div class="tiny-slide">
                      <div class="card features rounded shadow position-relative overflow-hidden m-2">
                          <div class="card-body p-0">
                              <div class="card-img">
                                  <img src="images/work/06.jpg" class="img-fluid" alt="">
                                  <div class="card-overlay"></div>
                              </div>

                              <div class="position-absolute bottom-0 start-0 m-3">
                                  <a href="" class="title h5 text-white">Digital Marketing</a>
                              </div>
                          </div>
                      </div>
                  </div><!--end col-->
              </div>
          </div>
      </div>
  </div><!--end container-->

  <div class="container mt-100 mt-60">
      <div class="row g-4 align-items-center">
          <div class="col-lg-6 col-md-6 mb-5">
              <div class="about-left">
                  <div class="position-relative shadow rounded img-one">
                      <img src="images/about/ab01.jpg" class="img-fluid rounded" alt="work-image">
                  </div>

                  <div class="img-two shadow rounded p-2 bg-white">
                      <img src="images/about/ab02.jpg" class="img-fluid rounded" alt="work-image">

                      <div class="position-absolute top-0 start-50 translate-middle">
                          <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                              <i class="mdi mdi-play mdi-24px text-primary"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div><!--end col-->

          <div class="col-lg-6 col-md-6">
              <div class="section-title ms-lg-5">
                  <h4 class="title mb-3">Millions of jobs. <br> Find the one that's right for you.</h4>
                  <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              
                  <ul class="list-unstyled text-muted mb-0 mt-3">
                      <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                      <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                      <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                  </ul>

                  <div class="mt-4">
                      <a href="aboutus.html" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                  </div>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->

  <div class="container mt-100 mt-60">
      <div class="row justify-content-center mb-4 pb-2">
          <div class="col-12">
              <div class="section-title text-center">
                  <h4 class="title mb-3">Popular Job Listing</h4>
                  <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>
          </div><!--end col-->
      </div><!--end row-->

      <div class="row g-4 mt-0">
        @foreach ($jobs as $item)
          <div class="col-12">
              <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                  <div class="d-flex align-items-center w-310px">
                      <img src="images/company/circle-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                      <div class="ms-3">
                          <a href="job-detail-one.html" class="h5 title text-dark">{{$item->title}}</a>
                      </div>
                  </div>

                  <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                      <span class="badge bg-soft-primary rounded-pill">{{$item->jobtype->jobtype_name}}</span>
                      <span class="text-muted d-flex align-items-center fw-medium mt-md-2">{{$item->category->category_name}}</span>
                  </div>

                  <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                      <span class="text-muted d-flex align-items-center"><i data-feather="map-pin" class="fea icon-sm me-1 align-middle"></i>{{$item->location->location_name}}</span>
                      <span class="d-flex fw-medium mt-md-2">{{$item->salary}}</span>
                  </div>

                  <div class="mt-3 mt-md-0">
                      <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                      <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                  </div>
              </div>
          </div><!--end col-->
          @endforeach
          <!--end col-->

          <div class="col-12">
              <div class="text-center">
                  <a href="job-list-one.html" class="btn btn-link primary text-muted">See More Jobs <i class="mdi mdi-arrow-right"></i></a>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->

  <div class="container mt-100 mt-60">
      <div class="row g-4 align-items-center">
          <div class="col-lg-6 col-md-6 mb-5  order-md-2 order-1">
              <div class="about-right">
                  <div class="position-relative shadow rounded img-one">
                      <img src="images/about/ab03.jpg" class="img-fluid rounded" alt="work-image">
                  </div>

                  <div class="img-two shadow rounded p-2 bg-white">
                      <img src="images/about/ab04.jpg" class="img-fluid rounded" alt="work-image">

                      <div class="position-absolute top-0 start-50 translate-middle">
                          <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                              <i class="mdi mdi-play mdi-24px text-primary"></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div><!--end col-->

          <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0 order-md-1 order-2">
              <div class="section-title mb-4 me-lg-5">
                  <h4 class="title mb-3">Find Best Companies.</h4>
                  <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>

              <div class="row g-4 mt-0">
                @foreach ($companies as $item)
                  <div class="col-md-6">
                      <div class="employer-card rounded shadow p-2 bg-light">
                          <div class="d-flex align-items-center">
                              <img src="images/company/google-logo.png" class="avatar avatar-md-sm rounded shadow p-2 bg-white" alt="">

                              <div class="content ms-3">
                                  <a href="employer-profile.html" class="h5 title text-dark">{{$item->name}}</a>
                                  <span class="text-muted d-flex align-items-center small mt-1">{{$item->address}}</span>
                              </div>
                          </div>
                      </div>
                  </div>

                  @endforeach
              </div>

              <div class="mt-4">
                  <a href="employers.html" class="btn btn-link primary text-muted">See More Companies <i class="mdi mdi-arrow-right align-middle"></i></a>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->

  <div class="container mt-100 mt-60">
      <div class="row justify-content-center">
          <div class="col">
              <div class="section-title text-center mb-4 pb-2">
                  <h4 class="title mb-3">Latest Blog or News</h4>
                  <p class="text-muted para-desc mb-0 mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>
          </div><!--end col-->
      </div><!--end row-->

      <div class="row g-4 mt-0">
          <div class="col-lg-4 col-md-6">
              <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                  <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                      <div class="position-relative overflow-hidden">
                          <img src="images/blog/01.jpg" class="img-fluid" alt="">
                          <div class="card-overlay"></div>
                      </div>
                  </div>

                  <div class="card-body blog-content position-relative p-0">
                      <div class="blog-tag px-4">
                          <a href="" class="badge bg-primary rounded-pill">Arts</a>
                      </div>
                      <div class="p-4">
                          <ul class="list-unstyled text-muted small mb-2">
                              <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                              <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                          </ul>

                          <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">11 Tips to Help You Get New Clients Through Cold Calling</a>
                          
                          <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                              <li class="list-inline-item me-2"><a href="" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                              <li class="list-inline-item"><span class="text-dark">By</span> <a href="" class="text-muted link-title">Google</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div><!--end col-->

          <div class="col-lg-4 col-md-6">
              <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                  <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                      <div class="position-relative overflow-hidden">
                          <img src="images/blog/02.jpg" class="img-fluid" alt="">
                          <div class="card-overlay"></div>
                      </div>
                  </div>

                  <div class="card-body blog-content position-relative p-0">
                      <div class="blog-tag px-4">
                          <a href="" class="badge bg-primary rounded-pill">Illustration</a>
                      </div>
                      <div class="p-4">
                          <ul class="list-unstyled text-muted small mb-2">
                              <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                              <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                          </ul>

                          <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">DigitalOcean launches first Canadian data centre in Toronto</a>
                          
                          <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                              <li class="list-inline-item me-2"><a href="" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                              <li class="list-inline-item"><span class="text-dark">By</span> <a href="" class="text-muted link-title">Facebook</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div><!--end col-->
          
          <div class="col-lg-4 col-md-6">
              <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                  <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                      <div class="position-relative overflow-hidden">
                          <img src="images/blog/03.jpg" class="img-fluid" alt="">
                          <div class="card-overlay"></div>
                      </div>
                  </div>

                  <div class="card-body blog-content position-relative p-0">
                      <div class="blog-tag px-4">
                          <a href="" class="badge bg-primary rounded-pill">Music</a>
                      </div>
                      <div class="p-4">
                          <ul class="list-unstyled text-muted small mb-2">
                              <li class="d-inline-flex align-items-center me-2"><i data-feather="calendar" class="fea icon-ex-sm me-1 text-dark"></i>31st October 2023</li>
                              <li class="d-inline-flex align-items-center"><i data-feather="clock" class="fea icon-ex-sm me-1 text-dark"></i>5 min read</li>
                          </ul>

                          <a href="blog-detail.html" class="title fw-semibold fs-5 text-dark">Using Banner Stands To Increase Trade Show Traffic</a>
                          
                          <ul class="list-unstyled d-flex justify-content-between align-items-center text-muted mb-0 mt-3">
                              <li class="list-inline-item me-2"><a href="" class="btn btn-link primary text-dark">Read Now <i class="mdi mdi-arrow-right"></i></a></li>
                              <li class="list-inline-item"><span class="text-dark">By</span> <a href="" class="text-muted link-title">Linkedin</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->
</section><!--end section-->
<!-- End -->
@endsection
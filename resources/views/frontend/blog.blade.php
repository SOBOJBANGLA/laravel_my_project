@extends('frontend.layouts.app')

@section('title','Blog')

@section('content')
<section class="bg-half-170 d-table w-100" style="background: url('images/hero/bg.jpg');">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Latest News</p>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Blogs & News</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ul>
            </nav>
        </div>
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
        <div class="row g-4">
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

            <div class="col-lg-4 col-md-6">
                <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                    <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                        <div class="position-relative overflow-hidden">
                            <img src="images/blog/04.jpg" class="img-fluid" alt="">
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
                            <img src="images/blog/05.jpg" class="img-fluid" alt="">
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
                            <img src="images/blog/06.jpg" class="img-fluid" alt="">
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

            <div class="col-lg-4 col-md-6">
                <div class="card blog blog-primary shadow rounded overflow-hidden border-0">
                    <div class="card-img blog-image position-relative overflow-hidden rounded-0">
                        <div class="position-relative overflow-hidden">
                            <img src="images/blog/07.jpg" class="img-fluid" alt="">
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
                            <img src="images/blog/08.jpg" class="img-fluid" alt="">
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
                            <img src="images/blog/09.jpg" class="img-fluid" alt="">
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

        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <ul class="pagination justify-content-center mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-left fs-6"></i></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="mdi mdi-chevron-right fs-6"></i></span>
                        </a>
                    </li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection
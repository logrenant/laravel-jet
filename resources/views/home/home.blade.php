@extends('home.main')
@section('title', 'Home')
@section('content')
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="position-relative">
            <!-- Main Slider -->
            <div id="heroSlider" class="js-slick-carousel slick slick-equal-height bg-light"
                 data-hs-slick-carousel-options='{
             "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-left slick-arrow-centered-y d-none d-sm-inline-flex shadow-soft rounded-circle ml-sm-2 ml-xl-4\"></span>",
             "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-right slick-arrow-centered-y d-none d-sm-inline-flex shadow-soft rounded-circle mr-sm-2 mr-xl-4\"></span>",
             "fade": true,
             "infinite": true,
             "autoplaySpeed": 7000,
             "asNavFor": "#heroSliderNav"
           }'>
                <!-- Slide -->
                <div class="js-slide">
                    <div class="container space-top-2 space-bottom-3">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                                <div class="mb-6">
                                    <h1 class="display-4 mb-4">Front original design cap</h1>
                                    <p>As well as being game-changers when it comes to technical innovation, Front has some of the bestselling cap in its locker.</p>
                                </div>
                                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$59 - Add to Cart</a>
                                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="w-85 mx-auto">
                                    <img class="img-fluid" src="../../assets/img/mockups/img5.png" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="js-slide">
                    <div class="container space-top-2 space-bottom-3">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                                <div class="mb-6">
                                    <h2 class="display-4 mb-4">Apple iPad Pro</h2>
                                    <p>It's all new, all screen, and all powerful. Completely redesigned and packed with our most advanced technology, it will make you rethink what iPad is capable of.</p>
                                </div>
                                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$799 - Add to Cart</a>
                                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="w-85 mx-auto">
                                    <img class="img-fluid" src="../../assets/img/mockups/img6.png" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide -->

                <!-- Slide -->
                <div class="js-slide">
                    <div class="container space-top-2 space-bottom-3">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                                <div class="mb-6">
                                    <h3 class="display-4 mb-4">Celio hoodie</h3>
                                    <p>Founded in 1985, French label Celio channels 30 years of expertise into its contemporary menswear range. Expect fly style for a city or beach with its denim shorts, chinos and printed jersey.</p>
                                </div>
                                <a class="btn btn-primary btn-pill transition-3d-hover px-5 mr-2" href="#">$15 - Add to Cart</a>
                                <a class="btn btn-icon btn-outline-primary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="w-85 mx-auto">
                                    <img class="img-fluid" src="../../assets/img/mockups/img1.png" alt="Image Description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide -->
            </div>
            <!-- End Main Slider -->

            <!-- Slider Nav -->
            <div class="position-absolute bottom-0 w-100">
                <div class="container space-bottom-1">
                    <div id="heroSliderNav" class="js-slick-carousel slick slick-transform-off max-w-27rem mx-auto"
                         data-hs-slick-carousel-options='{
                 "infinite": true,
                 "autoplaySpeed": 7000,
                 "slidesToShow": 3,
                 "isThumbs": true,
                 "isThumbsProgressCircle": true,
                 "thumbsProgressOptions": {
                   "color": "#377dff",
                   "width": 8
                 },
                 "thumbsProgressContainer": ".js-slick-thumb-progress",
                 "asNavFor": "#heroSlider"
               }'>
                        <div class="js-slide p-1">
                            <a class="js-slick-thumb-progress d-block avatar avatar-circle border p-1" href="javascript:;">
                                <img class="avatar-img" src="../../assets/img/100x100/img13.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide p-1">
                            <a class="js-slick-thumb-progress d-block avatar avatar-circle border p-1" href="javascript:;">
                                <img class="avatar-img" src="../../assets/img/100x100/img14.jpg" alt="Image Description">
                            </a>
                        </div>
                        <div class="js-slide p-1">
                            <a class="js-slick-thumb-progress d-block avatar avatar-circle border p-1" href="javascript:;">
                                <img class="avatar-img" src="../../assets/img/100x100/img15.jpg" alt="Image Description">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider Nav -->
        </div>
        <!-- End Hero Section -->

        <!-- Features Section -->
        <div class="border-bottom">
            <div class="container space-2">
                <div class="row">
                    <div class="col-md-4 mb-7 mb-md-0">
                        <!-- Contacts -->
                        <div class="media">
                            <figure class="w-100 max-w-8rem mr-4">
                                <img class="img-fluid" src="../../assets/svg/icons/icon-4.svg" alt="SVG">
                            </figure>
                            <div class="media-body">
                                <h4 class="mb-1">24/7 Support</h4>
                                <p class="font-size-1 mb-0">Contact us 24 hours a day, 7 days a week.</p>
                            </div>
                        </div>
                        <!-- End Contacts -->
                    </div>

                    <div class="col-md-4 mb-7 mb-md-0">
                        <!-- Contacts -->
                        <div class="media">
                            <figure class="w-100 max-w-8rem mr-4">
                                <img class="img-fluid" src="../../assets/svg/icons/icon-64.svg" alt="SVG">
                            </figure>
                            <div class="media-body">
                                <h4 class="mb-1">30 Days return</h4>
                                <p class="font-size-1 mb-0">We offer you a full refund within 30 days of purchase.</p>
                            </div>
                        </div>
                        <!-- End Contacts -->
                    </div>

                    <div class="col-md-4">
                        <!-- Contacts -->
                        <div class="media">
                            <figure class="w-100 max-w-8rem mr-4">
                                <img class="img-fluid" src="../../assets/svg/icons/icon-65.svg" alt="SVG">
                            </figure>
                            <div class="media-body">
                                <h4 class="mb-1">Free shipping</h4>
                                <p class="font-size-1 mb-0">Automatically receive free standard shipping on every order.</p>
                            </div>
                        </div>
                        <!-- End Contacts -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Section -->

        <!-- Categories Section -->
        <div class="container space-2 space-lg-3">
            <!-- Title -->
            <div class="w-md-80 w-lg-40 text-center mx-md-auto mb-5 mb-md-9">
                <h2>The better way to shop with Front top-products</h2>
            </div>
            <!-- End Title -->

            <div class="row mb-2">
                <div class="col-md-4 mb-3">
                    <!-- Card -->
                    <div class="card border shadow-none d-block">
                        <div class="card-body d-flex align-items-center p-0">
                            <div class="w-65 border-right">
                                <img class="img-fluid" src="../../assets/img/380x400/img3.jpg" alt="Image Description">
                            </div>
                            <div class="w-35">
                                <div class="border-bottom">
                                    <img class="img-fluid" src="../../assets/img/380x360/img8.jpg" alt="Image Description">
                                </div>
                                <img class="img-fluid" src="../../assets/img/380x360/img7.jpg" alt="Image Description">
                            </div>
                        </div>
                        <div class="card-footer text-center py-4">
                            <h3 class="mb-1">T-shirts</h3>
                            <span class="d-block text-muted font-size-1 mb-3">Starting from $29.99</span>
                            <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover px-5" href="#">View All</a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>

                <div class="col-md-4 mb-3">
                    <!-- Card -->
                    <div class="card border shadow-none d-block">
                        <div class="card-body d-flex align-items-center p-0">
                            <div class="w-65 border-right">
                                <img class="img-fluid" src="../../assets/img/380x400/img4.jpg" alt="Image Description">
                            </div>
                            <div class="w-35">
                                <div class="border-bottom">
                                    <img class="img-fluid" src="../../assets/img/380x360/img6.jpg" alt="Image Description">
                                </div>
                                <img class="img-fluid" src="../../assets/img/380x360/img5.jpg" alt="Image Description">
                            </div>
                        </div>
                        <div class="card-footer text-center py-4">
                            <h3 class="mb-1">Tech covers</h3>
                            <span class="d-block text-muted font-size-1 mb-3">Starting from $399.99</span>
                            <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover px-5" href="#">View All</a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>

                <div class="col-md-4 mb-3">
                    <!-- Card -->
                    <div class="card border shadow-none d-block">
                        <div class="card-body d-flex align-items-center p-0">
                            <div class="w-65 border-right">
                                <img class="img-fluid" src="../../assets/img/380x400/img2.jpg" alt="Image Description">
                            </div>
                            <div class="w-35">
                                <div class="border-bottom">
                                    <img class="img-fluid" src="../../assets/img/380x360/img4.jpg" alt="Image Description">
                                </div>
                                <img class="img-fluid" src="../../assets/img/380x360/img3.jpg" alt="Image Description">
                            </div>
                        </div>
                        <div class="card-footer text-center py-4">
                            <h3 class="mb-1">Caps</h3>
                            <span class="d-block text-muted font-size-1 mb-3">Starting from $13.99</span>
                            <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover px-5" href="#">View All</a>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>

            <div class="text-center">
                <p class="small">Limited time only, while stocks last.</p>
            </div>
        </div>
        <!-- End Categories Section -->
        <hr>
        <!-- Products Section -->
        <div class="container space-2 space-lg-3">
            <!-- Title -->
            <div class="w-md-80 w-lg-40 text-center mx-md-auto mb-5 mb-md-9">
                <h2>What's trending</h2>
            </div>
            <!-- End Title -->

            <!-- Products -->
            <div class="row mx-n2 mx-sm-n3 mb-3">
                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img3.jpg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 pt-3 pl-3">
                                <span class="badge badge-success badge-pill">New arrival</span>
                            </div>
                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Herschel backpack in dark blue</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$56.99</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>0</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img1.jpg" alt="Image Description">

                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Front hoodie</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$91.88</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>40</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img4.jpg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 pt-3 pl-3">
                                <span class="badge badge-danger badge-pill">Sold out</span>
                            </div>
                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Herschel backpack in gray</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$29.99</span>
                                    <span class="text-body ml-1"><del>$33.99</del></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>125</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img6.jpg" alt="Image Description">

                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Front Originals adicolor t-shirt with trefoil logo</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$38.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>9</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img7.jpg" alt="Image Description">

                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Front mesh baseball cap with signature logo</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$8.88</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>31</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img2.jpg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 pt-3 pl-3">
                                <span class="badge badge-success badge-pill">New arrival</span>
                            </div>
                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Front Originals adicolor t-shirt in gray</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$24.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>0</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img5.jpg" alt="Image Description">

                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Clothing</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">COLLUSION Unisex mechanic print t-shirt</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$43.99</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                        <i class="far fa-star text-muted"></i>
                                    </div>
                                    <span>0</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>

                <div class="col-sm-6 col-lg-3 px-2 px-sm-3 mb-3 mb-sm-5">
                    <!-- Product -->
                    <div class="card border shadow-none text-center h-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="../../assets/img/300x180/img8.jpg" alt="Image Description">

                            <div class="position-absolute top-0 right-0 pt-3 pr-3">
                                <button type="button" class="btn btn-xs btn-icon btn-outline-secondary rounded-circle" data-toggle="tooltip" data-placement="top" title="Save for later">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body pt-4 px-4 pb-0">
                            <div class="mb-2">
                                <a class="d-inline-block text-body small font-weight-bold mb-1" href="#">Accessories</a>
                                <span class="d-block font-size-1">
                  <a class="text-inherit" href="single-product.html">Billabong Walled snapback in green</a>
                </span>
                                <div class="d-block">
                                    <span class="text-dark font-weight-bold">$12.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0 pb-4 px-4">
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small" href="#">
                                    <div class="text-warning mr-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>2</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover">Add to Cart</button>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
            </div>
            <!-- End Products -->

            <div class="text-center">
                <a class="btn btn-primary btn-pill transition-3d-hover px-5" href="#">View Products</a>
            </div>
        </div>
        <!-- End Products Section -->
    </main>
@endsection

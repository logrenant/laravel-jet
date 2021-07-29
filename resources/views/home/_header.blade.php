<!-- ========== HEADER ========== -->
<header id="header" class="header left-aligned-navbar">
    <div class="header-section">

        <div id="logoAndNav" class="container mt-lg-n2">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg">
                <div class="navbar-nav-wrap">
                    <!-- Logo -->
                    <a class="navbar-brand navbar-nav-wrap-brand" href="{{route('home_page')}}" aria-label="Front">
                        <h2 class="text-primary">Simpliers</h2>
                    </a>
                    <!-- End Logo -->

                    <!-- Secondary Content -->
                    <div class="navbar-nav-wrap-content">
                        <!-- Search Classic -->
                        <div class="hs-unfold d-lg-none d-inline-block position-static">
                            <a class="js-hs-unfold-invoker btn btn-xs btn-icon rounded-circle" href="javascript:;"
                               data-hs-unfold-options='{
                                "target": "#searchClassic",
                                "type": "css-animation",
                                "animationIn": "slideInUp"
                               }'>
                                <i class="fas fa-search"></i>
                            </a>

                            <div id="searchClassic"
                                 class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0">
                                <form class="input-group input-group-sm input-group-merge">
                                    <input type="text" class="form-control" placeholder="What do you want to learn?"
                                           aria-label="What do you want to learn?">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Search Classic -->

                        <!-- Account -->
                        <div class="hs-unfold">
                            @auth
                                <a class="js-hs-unfold-invoker rounded-circle" href="javascript:;"
                                   data-hs-unfold-options='{
                                "target": "#accountDropdown",
                                "type": "css-animation",
                                "event": "hover",
                                "duration": 50,
                                "delay": 0,
                                "hideOnScroll": "true"
                               }'>
                                  <span class="avatar avatar-xs avatar-circle">
                                    <img class="avatar-img" src="../../assets/img/100x100/img1.jpg"
                                         alt="Image Description">
                                  </span>
                                    <span class="text-body">{{ Auth::user()->name }}</span>
                                </a>

                                <div id="accountDropdown"
                                     class="hs-unfold-content dropdown-menu dropdown-menu-sm-right dropdown-menu-no-border-on-mobile p-0"
                                     style="min-width: 245px;">
                                    <div class="card">
                                        <!-- Header -->
                                        <div class="card-header p-4">
                                            <a class="media align-items-center" href="#">
                                                <div class="avatar mr-3">
                                                    <img class="avatar-img" src="../../assets/img/100x100/img1.jpg"
                                                         alt="Image Description">
                                                </div>
                                                <div class="media-body">
                                                <span class="d-block font-weight-bold">{{ Auth::user()->name }}<span
                                                        class="badge badge-success ml-1">Pro</span></span>
                                                    <span class="d-block small text-muted">natalygaga@gmail.com</span>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- End Header -->
                                        <!-- Body -->
                                        <div class="card-body py-3">
                                            <a class="dropdown-item px-0" href="#">
                                            <span class="dropdown-item-icon">
                                              <i class="fas fa-database"></i>
                                            </span>
                                                Ödeme Geçmişi
                                            </a>
                                            <a class="dropdown-item px-0" href="#">
                                            <span class="dropdown-item-icon">
                                              <i class="fas fa-user"></i>
                                            </span>
                                                Hesabım
                                            </a>
                                            <a class="dropdown-item px-0" href="#">
                                            <span class="dropdown-item-icon">
                                              <i class="fas fa-credit-card"></i>
                                            </span>
                                                Ödeme Yöntemleri
                                            </a>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item px-0" href="#">
                                            <span class="dropdown-item-icon">
                                              <i class="fas fa-question-circle"></i>
                                            </span>
                                                Destek
                                            </a>
                                            <a class="dropdown-item px-0" href="{{route('logout')}}">
                                            <span class="dropdown-item-icon">
                                              <i class="fas fa-power-off"></i>
                                            </span>
                                                Çıkış Yap
                                            </a>
                                        </div>

                                        <!-- End Body -->
                                    </div>
                                </div>
                            @endauth
                            @guest
                                <div>
                                   <span>
                                       <a href="{{route('login')}}" style="color:#6c757d;"> Giriş Yap </a>
                                   </span>
                                    /
                                    <span>
                                        <a href="{{route('register')}}" style="color:#6c757d;">Kaydol</a>
                                    </span>
                                </div>
                            @endguest
                        </div>

                        <!-- End Account -->
                    </div>

                    <!-- End Secondary Content -->

                    <!-- Responsive Toggle Button -->
                    <button type="button"
                            class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle"
                            aria-label="Toggle navigation"
                            aria-expanded="false"
                            aria-controls="navBar"
                            data-toggle="collapse"
                            data-target="#navBar">
                          <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                              <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                            </svg>
                          </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                              <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                            </svg>
                          </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
                        <ul class="navbar-nav">
                        @include('home._category')
                            <!-- Search Form -->
                            <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">
                                <form class="input-group input-group-sm input-group-merge w-75">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="What do you want to learn?"
                                           aria-label="What do you want to learn?">
                                </form>
                            </li>
                            <!-- End Search Form -->

                            <!-- Shopping Cart -->
                            @auth
                            <li class="list-inline-item">
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary mr-3"
                                       href="javascript:;"
                                       data-hs-unfold-options='{
                                          "target": "#shoppingCartDropdown",
                                          "type": "css-animation",
                                          "event": "hover",
                                          "hideOnScroll": "true"
                                        }'>
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <div id="shoppingCartDropdown" class="hs-unfold-content dropdown-menu dropdown-menu-right text-center p-7" style="min-width: 250px;">
                                        <figure class="max-w-9rem mx-auto mb-3">
                                            <img class="img-fluid" src="../../assets/svg/illustrations/empty-cart.svg" alt="SVG">
                                        </figure>
                                        <span class="d-block">Your Cart is Empty</span>
                                    </div>
                                </div>
                            </li>
                            <!-- End Shopping Cart -->
                            <div>
                                <a class="btn btn-icon btn-ghost-secondary mr-3" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            @endauth
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </div>
            </nav>            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal"
                    aria-label="Close">
                <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor"
                          d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
            </button>

            <!-- Body -->
            <div class="modal-body">
                <form class="js-validate">
                    <!-- Login -->
                    <div id="login">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Sign In to Front</h3>
                            <p>Login to manage your account.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="signinEmail"
                                       placeholder="Email" aria-label="Email" required
                                       data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-3">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password" id="signinPassword"
                                       placeholder="Password" aria-label="Password" required
                                       data-msg="Your password is invalid. Please try again.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="d-flex justify-content-end mb-4">
                            <a class="js-animation-link small link-underline" href="javascript:;"
                               data-hs-show-animation-options='{
                   "targetSelector": "#forgotPassword",
                   "groupName": "idForm"
                 }'>Forgot Password?</a>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                        </div>

                        <div class="text-center mb-3">
                            <span class="divider divider-xs divider-text">OR</span>
                        </div>

                        <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                          <span class="d-flex justify-content-center align-items-center">
                            <img class="mr-2" src="../../assets/img/160x160/img17.png" alt="Image Description"
                                 width="14" height="14">
                            Sign In with Google
                          </span>
                        </a>

                        <div class="text-center">
                            <span class="small text-muted">Do not have an account?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                               data-hs-show-animation-options='{
                                            "targetSelector": "#signup",
                                               "groupName": "idForm"
                                 }'>Sign Up
                            </a>
                        </div>
                    </div>

                    <!-- Signup -->
                    <div id="signup" style="display: none; opacity: 0;">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Create your account</h3>
                            <p>Fill out the form to get started.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="signupEmail"
                                       placeholder="Email" aria-label="Email" required
                                       data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password" id="signupPassword"
                                       placeholder="Password" aria-label="Password" required
                                       data-msg="Your password is invalid. Please try again.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <!-- Input Group -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Confirm Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="confirmPassword"
                                       id="signupConfirmPassword" placeholder="Confirm Password"
                                       aria-label="Confirm Password" required
                                       data-msg="Password does not match the confirm password.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                        </div>

                        <div class="text-center mb-3">
                            <span class="divider divider-xs divider-text">OR</span>
                        </div>

                        <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
              <span class="d-flex justify-content-center align-items-center">
                <img class="mr-2" src="../../assets/img/160x160/img17.png" alt="Image Description" width="14"
                     height="14">
                Sign Up with Google
              </span>
                        </a>

                        <div class="text-center">
                            <span class="small text-muted">Already have an account?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                               data-hs-show-animation-options='{
                   "targetSelector": "#login",
                   "groupName": "idForm"
                 }'>Sign In
                            </a>
                        </div>
                    </div>
                    <!-- End Signup -->

                    <!-- Forgot Password -->
                    <div id="forgotPassword" style="display: none; opacity: 0;">
                        <!-- Title -->
                        <div class="text-center mb-7">
                            <h3 class="mb-0">Recover password</h3>
                            <p>Instructions will be sent to you.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input Group -->
                        <div class="js-form-message">
                            <label class="sr-only" for="recoverEmail">Your email</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="email" class="form-control" name="email" id="recoverEmail"
                                       placeholder="Your email" aria-label="Your email" required
                                       data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input Group -->

                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Recover Password</button>
                        </div>

                        <div class="text-center mb-4">
                            <span class="small text-muted">Remember your password?</span>
                            <a class="js-animation-link small font-weight-bold" href="javascript:;"
                               data-hs-show-animation-options='{
                   "targetSelector": "#login",
                   "groupName": "idForm"
                 }'>Login
                            </a>
                        </div>
                    </div>
                    <!-- End Forgot Password -->
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Login Modal -->

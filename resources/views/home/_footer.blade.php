@php
    $setting = \App\Http\Controllers\Admin\HomeController::getSettings();
@endphp

<!-- ========== FOOTER ========== -->
<footer class="container">
    <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
            <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                <!-- Logo -->
                <div class="mb-4">
                    <a href="{{route('home_page')}}">
                        <h2 class="text-primary">Simpliers</h2>
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <div class="col-6 col-md-3 col-lg">
                <h5>Hakkımızda</h5>
                <!-- Nav Link -->
                <ul class="nav nav-sm nav-x-0 flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Biz Kimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ne Yapıyoruz</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gizlilik Koşulları</a></li>
                </ul>
                <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg">
                <h5>Kampanyalar</h5>
                <!-- Nav Link -->
                <ul class="nav nav-sm nav-x-0 flex-column">
                    <li class="nav-item"><a class="nav-link" href="#">Aktif Kampanyalar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Yeni Ürünler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fırsat Ürünleri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sezon İndirimi</a></li>
                </ul>
                <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg">
                <h5>Destek</h5>

                <!-- Nav Link -->
                <ul class="nav nav-sm nav-x-0 flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="media align-items-center">
                            <i class="fa fa-info-circle mr-2"></i>
                            <span class="media-body">Canlı Yardım</span>
                          </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="media align-items-center">
                            <i class="fa fa-info-circle mr-2"></i>
                            <span class="media-body">Sık Sorulan Sorular</span>
                          </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="media align-items-center">
                            <i class="fa fa-info-circle mr-2"></i>
                            <span class="media-body">İade İşlemleri</span>
                          </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="media align-items-center">
                            <i class="fa fa-info-circle mr-2"></i>
                            <span class="media-body">Ödeme Yöntemleri</span>
                          </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                          <span class="media align-items-center">
                            <i class="fa fa-user-circle mr-2"></i>
                            <span class="media-body">Hesabın</span>
                          </span>
                        </a>
                    </li>
                </ul>
                <!-- End Nav Link -->
            </div>
        </div>
    </div>

    <hr class="my-0">

    <div class="space-1">
        <div class="row align-items-md-center mb-7">
            <div class="col-md-6 mb-4 mb-md-0">
            </div>

            <div class="col-md-6 text-md-right">
                <ul class="list-inline mb-0">
                    <!-- Social Networks -->
                    @if($setting->facebook != null)
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="{{$setting->facebook}}"
                               target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    @endif
                    @if($setting->twitter != null)
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="{{$setting->twitter}}"
                               target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                    @endif
                    @if($setting->instagram != null)
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="{{$setting->instagram}}"
                               target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    @endif
                    @if($setting->youtube != null)
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-soft-secondary" href="{{$setting->youtube}}"
                               target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                @endif
                <!-- End Social Networks -->
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-75 text-lg-center mx-lg-auto">
            <p class="text-muted small">© {{$setting->company}}. All rights reserved.</p>
            <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our
                authorised service providers may use cookies for storing information to help provide you with a better,
                faster and safer experience and for marketing purposes.</p>
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

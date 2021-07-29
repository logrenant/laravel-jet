@php
    $parentCategories = \App\Http\Controllers\Admin\HomeController::categoryList()
@endphp
<li class="hs-has-sub-menu navbar-nav-item">
    <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
       aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
        <i class="fa fa-th font-size-1 mr-1"></i>
        Categories
    </a>
    <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu"
         aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
        <!-- Development -->
        @foreach($parentCategories as $rs)
            <div class="hs-has-sub-menu">
                <a id="navLinkCoursesDevelopment"
                   class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                   href="javascript:;" aria-haspopup="true" aria-expanded="false"
                   aria-controls="navSubmenuCoursesDevelopment">
                                        <span class="min-w-4rem text-center opacity-lg mr-1">
                                          <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                                        </span>
                    {{$rs->title}}
                </a>
                <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu"
                     aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">
                    <a class="dropdown-item" href="#">
                        @if (count($rs->children))
                            @include('home.categorytree', ['children'=>$rs->children])
                        @endif
                    </a>
                </div>
            </div>
    @endforeach
            <!-- End Development -->
    </div>
</li>


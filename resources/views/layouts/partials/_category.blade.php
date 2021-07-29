@php
    $parentCategories = \App\Http\Controllers\Admin\HomeController::categoryList()
@endphp

<ul class="navbar-nav">
    @foreach($parentCategories as $rs)
        <li class="hs-has-sub-menu navbar-nav-item">
            <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;"
               aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                <i class="fa fa-th font-size-1 mr-1"></i>
                Courses
            </a>
            <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu"
                 aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                <!-- Development -->
                <div class="hs-has-sub-menu">
                    <a id="navLinkCoursesDevelopment"
                       class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle"
                       href="javascript:;" aria-haspopup="true" aria-expanded="false"
                       aria-controls="navSubmenuCoursesDevelopment">
                                        <span class="min-w-4rem text-center opacity-lg mr-1">
                                          <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                                        </span>
                        Development
                    </a>

                    <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu"
                         aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">
                        <a class="dropdown-item" href="#">All Web Development</a>
                    </div>
                </div>
                <!-- End Development -->
            </div>
        </li>
    @endforeach
</ul>

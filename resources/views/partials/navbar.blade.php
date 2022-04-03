<header class="page-header">
    <nav class="navbar bg-white">
        <div class="container">
            <div class="navbar-inner">
                <div class="brand-logo-container">
                    <a href="index-2.html">
                        <img src="assets/images/logo-black.svg" alt="" class="brand-logo">
                    </a>
                </div>

                <div class="main-nav-wrapper">
                    <ul class="main-navigation list-inline" id="main-menu">
                        <li  class="is-{{ ($title === "/") ? 'active' : ''  }}"><a href="/">Home</a></li>
                        <li class="has-dropdown">
                            <a href="#">Category</a>
                            <ul class="submenu">
                                @foreach ($data as $a)
                                <li><a href="/category/{{$a->slug}}">{{$a->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Author</a>
                            <ul class="submenu">
                                @foreach ($data as $a)
                                <li><a href="/category/{{$a->slug}}">{{$a->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <!-- End of .main-navigation -->
                </div>
                <!-- End of .main-nav-wrapper -->

                <div class="navbar-extra-features ml-auto">
                    <form action="#" class="navbar-search">
                        <div class="search-field">
                            <input type="text" class="navbar-search-field" placeholder="Search Here...">
                            <button class="navbar-search-btn" type="button"><i
                                    class="fal fa-search"></i></button>
                        </div>
                        <!-- End of .search-field -->

                        <a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
                    </form>
                    <!-- End of .navbar-search -->
                    <a href="#" class="nav-search-field-toggler" data-toggle="nav-search-feild"><i
                            class="far fa-search"></i></a>
                </div>
                <!-- End of .navbar-extra-features -->

                <div class="main-nav-toggler d-block d-lg-none" id="main-nav-toggler">
                    <div class="toggler-inner">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End of .main-nav-toggler -->
            </div>
            <!-- End of .navbar-inner -->
        </div>
        <!-- End of .container -->
    </nav>
    <!-- End of .navbar -->
</header>
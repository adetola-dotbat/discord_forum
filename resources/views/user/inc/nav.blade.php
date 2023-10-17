<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="" />
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="" />
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        @if (auth()->user())
            <ul class="buy-button list-none mb-0">
                <li class="inline ps-1 mb-0">
                    <a href="{{ route('logout') }}"
                        class="btn btn-primary rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Logout</a>
                </li>
            </ul>
        @else
            <ul class="buy-button list-none mb-0">
                <li class="inline ps-1 mb-0">
                    <a href="{{ route('login') }}"
                        class="btn btn-primary rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">Login</a>
                </li>
            </ul>
        @endif
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>

                <li>
                    <a href="{{ route('questions') }}" class="sub-menu-item">questions</a>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Ask</a><span class="menu-arrow"></span>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('ask') }}" class="sub-menu-item">ask</a>
                        </li>
                        <li>
                            <a href="{{ route('view.questions') }}" class="sub-menu-item">View
                                your questions</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Community</a><span class="menu-arrow"></span>
                    <ul class="submenu ">
                        <li>
                            <a href="documentation.html" class="sub-menu-item">Join Community</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>

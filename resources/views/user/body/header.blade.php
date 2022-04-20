<style type="text/css">
.navbar-custom{
    background: #fff;
}
</style>



<header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        
    
            
                        
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="pro-user-name ml-1" style="color: black;">
                                    Jayesh <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="m-0">
                                        Welcome !
                                    </h6>
                                </div>

    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i>
                                    <span>Change Password</span>
                                </a>
    
                               
    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="dripicons-power"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        
    
                    </ul>
    
                    <ul class="list-unstyled menu-left mb-0">
                        <li class="float-left logo-box">
                            <a href="index.html" class="logo">
                                <span class="logo-lg">
                                    <img src="assets/images/New_Kritva_logo.png" alt="" height="48">
                                </span>
                            </a>
                        </li>

                        
                    </ul>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html">
                                    <i class="dripicons-meter"></i>Dashboard
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="">
                                    <i class="dripicons-briefcase"></i>Goalsheet & IDP
                                <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('goalsheet.self')}}">Self</a>
                                    </li>
                                    <li>
                                        <a href="layouts-center-menu.html">Subordinate</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="dripicons-view-apps"></i>Mid-Year Review <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="layouts-topbar-light.html">Self</a>
                                    </li>
                                    <li>
                                        <a href="layouts-center-menu.html">Subordinate</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"> <i class="dripicons-duplicate"></i>Year-End review <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="pages-login.html">Self</a>
                                            </li>
                                            <li>
                                                <a href="pages-register.html">Subordinate</a>
                                            </li> 
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
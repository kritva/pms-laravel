<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->

        <link rel="shortcut icon" href="<?php echo e(asset('panel/images/favicon.ico')); ?>">

        <!-- jvectormap -->
        <link href="<?php echo e(asset('panel/libs/jqvmap/jqvmap.min.css')); ?>" rel="stylesheet" />

        <!-- DataTables -->
        <link href="<?php echo e(asset('panel/libs/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo e(asset('panel/libs/datatables/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css"/>
        
        <!-- App css -->
        <link href="<?php echo e(asset('panel/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('panel/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('panel/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="pro-user-name ml-1">
                                Agnes K <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="dripicons-power"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <ul class="list-unstyled menu-left mb-0">
                    <li class="float-left" style="background-color: white;">
                        <a href="index.html" class="logo">
                            <span class="logo-lg">
                                <img src="<?php echo e(asset('panel/images/New_Kritva_logo.png')); ?>" alt="" height="50">
                            </span>
                            <!-- <span class="logo-sm">
                                <img src="<?php echo e(asset('panel/images/logo-sm.png')); ?>" alt="" height="24">
                            </span> -->
                        </a>
                    </li>
                    <li class="float-left">
                        <a class="button-menu-mobile navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title"></li>

                            <li>
                                <a href="index.html">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-mail"></i>
                                    <span> Employee Master </span>
                                </a>
                            </li>
                
                            <li>
                                <a href="calendar.html">
                                    <i class="dripicons-calendar"></i> <span> Manager Change </span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-briefcase"></i>
                                    <span> KRA </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-graph-bar"></i>
                                    <span> KPI </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-document"></i>
                                    <span> IDP Programs </span>
                                </a>
                            </li>

                            <li style="width: 100%;">
                                <a href="javascript: void(0);">
                                    <i class="dripicons-view-list"></i>
                                    <span> Download Goalsheet(Excel)</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-map"></i>
                                    <span> Cascaded Goals </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-anchor"></i>
                                    <span> Organization Chart </span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-view-apps"></i>
                                    <span> Reset Password </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="dripicons-view-apps"></i>
                                    <span> MIS </span>
                                </a>
                            </li>

                            
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <?php echo $__env->yieldContent('admin'); ?>

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer" style="background-color: #414d5f;color: #fff;font-size: 15px;padding: 8px 11px 8px;">
                    <div class="container">
                        <p class="pull-left" style="margin-bottom: 0px;">

                                © 2016 - 2022 Kritva Technologies Pvt Ltd.
                        </p> 
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Agnes Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox1" type="checkbox" checked>
                        <label for="checkbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox4" type="checkbox" checked>
                        <label for="checkbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="checkbox5" type="checkbox" checked>
                        <label for="checkbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Chadengle</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>

                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>

                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo e(asset('panel/js/vendor.min.js')); ?>"></script>

        <!-- KNOB JS -->
        <script src="<?php echo e(asset('panel/libs/jquery-knob/jquery.knob.min.js')); ?>"></script>
        <!-- Chart JS -->
        <script src="<?php echo e(asset('panel/libs/chart-js/Chart.bundle.min.js')); ?>"></script>

        <!-- Jvector map -->
        <script src="<?php echo e(asset('panel/libs/jqvmap/jquery.vmap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/libs/jqvmap/jquery.vmap.usa.js')); ?>"></script>
        
        <!-- Datatable js -->
        <script src="<?php echo e(asset('panel/libs/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/libs/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/libs/datatables/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('panel/libs/datatables/responsive.bootstrap4.min.js')); ?>"></script>
        
        <!-- Dashboard Init JS -->
        <script src="<?php echo e(asset('panel/js/pages/dashboard.init.js')); ?>"></script>
        
        <!-- App js -->
        <script src="<?php echo e(asset('panel/js/app.min.js')); ?>"></script>

    </body>
</html><?php /**PATH /home/shubhangip/zywie/zywiepms/resources/views/admin/admin_master.blade.php ENDPATH**/ ?>
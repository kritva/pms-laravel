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

        <link rel="shortcut icon" href="<?php echo e(asset('Frontend/images/favicon.ico')); ?>">

        <!-- App css -->
        <link href="<?php echo e(asset('Frontend/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('Frontend/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('Frontend/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

        
        
        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <a href="index.html">
                                        <span><img src="<?php echo e(asset('panel/images/New_Kritva_logo.png')); ?>" alt="" height="55"></span>
                                    </a>
                                </div>

                                <?php if(Session::has('error')): ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong><?php echo e(session::get('error')); ?></strong>
                                  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <?php endif; ?>










                                <form action="" class="pt-2" method="post">
                                    <?php echo csrf_field(); ?>

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="email" value=""  placeholder="Enter your Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" value=""  placeholder="Enter your password">
                                    </div>


                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>
 
                                <!-- end row -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="<?php echo e(asset('Frontend/js/vendor.min.js')); ?>"></script>

        <!-- App js -->
        <script src="<?php echo e(asset('Frontend/js/app.min.js')); ?>"></script>
        
    </body>
</html><?php /**PATH C:\xampp\zywiepms\resources\views/auth/login.blade.php ENDPATH**/ ?>
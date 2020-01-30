<!doctype html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>LeTheatre</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container" style="color: white; font-family:MV Boli;">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="color: white; font-family:MV Boli;">
                  LeTheatre
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>" style="color: white; font-family:MV Boli;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: inherit; font-family:MV Boli;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="color: white; font-family:MV Boli;">
                        <!-- Authentication Links -->

                            <li class="nav-item" style="color: white; font-family:MV Boli;">
                                      <a style="color: white; font-family:MV Boli;" class="nav-link" href="http://localhost/laravel/teatur/public/program">Program</a>
                            </li>
                            <li class="nav-item" style="color: white; font-family:MV Boli;">
                                      <a style="color: white; font-family:MV Boli;" class="nav-link" href="http://localhost/laravel/teatur/public/place">Our Locations</a>
                            </li>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item" style="color: white; font-family:MV Boli;">
                                <a style="color: white; font-family:MV Boli;" class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item" style="color: white; font-family:MV Boli;">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>" style="color: white; font-family:MV Boli;"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a style="color: white; font-family:MV Boli;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img src="<?php echo e(asset('uploads/avatars')); ?>/<?php echo e(Auth::user()->avatar); ?>" style="width:32px; height:32px;  top:10px; left:10px; border-radius:50%">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>">Profile</a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                                        <?php if(auth()->user()->id == 1): ?>
                                      <a class="dropdown-item" href="http://localhost/laravel/teatur/public/posts">Edit Program</a>
                                        <a class="dropdown-item" href="http://localhost/laravel/teatur/public/locations  ">Edit Location</a>
                                      <?php endif; ?>


                                </div>
                            </li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/layouts/app.blade.php ENDPATH**/ ?>
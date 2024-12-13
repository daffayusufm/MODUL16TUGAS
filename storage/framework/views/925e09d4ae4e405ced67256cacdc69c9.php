<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>"
                        class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>"
                        class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

            <!-- Dropdown Administrator -->
            <?php if(auth()->guard()->check()): ?>
                <div class="dropdown ms-md-auto">
                    <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle me-1"></i> <?php echo e(Auth::user()->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                        <!-- My Profile -->
                        <li>
                            <a class="dropdown-item" href="<?php echo e(route('profile')); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-fill me-2" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                                My Profile
                            </a>
                        </li>
                        <!-- Logout -->
                        <li>
                            <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                                    class="bi bi-lock me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
                                </svg>
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>

                    
                </div>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-light ms-md-auto"><i
                        class="bi-person-circle me-1"></i> Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>



<?php /**PATH C:\Users\Daffa Yusuf\Downloads\MODUL14UP\resources\views/layouts/nav.blade.php ENDPATH**/ ?>
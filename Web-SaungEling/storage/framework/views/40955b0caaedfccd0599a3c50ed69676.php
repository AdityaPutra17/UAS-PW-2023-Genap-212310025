<nav class="navbar sticky-top navbar-expand-lg ps-3 pe-3 main-color ">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="<?php echo e(url('../assets/img/LOGOijo.jpg')); ?>" alt="logoSaungEling" style="width: 70%"></a>
        <button class="navbar-toggler" style="color: #fff" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/travel">Travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/destinasi">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/homestay">Homestay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/kuliner">Culinary</a>
                </li>
            </ul>

            <?php if(auth()->guard()->check()): ?>

            <div class="nav-item dropdown text-light ms-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo e(auth()->user()->name); ?>

                </a>
                <ul class="dropdown-menu">
                    <li>
                        <form action="/logout" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>

            <?php else: ?>
            <form class="d-flex " role="search">
                <input class="form-control me-3 align-self-center" type="search" placeholder="Search" aria-label="Search">
                <div class="d-flex mb-3">
                    <a href="/signin"><span class="btn btn-outline-light me-4" style="width: 100px">Sign In</span></a>
                    <a href="/register"><span class="btn" style="width: 100px;color:#fff; background-color: #F9BD16">Register</span></a>
                </div>
            </form>
            <?php endif; ?>

        </div>
    </div>
</nav>
<?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/tamplates/navbar.blade.php ENDPATH**/ ?>
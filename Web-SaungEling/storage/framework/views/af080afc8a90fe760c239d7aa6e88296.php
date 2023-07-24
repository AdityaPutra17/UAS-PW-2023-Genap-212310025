<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="container mt-2 p-3 text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="text-start ms-xl-4">
                        <span class="h1 fw-bold mb-0"><img src="assets/img/signinlogo.png" alt="" style="width: 20%"></span>
                    </div>

                    <div class="text-start ms-xl-4 mt-3 pt-3 pt-xl-0 mt-xl-n5">
                        <form style="width: 23rem" action="/signin" method="post">
                            <?php echo csrf_field(); ?>
                            <h1 class=" fw-bold main-color">Sign In</h1>
                            <p class="text-color">Please SignIn to Your Account</p>
                            <?php if(session()->has('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>

                            <?php if(session()->has('failed')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e(session('failed')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php endif; ?>

                            <div class="form-outline mb-4">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter your Email" />
                            </div>

                            <div class="form-outline mb-2">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your Password" />
                            </div>

                            <div class="col-md-12 text-center">
                                <button class="btn btn-lg-primary" type="submit">SignIn</button>
                                <p>Don't have an account? <a href="/register">Register here</a></p>
                            </div>
                            <div class="col-md-12 text-center mb-3">
                                <hr>
                                <span class="text-color">Sign With</span>
                            </div>
                            <div class="col-md-12 text-center">
                                <i class="fa-brands fa-google me-5 fs-3"></i>
                                <i class="fa-brands fa-google me-5 fs-3"></i>
                                <i class="fa-brands fa-google fs-3"></i>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="assets/img/signinimg.png" alt="Login image" style="width: 85%">
                </div>
            </div>
    </section>
    <script src="https://kit.fontawesome.com/3ed4f57cc0.js" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/auth/signin.blade.php ENDPATH**/ ?>
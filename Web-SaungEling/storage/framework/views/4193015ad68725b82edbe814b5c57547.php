
<?php $__env->startSection('content'); ?>

<div class="col-md-12 text-center">
    <h1 class="mt-3 fw-bold">Create New Post Destination</h1>
</div>
<div class="row">
    <div class="col-md-2">
        <a href="/admin/destinasi">
            <img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="">
        </a>
    </div>
    
    <div class="d-flex col-md-8 mb-3 justify-content-center">
        <div class="col-md-10 mt-3">
            <div class="card shadow ">
                <div class="card-header">
                    Form Destinasi
                </div>
                <form action="/admin/destinasi" method="post" enctype="multipart/form-data" class="p-2">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" id="nama" required value="<?php echo e(old('nama')); ?>">
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea class="form-control description" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control price <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="harga" placeholder="IDR" required value="<?php echo e(old('harga')); ?>">
                        <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <div class="d-flex">
                            <label class="me-3">
                                <input type="radio" class="is_active_Y" name="is_active" value="1">Ready
                            </label>
                            <label class="me-3">
                                <input type="radio" class="is_active_N" name="is_active" value="0">No
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" accept=" .png, .jpg, .jpeg" id="image" onchange="previewImage()">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-danger" type="reset">Clear</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/destinasi/create.blade.php ENDPATH**/ ?>
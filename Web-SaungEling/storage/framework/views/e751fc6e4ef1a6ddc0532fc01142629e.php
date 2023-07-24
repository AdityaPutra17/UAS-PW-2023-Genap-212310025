
<?php $__env->startSection('content'); ?>

<div class="col-md-12 text-center">
    <h1 class="mt-3 fw-bold">Edit Post Homestay</h1>
</div>
<div class="row">
    <div class="col-md-2">
        <a href="/admin/homestay">
            <img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="">
        </a>
    </div>
    
    <div class="d-flex col-md-8 mb-3 justify-content-center">
        <div class="col-md-10 mt-3 ">
            <div class="card shadow ">
                <div class="card-header">
                    Form Homestay
                </div>
                <form action="<?php echo e(route('homestay.update', ['homestay' => $homestay->id])); ?>" enctype="multipart/form-data" class="p-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" required value="<?php echo e(old('nama', $homestay->nama)); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea class="form-control description" name="dekripsi"><?php echo e($homestay->deskripsi); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga</label>
                        <input type="text" class="form-control price" name="harga" placeholder="IDR" required value="<?php echo e(old('harga', $homestay->harga)); ?>">
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
                        <label for="" class="form-label">Maksimal Pax</label>
                        <input type="text" class="form-control" name="max_pax" placeholder="Pax" required value="<?php echo e(old('max_pax', $homestay->max_pax)); ?>">
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

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/homestay/edit.blade.php ENDPATH**/ ?>
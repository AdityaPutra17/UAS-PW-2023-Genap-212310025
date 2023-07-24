
<?php $__env->startSection('content'); ?>
<div class="row mt-5 mb-5 justify-content-center">
    <?php if(auth()->user()->role == 'admin'): ?>
    <div class="col-md-1">
        <a href="<?php echo e(url("admin/travel")); ?>"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <?php else: ?>
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <?php endif; ?>
    <div class="col-md-5">
        <img src="<?php echo e(asset('storage/'.$travel->image)); ?>" alt="">
    </div>
    <div class="col-md-5">
        <span class="fw-bold fs-2"><?php echo e($travel->nama); ?></span>
        <div class="mb-5" style="height: 150px;"><?php echo e($travel->deskripsi); ?></div>
        <div class="row">
            <div class="col-md-6">
                <span>Mulai Dari</span><br>
                <span class="fw-bold">IDR </span><br>
                <span class="fw-bold"><?php echo e($travel->harga); ?>/pax</span>
            </div>
            <div class="col-md-6 text-end">
                <span>Minimal</span><br>
                <span class="fw-bold"><?php echo e($travel->min_pax); ?> pax</span>
            </div>
        </div>
        <div class="row">
            <a href="/booking" type="button" class="btn text-white btn-lg" style="background-color:#04450B; ">Book Now!</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/travel/detailtravel.blade.php ENDPATH**/ ?>
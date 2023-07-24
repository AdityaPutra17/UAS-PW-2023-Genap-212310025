
<?php $__env->startSection('content'); ?>
<div class="row mt-5 mb-5 justify-content-center">
    <?php if(auth()->user()->role == 'admin'): ?>
    <div class="col-md-1">
        <a href="<?php echo e(url("admin/kuliner")); ?>"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <?php else: ?>
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <?php endif; ?>
    <div class="col-md-5">
        <img src="<?php echo e(asset('storage/'.$kuliner->image)); ?>" alt="">
    </div>
    <div class="col-md-5">
        <span class="fw-bold fs-2"><?php echo e($kuliner->nama); ?></span>
        <div class="mb-5" style="height: 150px"><?php echo e($kuliner->deskripsi); ?></div>
        <div class="row">
            <span>Mulai Dari</span><br>
            <span class="fw-bold">IDR </span><br>
            <span class="fw-bold"><?php echo e($kuliner->harga); ?></span>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/kuliner/detailkuliner.blade.php ENDPATH**/ ?>
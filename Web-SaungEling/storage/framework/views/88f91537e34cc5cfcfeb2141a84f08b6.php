
<?php $__env->startSection('content'); ?>
<div class="row mt-5 mb-5 justify-content-center">
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <img src="<?php echo e(asset('storage/'.$destinasi->image)); ?>" alt="">
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold"><?php echo e($destinasi->nama); ?></h1>
        <p><?php echo e($destinasi->deskripsi); ?></p>
        <div class="row mt-5">
            <span>Start From</span><br>
            <span class="fw-bold">IDR <?php echo e($destinasi->harga); ?></span>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/destinasi/detaildestinasi.blade.php ENDPATH**/ ?>
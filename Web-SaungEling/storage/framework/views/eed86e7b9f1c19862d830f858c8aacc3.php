
<?php $__env->startSection('content'); ?>
<div class="row mt-5 mb-5 justify-content-center">
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <img src="<?php echo e(asset('storage/'.$homestay->image)); ?>" alt="">
    </div>
    <div class=" col-md-5">
        <span class="fw-bold fs-2">Delux Garden Room</span>
        <div class="col-md-12">
            <span class=" fs-3">Fasilitas</span> <br>
            <span><?php echo e($homestay->deskripsi); ?></span>
        </div>
        <div class="col-md-6">
            <span>Mulai Dari</span><br>
            <span class="fw-bold">IDR </span><br>
            <span class="fw-bold"><?php echo e($homestay->harga); ?>/malam</span>
        </div>
        <div class="row">
            <button type="button" class="btn text-white btn-lg" style="background-color:#04450B; ">Book Now!</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/homestay/detailhomestay.blade.php ENDPATH**/ ?>
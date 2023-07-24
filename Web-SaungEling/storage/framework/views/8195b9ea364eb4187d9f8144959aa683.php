
<?php $__env->startSection('content'); ?>
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Destinasi</h1>
    </div>
</div>
<div class="row pt-5">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="<?php echo e(route('destinasi.show', ['destinasi' => $destinasi->id])); ?>">
            <div class="card shadow" style="width: 16rem;">
                <img src="assets/img/imgdestinasi.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="fw-bold"><?php echo e($destinasi->nama); ?></span>
                        </div>
                        <div class="col-md-6 text-end">
                            <span class="bg-success rounded-pill px-3 pb-1 text-white"><?php echo e(($destinasi->is_active) ? "Ready":"No"); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/destinasi/destinasi.blade.php ENDPATH**/ ?>
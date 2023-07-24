
<?php $__env->startSection('content'); ?>
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Culinary</h1>
    </div>
</div>

<div class="row mb-5">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kuliner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 mb-5">
        <a class="text-decoration-none text-black" href="<?php echo e(route('kuliner.show', ['kuliner' => $kuliner->id])); ?>">
            <div class="card shadow" style="width: 16rem;">
                <img src="<?php echo e(asset('storage/'.$kuliner->image)); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row" style="margin-top: -12px; margin-bottom: 12px">
                        <div class="col-md-12 text-center">
                            <span class="fw-bold"><?php echo e($kuliner->nama); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <span class="bg-success rounded-pill px-3 pb-1 text-white"><?php echo e($kuliner->kategori->nama); ?></span>
                        </div>
                        <div class="col-md-7 text-end">
                            <span class="fw-normal">IDR <?php echo e($kuliner->harga); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/kuliner/kuliner.blade.php ENDPATH**/ ?>
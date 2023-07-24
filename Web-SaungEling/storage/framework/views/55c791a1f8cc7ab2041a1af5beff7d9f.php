
<?php $__env->startSection('content'); ?>
<div class="row pt-5">
    <div class="col-md-1">
        <a href="/"><img src="<?php echo e(url('../assets/img/arrow.png')); ?>" alt="" style="width: 70%"></a>
    </div>
    <div class="col-md-5">
        <h1 class="fw-bold">Homestay</h1>
    </div>
</div>

<div class="row mb-5 mt-5">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homestay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3">
        <a class="text-decoration-none text-black" href="<?php echo e(route('homestay.show', ['homestay' => $homestay->id])); ?>">
            <div class="card shadow" style="width: 16rem; ">
                <div class="row p-1 align-items-center" style="height: 200px">
                    <img src="<?php echo e(asset('storage/'.$homestay->image)); ?>" style="height: 90%;" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="row" style="margin-top: -12px; margin-bottom: 12px">
                        <div class="col-md-12 text-center">
                            <span class="fw-bold"><?php echo e($homestay->nama); ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <?php if($homestay->is_active): ?>
                            <span class="bg-success rounded-pill px-1 pb-1 text-white">Available</span>
                            <?php else: ?>
                            <span class="bg-danger rounded-pill px-3 pb-1 text-white">Not</span>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-7 text-end">
                            <p>Max <span class="fw-bold"><?php echo e($homestay->max_pax); ?> orang</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/users/homestay/homestay.blade.php ENDPATH**/ ?>
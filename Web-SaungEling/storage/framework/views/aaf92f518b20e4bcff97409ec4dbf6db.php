
<?php $__env->startSection('content'); ?>

<div class="d-flex col-md-12">
    <div class="col-md-6">
        <h1 class="mt-3 fw-bold">Travel</h1>
    </div>
    <div class="col-md-6 text-end">
        <a href="travel/create" class="btn main-color text-white fs-5 fw-bold"> Create new post</a>
    </div>
</div>
<?php if(session()->has('success')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="col-md-12">
    <div class="card-body mt-3">
        <div class="table-responsive shadow">
            <table class="table table-striped">
                <thead class="fs-6 fw-bold bg-light">
                    <tr class="fs-6">
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Min.pax</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="fw-6 text-secondary">
                    <?php if(count($travels)>0): ?>
                    <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td class="text-center"><img src="<?php echo e(asset('storage/'.$travel->image)); ?>" style="width: 30%" alt=""></td>
                        <td><?php echo e($travel->nama); ?></td>
                        <td><?php echo e($travel->deskripsi); ?></td>
                        <td><?php echo e($travel->harga); ?></td>
                        <td><?php echo e($travel->min_pax); ?></td>
                        <td>
                            <div class="btn-group">
                                <form action="/admin/travel/<?php echo e($travel->id); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-sm bg-danger text-white rounded" onclick="return confirm('Are You Sure to Delete this post')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                <a href="/admin/travel/<?php echo e($travel->id); ?>/edit" class="btn btn-sm bg-primary text-white" type="button">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="<?php echo e(route('travel.show', ['travel' => $travel->id])); ?>" class="btn btn-sm bg-success text-white" type="button">
                                    <i class="fa-regular fa-square-check"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="7">No record Found</td>
                    </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/travel/index.blade.php ENDPATH**/ ?>
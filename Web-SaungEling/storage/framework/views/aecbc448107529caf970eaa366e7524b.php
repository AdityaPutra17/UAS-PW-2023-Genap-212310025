
<?php $__env->startSection('content'); ?>

<div class="row">
    <h1 class="mt-3 fw-bold">Culinary</h1>
    
    <div class="col-md-8">
        <div class="card-body mt-3">
            <div class="table-responsive shadow">
                <table class="table table-striped">
                    <thead class="fs-6 fw-bold bg-light">
                        <tr class="fs-7">
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        <?php $__currentLoopData = $kuliners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kuliner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>katgori</td>
                            <td><?php echo e($kuliner->deskripsi); ?></td>
                            <td><?php echo e($kuliner->kategori_id); ?></td>
                            <td><?php echo e($kuliner->harga); ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    
    <div class="col-md-4 mt-3">
        <div class="card shadow " style="width: 20rem; ">
            <div class="card-header">
                Form Destination
            </div>
            <form action="" enctype="" class="p-2">
                <div class="mb-3">
                    <label class="form-label" for="">Kategori</label>
                    <select class="form-select" name="kategori_id">
                        <?php $__currentLoopData = $kat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kategori->id); ?>"><?php echo e($kategori->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi</label>
                    <textarea class="form-control description" name="dekripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga</label>
                    <input type="text" class="form-control price" placeholder="IDR">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="text-end">
                    <button class="btn btn-danger" type="reset">Clear</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/adminkuliner.blade.php ENDPATH**/ ?>
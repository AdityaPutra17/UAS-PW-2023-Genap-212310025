
<?php $__env->startSection('content'); ?>

<div class="col-md-4 mt-3">
    <div class="card shadow " style="width: 20rem; ">
        <div class="card-header">
            Form Travel
        </div>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger mb-2">
            <strong>Errorr!</strong><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <?php if($massage = Session::get('success')): ?>
        <div class="alert alert-success mb-2">
            <p><?php echo e($massage); ?></p>
        </div>
        <?php endif; ?>

        <form action=<?php echo e(url("admintravel")); ?> method="POST" enctype="multipart/form-data" class="p-2">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Deskripsi</label>
                <textarea class="form-control description" name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control price" placeholder="IDR">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Minimal Pax</label>
                <input type="text" name="min_pax" class="form-control" placeholder="pax">

            </div>
            <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <img class="img-preview img-fluid">
                <input type="file" name="image" class="form-control" accept=".png, .jpg, .jpeg" id="image" onchange="previewImage()">
            </div>
            <div class="text-end">
                <button class="btn btn-danger" type="reset">Clear</button>
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src =
        }
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/travels/create.blade.php ENDPATH**/ ?>
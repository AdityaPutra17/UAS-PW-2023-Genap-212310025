
<?php $__env->startSection('content'); ?>

<div class="row">
    <h1 class="mt-3 fw-bold">Travel</h1>
    
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
                            <th>Harga</th>
                            <th>Min.pax</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        <?php if(count($travel)>0): ?>

                        <?php $__currentLoopData = $travel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><img src=<?php echo e(url('/assets/img/uploads/'.$travel->image)); ?> style="width: 80%" alt=""></td>
                            <td><?php echo e($travel->nama); ?></td>
                            <td><?php echo e($travel->deskripsi); ?></td>
                            <td><?php echo e($travel->harga); ?></td>
                            <td><?php echo e($travel->min_pax); ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button" onclick="RemoveItem(<?php echo e($travel->id); ?>)">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button" onclick="EditItem(<?php echo e($travel->id); ?>)">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <a href="<?php echo e(route('destroy_travel', $travel->id)); ?>" title="Detail" class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    
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

    const RemoveItem = (id) => {
        if (confirm("Are you sure wants to remove this item ?")) {
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                var data = JSON.parse(this.response);
                alert(data.message);
                window.location.href = "<?php echo e(route('m_travel')); ?>";
            }
            xmlhttp.open("GET", "<?php echo e(url('')); ?>/admin/admintravel" + id);
            xmlhttp.send();
        }
    }

    const EditItem = (id) => {
        var targetDiv = document.getElementById("form-product");
        let id_ = targetDiv.getElementsByClassName("id")[0];
        let name = targetDiv.getElementsByClassName("nama")[0];
        let desc = targetDiv.getElementsByClassName("deskripsi")[0];
        let price = targetDiv.getElementsByClassName("harga")[0];
        let price = targetDiv.getElementsByClassName("min_pax")[0];
        let price = targetDiv.getElementsByClassName("image")[0];

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            var data = JSON.parse(this.response);
            id_.value = data.id;
            name.value = data.name;
            desc.value = data.description;
            price.value = data.price;
            if (data.is_active === 1) {
                is_active_Y.checked = true;
            } else {
                is_active_N.checked = true;
            }
        }
        xmlhttp.open("GET", "<?php echo e(url('')); ?>/master-data/products/edit/" + id);
        xmlhttp.send();
    }

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/admintravel.blade.php ENDPATH**/ ?>
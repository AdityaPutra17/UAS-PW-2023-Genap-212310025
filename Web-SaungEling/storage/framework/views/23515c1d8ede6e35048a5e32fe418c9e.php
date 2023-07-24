
<?php $__env->startSection('content'); ?>

<div class="row">
    <h1 class="mt-3 fw-bold">Destination</h1>
    
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-6 text-secondary">
                        <tr>
                            <td>1</td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>Saung Eling</td>
                            <td>lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit</td>
                            <td>165.00</td>
                            <td>Ready</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>Saung Eling</td>
                            <td>lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit</td>
                            <td>165.00</td>
                            <td>Ready</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="assets/img/imgdestinasi.png" style="width: 80%" alt=""></td>
                            <td>Saung Eling</td>
                            <td>lorem ipsum dolor sit amet consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit</td>
                            <td>165.00</td>
                            <td>Ready</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm bg-danger text-white" type="button">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <button class="btn btn-sm bg-primary text-white" type="button">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="btn btn-sm bg-success text-white" type="button">
                                        <i class="fa-regular fa-square-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
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
                    <label for="" class="form-label">Status</label>
                    <div class="d-flex">
                        <label class="me-3">
                            <input type="radio" class="is_active_Y" name="is_active" value="1">Ready
                        </label>
                        <label class="me-3">
                            <input type="radio" class="is_active_N" name="is_active" value="0">No
                        </label>
                    </div>
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

<?php echo $__env->make('tamplateadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/admin/admindestinasi.blade.php ENDPATH**/ ?>
<!-- resources/views/travels/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Travel</title>
</head>
<body>
    <h1>Edit Travel</h1>

    <form action="<?php echo e(route('travels.update', $travel->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo e($travel->nama); ?>" required><br>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi" required><?php echo e($travel->deskripsi); ?></textarea><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?php echo e($travel->harga); ?>" required><br>

        <label for="min_pax">Min Pax:</label>
        <input type="number" name="min_pax" id="min_pax" value="<?php echo e($travel->min_pax); ?>" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
<?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/travels/edit.blade.php ENDPATH**/ ?>
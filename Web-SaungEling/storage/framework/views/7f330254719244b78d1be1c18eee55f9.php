<div class="container">
    <h1 class="title" style="margin-bottom: 10px"><b>Destination</b></h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
        <?php
        $titlePackages = ['Package 1', 'Package 2', 'Package 3', 'Package 4', 'Package 5', 'Package 6'];
        $descriptions = ['Description 1', 'Description 2', 'Description 3', 'Description 4', 'Description 5', 'Description 6'];
        $prices = ['$100', '$200', '$300', '$400', '$500', '$600'];
        $minimalPax = [2, 3, 4, 2, 3, 4];
        ?>

        <?php for($i = 0; $i < 6; $i++): ?>
        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 18rem;">
                <img src="assets/travel.png" class="card-img-top filter" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($titlePackages[$i]); ?></h5>
                    <p class="card-text"><?php echo e($descriptions[$i]); ?></p>
                    <div class="row row-cols-2">
                        <a href="#" class="btn" style="background-color: #04450B; color: #fff"><?php echo e($prices[$i]); ?></a>
                        <h6 class="text-center " style=";align-self: center; margin-bottom: -20px">Minimal pax <br><?php echo e($minimalPax[$i]); ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<?php /**PATH D:\final projek\WEB\PW_saungeling\Web-SaungEling\SaungEling\resources\views/destinasi.blade.php ENDPATH**/ ?>
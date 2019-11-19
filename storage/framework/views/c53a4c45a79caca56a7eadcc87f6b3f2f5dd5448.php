<?php $__env->startSection('title'); ?>
    Food
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="section bg-light py-5  bottom-slant-gray">
        <div class="clearfix mb-5 pb-5">
            <div class="container-fluid">
                <div class="row" data-aos="fade">
                    <div class="col-md-12 text-center heading-wrap">
                        <h2>Recipts for Foods</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <a href="/food/create">
                <button class="btn-primary">
                    Create Foods
                </button>
            </a>
            <table class="table table-striped">
                <tr>
                    <th>IMAGE</th>
                    <th>NAMA</th>
                    <th>RECIPT</th>
                    <th>ACTION</th>
                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img width="100" height="100" src="<?php echo e("images/".$d->image); ?>" alt=""></td>
                        <td><?php echo e($d->name); ?></td>
                        <td><?php echo e($d->recipt); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        <br><br><br><br><br><br><br><br>
    </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Cooking_Guide.V2\resources\views/food/indexFood.blade.php ENDPATH**/ ?>
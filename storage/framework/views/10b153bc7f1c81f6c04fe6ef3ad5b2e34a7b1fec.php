<?php $__env->startSection('title'); ?>
    Cooking Guide
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section bg-light py-5  bottom-slant-gray">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <img src="img/guide.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="text-left heading-wrap">
                        <h2 data-aos="fade-up">Cooking Guide</h2>
                    </div>
                    <!-- <h3 class="mb-4">Welcome To Our Restaurant</h3> -->
                    <p>The Cooking Guide is a website that specializes in making stoves to make good food and delicious drinks.</p>
                    <p>it was created based on complaints in cooking. to create more variant foods.</p>
                    
                </div>

            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Cooking_Guide.V2\resources\views/home/index.blade.php ENDPATH**/ ?>
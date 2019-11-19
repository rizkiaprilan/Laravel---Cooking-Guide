<?php $__env->startSection('title'); ?>
    Create Some Food
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section bg-light py-5  bottom-slant-gray">
        <div class="bg-contact2 container" >
            <div class="container-contact2">
                <div class="wrap-contact2">
                    <form class="contact2-form validate-form" action="/drink/index" method="post">
                        
                        
                        
                        
                        <?php echo csrf_field(); ?>
                        <span class="contact2-form-title">
						Create Recipt
					</span>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="NAME"></span>
                        </div>

                        <div class="wrap-input2 " >
                            <input class="input2" type="file" name="image">
                            <span class="focus-input2" data-placeholder="IMAGE"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate = "recipt is required">
                            <textarea class="input2" name="recipt" rows="10" cols="50" ></textarea>
                            <span class="focus-input2" data-placeholder="RECIPT"></span>
                        </div>

                        <div class="container-contact2-form-btn">
                            <div class="wrap-contact2-form-btn">
                                <div class="contact2-form-bgbtn"></div>
                                <button class="contact2-form-btn">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Cooking_Guide.V2\resources\views/drink/create.blade.php ENDPATH**/ ?>
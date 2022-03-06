
<?php $__env->startSection('page_body'); ?>


<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

             <div class="" style="margin-top: 150px;">
                <img src="<?php echo e(asset('template/img/404.jpg')); ?>" style="width:150px;height:150px;border-radius: 10%;">
                 <h1 class="mb-0 mt-3">4 0 4</h1>
                 <p class="mb-0" style="font-size:21px;">page not found</p>
                 <a href="<?php echo e(url('/')); ?>">click here to go to home page</a>
             </div>

        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.primary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jmRipon\resources\views/errors/404.blade.php ENDPATH**/ ?>
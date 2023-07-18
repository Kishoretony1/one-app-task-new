<?php $__env->startSection('content'); ?>
<div class="container alert alert-warning alert-dismissible fade show" role="alert">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card "  style="background: #fff3cd">
                <div class="card-header" style="text-align: center">
                    <h2>
                        <?php echo e(__('Dashboard')); ?></h2></div>

                <div class="card-body" style="text-align: center">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>

        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/roles-app/resources/views/home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">

        <div class="col-md-8">

<div class="card">





  <div class="card-header">Create Roles</div>
  <div class="card-body">

      <form action="<?php echo e(route('role_store')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Role</label></br>
        <input type="text" name="role_name" id="role_name" class="form-control" required></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <div style="
        display: flex;
    ">
            <input type="submit" value="Save" class="btn btn-success" required></br>
            <a href="<?php echo e(route('index')); ?>" class="btn btn-primary btn-sm" style="padding: 10px;margin-left:20px;"> Back</a>
        </div>

    </form>


  </div>
</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/roles-app/resources/views/roles/roles_create.blade.php ENDPATH**/ ?>
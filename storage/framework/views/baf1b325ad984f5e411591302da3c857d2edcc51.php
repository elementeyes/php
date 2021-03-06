<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Edit</h3>
      </div>
    </div>
  </div>

  <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
      <strong>nah </strong> There were some problems with your input.<br>
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>

  <?php endif; ?>

  <?php echo Form::model($location, ['method'=>'PATCH','route'=>['locations.update', $location->id]]); ?>

    <?php echo $__env->make('locations.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('locations.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/locations/edit.blade.php ENDPATH**/ ?>
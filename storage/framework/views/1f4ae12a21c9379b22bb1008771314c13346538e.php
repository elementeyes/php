<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
<div class="col-lg-12">
<div class="pull-left">
<h3>Add New</h3>
</div>
</div>
  </div>


  <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
<strong>nah</strong> bad input. <br>
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
  <?php endif; ?>

  <?php echo Form::open(['route' => 'location.store', 'method' => 'LOCATION']); ?>

<?php echo $__env->make('location.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('location.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/location/create.blade.php ENDPATH**/ ?>
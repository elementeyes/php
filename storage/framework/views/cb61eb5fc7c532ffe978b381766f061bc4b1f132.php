<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
  <h3>Show Info</h3> <a class="btn btn-xs btn-primary" href="<?php echo e(route('locations.index')); ?>">back</a>
      </div>
    </div>
  </div>

<div class="row">
<div class="col-xs-12">
  <div class="form-group">
    <strong>Name:</strong>
    <?php echo e($location->name); ?>

</div>



<div class="col-xs-12">
  <div class="form-group">
    <strong>Location:</strong>
    <?php echo e($location->location); ?>

</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Town:</strong>
    <?php echo e($location->town); ?>

</div>
</div>

<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('locations.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/locations/show.blade.php ENDPATH**/ ?>
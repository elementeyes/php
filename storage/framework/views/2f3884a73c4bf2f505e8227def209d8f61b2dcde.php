<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
  <h3>Show Info</h3> <a class="btn btn-xs btn-primary" href="<?php echo e(route('posts.index')); ?>">back</a>
      </div>
    </div>
  </div>

<div class="row">
<div class="col-xs-12">
  <div class="form-group">
    <strong>Name:</strong>
    <?php echo e($post->name); ?>

</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Date:</strong>
    <?php echo e($post->date); ?>

</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Location:</strong>
    <?php echo e($post->location); ?>

</div>

<div class="col-xs-12">
  <div class="form-group">
    <strong>Tickets:</strong>
    <?php echo e($post->tickets); ?>

</div>
</div>

<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('posts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/posts/show.blade.php ENDPATH**/ ?>
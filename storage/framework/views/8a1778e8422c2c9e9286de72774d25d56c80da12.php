<div class="container">
<div class="row">
  <div class="container" style="max-width:800px;">
  <div class="col-xs-12">
<div class="form-group">
  <strong>Name : </strong>
  <?php echo Form::text('name', null, ['placeholder'=>'Name','class'=>'form-control']); ?>

</div>
  </div>
</div>
<div class="container" style="max-width:800px;">
  <div class="col-xs-12">
<div class="form-group">
  <strong>Date : </strong>
  <?php echo Form::text('date', null, ['placeholder'=>'Date','class'=>'form-control']); ?>

</div>
  </div>
</div>
<div class="container" style="max-width:800px;">
  <div class="col-xs-12">
  <div class="form-group">
  <strong>Location : </strong>
  <?php echo Form::text('location', null, ['placeholder'=>'location','class'=>'form-control']); ?>

  </div>
  </div>
</div>
<div class="container" style="max-width:800px;">
  <div class="col-xs-12">
  <div class="form-group">
  <strong>Tickets : </strong>
  <?php echo Form::text('tickets', null, ['placeholder'=>'tickets','class'=>'form-control']); ?>

  </div>
  </div>
</div>

<div class="container">
  <center>
<div class="col-xs-12">
  <a class="btn btn-xs btn-success" href="<?php echo e(route('posts.index')); ?>">Back</a>
  <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
</div>
</center>
</div>
</div>
</div>
<?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/posts/form.blade.php ENDPATH**/ ?>
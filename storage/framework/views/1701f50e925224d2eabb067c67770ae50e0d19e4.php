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
  <strong>Location : </strong>
  <?php echo Form::text('location', null, ['placeholder'=>'location','class'=>'form-control']); ?>

  </div>
  </div>
</div>
<div class="container" style="max-width:800px;">
  <div class="col-xs-12">
  <div class="form-group">
  <strong>Town : </strong>
  <?php echo Form::text('town', null, ['placeholder'=>'town','class'=>'form-control']); ?>

  </div>
  </div>
</div>

<div class="container">
  <center>
<div class="col-xs-12">
  <a class="btn btn-xs btn-success" href="<?php echo e(route('location.index')); ?>">Back</a>
  <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
</div>
</center>
</div>
</div>
</div>
<?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/location/form.blade.php ENDPATH**/ ?>
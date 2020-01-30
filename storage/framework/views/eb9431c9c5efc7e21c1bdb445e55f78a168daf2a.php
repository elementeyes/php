<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row">
<div class="col-lg-12">
  <h3>Location/Admin</h3>
</div>
</div>
<br>
<div class="row">
  <div class="col-sm-12">
    <div class="pull-right">
    <a class="btn btn-xs btn-success" href="<?php echo e(route('locations.create')); ?>">Create New</a>
  </div>
  </div>
  </div>
<br>

<?php if($message = Session::get('success')): ?>
<div class ="alert alert-success">
<p><?php echo e($message); ?></p>
</div>

<?php endif; ?>

<input class="form-control" id="myInput" type="text" placeholder="Search..">
<table class="table table-bordered">
  <thead>
<tr>
<th>#</th>
<th>Name</th>

<th>Locaton</th>
<th>town</th>
<th width="300px">Actions</th>
</tr>
</thead>
<?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody id="myTable">
  <tr>
    <td><?php echo e(++$i); ?></td>
    <td><?php echo e($location->name); ?></td>

    <td><?php echo e($location->location); ?></td>
    <td><?php echo e($location->town); ?></td>
    <td>
           <a class="btn btn-xs btn-info" href="<?php echo e(route('locations.show', $location->id)); ?>">Show</a>
           <a class="btn btn-xs btn-primary" href="<?php echo e(route('locations.edit', $location->id)); ?>">Edit</a>

 <?php echo Form::open(['method' => 'DELETE', 'route'=>['locations.destroy',$location->id], 'style'=> 'display:inline']); ?>

<?php echo Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']); ?>

<?php echo Form::close(); ?>

    </td>
  </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php echo $locations->links(); ?>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('locations.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/locations/index.blade.php ENDPATH**/ ?>
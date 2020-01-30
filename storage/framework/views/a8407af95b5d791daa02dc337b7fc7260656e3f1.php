<?php $__env->startSection('content'); ?>
<div class="container">

<div class="row">
<div class="col-lg-12">
  <h3>Program/Admin</h3>
</div>
</div>
<br>
<div class="row">
  <div class="col-sm-12">
    <div class="pull-right">
    <a class="btn btn-xs btn-success" href="<?php echo e(route('posts.create')); ?>">Create New</a>
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
<th>Date</th>
<th>Locaton</th>
<th>tickets</th>
<th width="300px">Actions</th>
</tr>
</thead>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody id="myTable">
  <tr>
    <td><?php echo e(++$i); ?></td>
    <td><?php echo e($post->name); ?></td>
    <td><?php echo e($post->date); ?></td>
    <td><?php echo e($post->location); ?></td>
    <td><?php echo e($post->tickets); ?></td>
    <td>
           <a class="btn btn-xs btn-info" href="<?php echo e(route('posts.show', $post->id)); ?>">Show</a>
           <a class="btn btn-xs btn-primary" href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>

 <?php echo Form::open(['method' => 'DELETE', 'route'=>['posts.destroy',$post->id], 'style'=> 'display:inline']); ?>

<?php echo Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']); ?>

<?php echo Form::close(); ?>

    </td>
  </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<?php echo $posts->links(); ?>


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

<?php echo $__env->make('posts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/posts/index.blade.php ENDPATH**/ ?>
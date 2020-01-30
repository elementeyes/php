  <body style="background-image: url('<?php echo e(asset('images/2.jpg')); ?>'); background-size: cover;">
<div class="container">
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="container">
<div class="col-lg-12"><center>
  <h3 style="color: white; font-family:MV Boli;">Our Program</h3></center>
</div>
</div>
</div><br><br>
<div class="container" >
<input class="form-control" id="myInput" type="text" placeholder="Search.." style="max-width:200px;"><br>
<table class="table table-striped table-responsive-md ">
<thead style="color: white; font-family:MV Boli;">
<tr>

<th>Play</th>
<th>Date</th>
<th>Location</th>
<th>Tickets</th>

</tr>
</thead>
 <tbody id="myTable" style="color: white; font-family:MV Boli;">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>

    <td><?php echo e($post->name); ?></td>
    <td><?php echo e($post->date); ?></td>
    <td><?php echo e($post->location); ?></td>
    <td><?php echo e($post->tickets); ?></td>

  </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
<div class="container" >
<?php echo $posts->links(); ?>

</div>

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
</div>
</body>

<?php echo $__env->make('program.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\xampp\htdocs\laravel\teatur\resources\views/program/index.blade.php ENDPATH**/ ?>
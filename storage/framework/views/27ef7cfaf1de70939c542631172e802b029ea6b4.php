<div><a href="/">Home</a></div>
<a href="<?php echo e(route('cities.create')); ?>">New city</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($cities->firstItem() + $key); ?>.</td>
<td><?php echo e($city->nombre); ?></td>
<td><?php echo e($city->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('cities.edit', $city)); ?>">Edit</a>

<form Action="<?php echo e(route('cities.delete', $city)); ?>" method="post"
<?php echo csrf_field(); ?>
<button type="submit">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr>
<td colspan="5">No data found in table </td>
</tr>
<?php endif; ?>
</tbody>
</table>
<?php /**PATH C:\crud\crud\resources\views/cities/index.blade.php ENDPATH**/ ?>
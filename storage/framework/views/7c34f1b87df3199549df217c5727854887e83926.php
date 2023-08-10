<div><a href="/">Home</a></div>
<a href="<?php echo e(route('departaments.create')); ?>">New departament</a>

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
<?php $__empty_1 = true; $__currentLoopData = $departaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $departament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($departaments->firstItem() + $key); ?>.</td>
<td><?php echo e($departament->nombre); ?></td>
<td><?php echo e($departament->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('departaments.edit', $departament)); ?>">Edit</a>

<form Action="<?php echo e(route('departaments.delete', $departament)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/departaments/index.blade.php ENDPATH**/ ?>
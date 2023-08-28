<div><a href="/">Home</a></div>
<a href="<?php echo e(route('bills.create')); ?>">New bills</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>apellido</td>
<td>fecha</td>
<td>productos</td>
<td>precio</td>
<td>employee</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($bills->firstItem() + $key); ?>.</td>
<td><?php echo e($bill->nombre); ?></td>
<td><?php echo e($bill->apellido); ?></td>
<td><?php echo e($bill->fecha); ?></td>
<td><?php echo e($bill->productos); ?></td>
<td><?php echo e($bill->precio); ?></td>




<td><?php echo e($bill->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('bills.edit', $bill)); ?>">Edit</a>

<form Action="<?php echo e(route('bills.delete', $bill)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/bills/index.blade.php ENDPATH**/ ?>
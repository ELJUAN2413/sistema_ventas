<div><a href="/">Home</a></div>
<a href="<?php echo e(route('detail__invoices.create')); ?>">New detail__invoices</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>cantidad</td>
<td>precio</td>
<td>bills</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $detail__invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $detail__invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($detail__invoices->firstItem() + $key); ?>.</td>
<td><?php echo e($detail__invoice->cantidad); ?></td>
<td><?php echo e($detail__invoice->precio); ?></td>


<td><?php echo e($employee->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('detail__invoices.edit', $detail__invoice)); ?>">Edit</a>

<form Action="<?php echo e(route('detail__invoices.delete', $detail__invoice)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/detail__invoices/index.blade.php ENDPATH**/ ?>
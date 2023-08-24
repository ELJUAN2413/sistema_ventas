<div><a href="/">Home</a></div>
<a href="<?php echo e(route('customers.create')); ?>">New customers</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>apellido</td>
<td>cedula</td>
<td>correo</td>
<td>telefono</td>
<td>direccion</td>
<td>cargo</td>
<td>city</td>
<td>departament</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($customers->firstItem() + $key); ?>.</td>
<td><?php echo e($customer->nombre); ?></td>
<td><?php echo e($customer->apellido); ?></td>
<td><?php echo e($customer->cedula); ?></td>
<td><?php echo e($customer->correo); ?></td>
<td><?php echo e($customer->telefono); ?></td>
<td><?php echo e($customer->direccion); ?></td>
<td><?php echo e($customer->cargo); ?></td>



<td><?php echo e($customer->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('customers.edit', $customer)); ?>">Edit</a>

<form Action="<?php echo e(route('customers.delete', $customer)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/customers/index.blade.php ENDPATH**/ ?>
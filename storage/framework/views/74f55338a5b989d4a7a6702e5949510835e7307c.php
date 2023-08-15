<div><a href="/">Home</a></div>
<a href="<?php echo e(route('employees.create')); ?>">New employee</a>

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
<?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($employees->firstItem() + $key); ?>.</td>
<td><?php echo e($employee->nombre); ?></td>
<td><?php echo e($employee->apellido); ?></td>
<td><?php echo e($employee->cedula); ?></td>
<td><?php echo e($employee->correo); ?></td>
<td><?php echo e($employee->telefono); ?></td>
<td><?php echo e($employee->direccion); ?></td>
<td><?php echo e($employee->cargo); ?></td>



<td><?php echo e($employee->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('employees.edit', $employee)); ?>">Edit</a>

<form Action="<?php echo e(route('employees.delete', $employee)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/Employees/index.blade.php ENDPATH**/ ?>
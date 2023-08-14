<div><a href="/">Home</a></div>
<a href="<?php echo e(route('clients.create')); ?>">New client</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>cedula</td>
<td>correo</td>
<td>telefono</td>
<td>direccion</td>
<td>cities</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($clients->firstItem() + $key); ?>.</td>
<td><?php echo e($client->nombre); ?></td>
<td><?php echo e($client->cedula); ?></td>
<td><?php echo e($client->correo); ?></td>
<td><?php echo e($client->telefono); ?></td>
<td><?php echo e($client->direccion); ?></td>

<td><?php echo e($client->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('clients.edit', $client)); ?>">Edit</a>

<form Action="<?php echo e(route('clients.delete', $client)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/clients/index.blade.php ENDPATH**/ ?>
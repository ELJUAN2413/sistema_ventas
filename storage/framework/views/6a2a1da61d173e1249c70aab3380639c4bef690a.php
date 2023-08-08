<div><a href="/">Home</a></div>
<a href="<?php echo e(route('categories.create')); ?>">New Category</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<table eellpadding="10" eellspacing="1" border="1">
<thead>
<tr>
<td>No.</td>
<td>nombre</td>
<td>Description</td>
<td>Timestamp</td>
<td>Action</td>
</tr>
</thead>
<tbody>
<?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr>
<td><?php echo e($categories->firstItem() + $key); ?>.</td>
<td><?php echo e($category->nombre); ?></td>
<td><?php echo e($category->description); ?></td>
<td><?php echo e($category->created_at->format('F d, Y')); ?></td>
<td>
<a href="<?php echo e(route('categories.edit', $category)); ?>">Edit</a>

<form Action="<?php echo e(route('categories.delete', $category)); ?>" method="post"
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
<?php /**PATH C:\crud\crud\resources\views/categories/index.blade.php ENDPATH**/ ?>
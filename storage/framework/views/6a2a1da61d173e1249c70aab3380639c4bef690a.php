<div><a href="/">home</a></div>
<a href="<?php echo e(route('categories.create')); ?>">New category</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?> </div>
<?php endif; ?>

<table eellpadding="10" eellspacing="1" border="1">
  <thead>
    <tr>
      <td>no.</td>
      <td>name</td>
      <td>description</td>
      <td>timestamps</td>
      <td>action</td>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <td><?php echo e($categories->firstitem() + $key); ?>.</td>
      <td><?php echo e($category->description); ?></td>
      <td><?php echo e($category->created_at->format('f d,y')); ?></td>
      <td>
        <a href="<?php echo e(route('categories.edit', $category)); ?>">edit</a>

        <form action="<?php echo e(route('categories.delete', $category)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <button type="submit">delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
      <td colspan="5">no data found in table</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
<?php /**PATH C:\crud\crud\resources\views/categories/index.blade.php ENDPATH**/ ?>
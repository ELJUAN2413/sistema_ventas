<div style="margin-bottom: 1em;">
<a href="<?php echo e(route('categories.index')); ?>">Category List</a>
</div>

<h1>Create Category</h1>
<?php if(session('message')): ?>
<div style="color: gree;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<form action="<?php echo e(route('categories.create')); ?>" method="post">
<?php echo csrf_field(); ?>
<div style="margint-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter category">
<?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div style="color: red;"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div style="margin-bottom:: 1em;">
<label for="departament">Description</label>
<input type="text" name="description" id="description" placeholder="Enter description">
<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<div style="color: red;"><?php echo e($message); ?></div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div>
<button type="submit">Submit</button>
</div>
</form>
<?php /**PATH C:\crud\crud\resources\views/categories/create.blade.php ENDPATH**/ ?>
<div style="margin-bottom: 1em;">
  <a href="<?php echo e(route('products.index')); ?>">product List</a>
</div>
city
<h1>Create product</h1>
<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<form action="<?php echo e(route('products.store')); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <div style="margin-bottom: 1em;">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Enter product" values="<?php echo e(old('nombre')); ?>">
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
  <div style="margin-bottom: 1em;">
    <label for="precio">precio</label>
    <input type="text" name="precio" id="precio" placeholder="Enter precio" values="<?php echo e(old('precio')); ?>">
    <?php $__errorArgs = ['precio'];
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
  <div style="margin-bottom: 1em;">
    <label for="category_id">category</label>
    <select name="category_id" id="category_id">
      <option value="">select</option>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option <?php if($category->id === (int)old('category_id')): ?>
        selected
        <?php endif; ?>
        value="<?php echo e($category->id); ?>"><?php echo e($category->nombre); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['category_id'];
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
<?php /**PATH C:\crud\crud\resources\views/products/create.blade.php ENDPATH**/ ?>
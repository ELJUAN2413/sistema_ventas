<div style="margin-bottom: 1em;">
    <a href="<?php echo e(route('detail__invoices.index')); ?>">detail__invoices List</a>
  </div>
  detail__invoices
  <h1>Create detail__invoices</h1>
  <?php if(session('message')): ?>
  <div style="color: green;"><?php echo e(session('message')); ?></div>
  <?php endif; ?>
  <form action="<?php echo e(route('detail__invoices.create')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div style="margin-bottom: 1em;">
      <label for="cantidad">cantidad</label>
      <input type="text" name="cantidad" id="cantidad" placeholder="Enter cantidad" values="<?php echo e(old('cantidad')); ?>">
      <?php $__errorArgs = ['cantidad'];
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
        <input type="decimal" name="precio" id="precio" placeholder="Enter precio" values="<?php echo e(old('precio')); ?>">
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
    <div style="margin-bottom: 1em;">
      <label for="bills_id">bills</label>
      <select name="bills_id" id="bills_id">
        <option value="">select</option>
        <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
        <?php if($bill->id === (int)old('bills_id')): ?>
          selected
          <?php endif; ?>
          value="<?php echo e($bill->id); ?>"><?php echo e($bill->nombre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['bills_id'];
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

      <button type="submit">Submit</button>
    </div>
  </form>
<?php /**PATH C:\crud\crud\resources\views/detail__invoices/create.blade.php ENDPATH**/ ?>
<div style="margin-bottom: 1em;">
    <a href="<?php echo e(route('bills.index')); ?>">bills List</a>
  </div>
  bills
  <h1>Create bills</h1>
  <?php if(session('message')): ?>
  <div style="color: green;"><?php echo e(session('message')); ?></div>
  <?php endif; ?>
  <form action="<?php echo e(route('bills.create')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div style="margin-bottom: 1em;">
      <label for="nombre">nombre</label>
      <input type="text" name="nombre" id="nombre" placeholder="Enter client" values="<?php echo e(old('nombre')); ?>">
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
        <label for="apellido">apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Enter apellido" values="<?php echo e(old('apellido')); ?>">
        <?php $__errorArgs = ['apellido'];
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
      <label for="fecha">fecha</label>
      <input type="date" name="fecha" id="fecha" placeholder="Enter fecha" values="<?php echo e(old('fecha')); ?>">
      <?php $__errorArgs = ['fecha'];
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
      <label for="productos">productos</label>
      <input type="text" name="productos" id="productos" placeholder="Enter productos" values="<?php echo e(old('productos')); ?>">
      <?php $__errorArgs = ['productos'];
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
      <label for="employees_id">employee</label>
      <select name="employees_id" id="employees_id">
        <option value="">select</option>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
        <?php if($employee->id === (int)old('employees_id')): ?>
          selected
          <?php endif; ?>
          value="<?php echo e($employee->id); ?>"><?php echo e($employee->nombre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      <?php $__errorArgs = ['employees_id'];
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
<?php /**PATH C:\crud\crud\resources\views/bills/create.blade.php ENDPATH**/ ?>
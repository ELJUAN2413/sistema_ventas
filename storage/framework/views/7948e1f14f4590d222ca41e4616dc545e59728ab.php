<div style="margin-bottom: 1em;">
<a href="<?php echo e(route('employees.index')); ?>">employees List</a>
</div>

<h1>Edit employees</h1>
<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<form action="<?php echo e(route('employees.edit', $employees)); ?>" method="get">
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
    <label for="cedula">cedula</label>
    <input type="text" name="cedula" id="cedula" placeholder="Enter cedula" values="<?php echo e(old('cedula')); ?>">
    <?php $__errorArgs = ['cedula'];
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
    <label for="correo">correo</label>
    <input type="text" name="correo" id="correo" placeholder="Enter correo" values="<?php echo e(old('correo')); ?>">
    <?php $__errorArgs = ['correo'];
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
    <label for="telefono">telefono</label>
    <input type="text" name="telefono" id="telefono" placeholder="Enter telefono" values="<?php echo e(old('telefono')); ?>">
    <?php $__errorArgs = ['telefono'];
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
    <label for="direccion">direccion</label>
    <input type="text" name="direccion" id="direccion" placeholder="Enter direccion" values="<?php echo e(old('direccion')); ?>">
    <?php $__errorArgs = ['direccion'];
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
      <label for="cargo">cargo</label>
      <input type="text" name="cargo" id="cargo" placeholder="Enter cargo" values="<?php echo e(old('cargo')); ?>">
      <?php $__errorArgs = ['cargo'];
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
    <label for="citiesy_id">city</label>
    <select name="cities_id" id="city_id">
      <option value="">select</option>
      <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option <?php if($city->id === (int)old('city_id')): ?>
        selected
        <?php endif; ?>
        value="<?php echo e($city->id); ?>"><?php echo e($city->nombre); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div style="color: red;"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

  <div>
    <button type="submit">Submit</button>
  </div>
</form>
<?php /**PATH C:\crud\crud\resources\views/employees/edit.blade.php ENDPATH**/ ?>
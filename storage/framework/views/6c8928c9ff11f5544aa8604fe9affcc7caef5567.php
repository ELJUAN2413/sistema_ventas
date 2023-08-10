<div style="margin-bottom: 1em;">
<a href="<?php echo e(route('cities.index')); ?>">city List</a>
</div>

<h1>Edit city</h1>
<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>
<form action="<?php echo e(route('cities.edit', $city)); ?>" method="post">
<?php echo csrf_field(); ?>
<div style="margin-bottom: 1em;">
<label for="nombre">nombre</label>
<input type="text" name="nombre" id="nombre" placeholder="Enter city" value="<?php echo e($city->nombre); ?>">
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
<div>
<button type="submit">Submit</button>
</div>
<div style="margin-bottom: 1em;">
<label for="departament_id" id="departament_id">
<option value="">select</option>
<?php $__currentLoopData = $departaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departament): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option
<?php if($departament->id ===(int)$city->departament_id): ?>
selected
<?php endif; ?>
value="<?php echo e($departament->id); ?>"><?php echo e($departament->nombre); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php $__errorArgs = ['departament_id'];
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
<button type="submit">submit</button>
</div>
</form>
<?php /**PATH C:\crud\crud\resources\views/cities/edit.blade.php ENDPATH**/ ?>
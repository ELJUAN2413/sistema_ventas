<div style="margin-bottom: 1em;">
    <a href="<?php echo e(route('departamentos.index')); ?>">departamento list</a>
</div>

<h1>create departamento</h1>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>

<form action="<?php echo e(route('departamentos.create')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div style="margin-bottom: 1em;">
        <label for="name">name</label>
        <input type="text" name="name" id="name" placeholder="enter departamento" value="<?php echo e(old('name')); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div style="color:red;"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div>
    <button type="submit">submit</button>
    </div>


</form>
<?php /**PATH C:\crud\crud\resources\views/departamento/create.blade.php ENDPATH**/ ?>
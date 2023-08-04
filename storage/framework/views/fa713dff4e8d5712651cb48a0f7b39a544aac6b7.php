<div><a href="/">home</a></div>
<a href="<?php echo e(route('departamentos.create')); ?>">new departamento</a>

<?php if(session('message')): ?>
<div style="color: green;"><?php echo e(session('message')); ?></div>
<?php endif; ?>

<table eellpadding="10" eellspacing="1" border="1">
    <thead>
        <tr>
            <td>no</td>
            <td>name</td>
            <td>pais</td>
            <td>timestamp</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($departamentos->firstitem() + $key); ?>.</td>
            <td><?php echo e($departamento->name); ?></td>

            </td>
            <td>
                <a href="<?php echo e(route('departamentos.edit', $departamento)); ?>">edit</a>

                <form action="<?php echo e(route('departamentos.delete', $departamento)); ?>" method="post">
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

<?php /**PATH C:\crud\crud\resources\views/departamento/index.blade.php ENDPATH**/ ?>
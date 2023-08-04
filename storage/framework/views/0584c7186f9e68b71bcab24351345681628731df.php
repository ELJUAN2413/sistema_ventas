<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getlocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'laravel')); ?></title>


  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=nunito" rel="stylesheet">


  <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class=navbar-brand href="<?php echo e(url('/')); ?>">
          <?php echo e(config('app.name', 'laravel')); ?>

        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsupportedcontent"
          aria-controls="navbarsupportedcontent"
          ariaexpanded="false"
          aria-label="<?php echo e(__('toggle navigation')); ?>">
          <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarsupportedcontent">

          <ul class="navbar-nav me-auto">

          </ul>
          <ul class="navbar-nav ms-auto">
            <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has("login")): ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route("register.user")); ?>"><?php echo e(__("register")); ?></a>
</li>
<?php endif; ?>

<?php if(Route::has("register-user")): ?>
<li class=" nav-item">
              <a class="nav-link" href='<?php echo e(route("register.user")); ?>'><?php echo e(__("register")); ?></a>
            </li>
            <?php endif; ?>
            <?php else: ?>
            <li class="nav-item dropdown" ...>
              <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </div >
</body>

</html>
<?php /**PATH C:\crud\crud\resources\views/app.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
  <h1> Connexion </h1>
  <form method="GET" action="<?php echo e(route('login.validation')); ?>">
    <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nom d'utilisateur</label>
      <input type="text" class="form-control" name="username" placeholder="toto" autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Mot de passe</label>
      <input type="text" class="form-control" name="password" placeholder="Mot de passe" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>

  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unsecure/resources/views/auth/login.blade.php ENDPATH**/ ?>
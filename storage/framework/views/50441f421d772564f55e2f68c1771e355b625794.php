<?php $__env->startSection('content'); ?>
  <h1> Last news : </h1>

  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div>
    <a href="<?php echo e(route('home.article', $article)); ?>">
      <h3><?php echo $article->title  ?></h3>
    </a>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php echo e($articles->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unsecure/resources/views/welcome.blade.php ENDPATH**/ ?>
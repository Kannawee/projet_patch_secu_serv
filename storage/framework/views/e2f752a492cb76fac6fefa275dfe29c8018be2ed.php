<?php $__env->startSection('content'); ?>
  <h1> Hello <?php echo e(\Auth::user()->name); ?></h1>

  <p> Add a new article </p>
  <form method="POST" action="<?php echo e(route('admin.article.add')); ?>">
    <?php echo csrf_field(); ?>
    <label>Title :</label>
    <input type="text" name="title" />
    <label>Content :</label>
    <textarea name="content"></textarea>
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <button type="submit">Save my new article</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unsecure/resources/views/admin/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
  <h1> <?php echo $article->title ?> </h1>

  <p> <?php echo $article->content ?></p>


  <h4>Derniers commentaire :</h4>

  <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div>
    <?php echo $comment->author ?> à dit :
    <p><?php echo $comment->message ?></p>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  <form method="POST" action="<?php echo e(route('article.add.comment')); ?>" >
    <p>Author name : </p><input type="text" name="author" />
    <p>Message : </p><textarea name="message"></textarea>
    <input type="hidden" name="article_id" value="<?php echo e($article->id); ?>">
    <br>
    <button type="submit">Send my comment !</button>
  </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/unsecure/resources/views/article.blade.php ENDPATH**/ ?>
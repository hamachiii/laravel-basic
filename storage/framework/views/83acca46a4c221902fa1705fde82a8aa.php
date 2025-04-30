<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <p>こんにちは、<?php echo e($name); ?>さん！</p>
   <ul>
    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($language); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/index.blade.php ENDPATH**/ ?>
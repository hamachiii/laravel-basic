<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <h1>商品選択</h1>  
   
   <?php if($errors->any()): ?>
       <div>
           <ul>
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>
       </div>
   <?php endif; ?>     

   <form action="<?php echo e(route('sessions.store')); ?>" method="POST">
       <?php echo csrf_field(); ?>
       <select name="product_id">
           <option disabled selected value="">選択してください</option>
           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($product->id); ?>"><?php echo e($product->product_name); ?></option>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                         
       </select>
       <input type="submit" value="カートに入れる">
   </form>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/sessions/create.blade.php ENDPATH**/ ?>
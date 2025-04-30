<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <h1>仕入先登録</h1>

   <?php if($errors->any()): ?>
       <div>
           <ul>
               <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li><?php echo e($error); ?></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>
       </div>
   <?php endif; ?>    

   <form action="<?php echo e(route('vendors.store')); ?>" method="POST">
       <?php echo csrf_field(); ?>
       <table>
           <tr>
               <th>仕入先コード</th>
               <td>
                   <input type="number" name="vendor_code">
               </td>
           </tr>
           <tr>
               <th>仕入先名</th>
               <td>
                   <input type="text" name="vendor_name">
               </td>
           </tr>     
       </table>
       <input type="submit" value="登録">
   </form>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/vendors/create.blade.php ENDPATH**/ ?>
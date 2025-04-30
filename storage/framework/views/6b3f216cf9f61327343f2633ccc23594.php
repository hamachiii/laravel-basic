<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
    <h1><?php echo e($vendor->vendor_name); ?>の商品一覧</h1> 

   <table>
       <tr>
           <th>ID</th>
           <th>商品名</th>
           <th>価格</th>
           <th>作成日時</th>
           <th>更新日時</th>
       </tr>
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <tr>
               <td><?php echo e($product->id); ?></td>
               <td><?php echo e($product->product_name); ?></td>
               <td><?php echo e($product->price); ?></td>
               <td><?php echo e($product->created_at); ?></td>
               <td><?php echo e($product->updated_at); ?></td>
           </tr>            
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
   </table>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/vendors/show.blade.php ENDPATH**/ ?>
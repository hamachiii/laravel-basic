<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <h1>ショッピングカート</h1>

   <?php if(isset($product)): ?>
       <table>
           <tr>            
               <th>商品名</th>
               <td><?php echo e($product->product_name); ?></td>            
           </tr>        
           <tr>                        
               <th>価格</th>
               <td><?php echo e($product->price); ?>円</td>
           </tr>                    
       </table>

       <form action="<?php echo e(route('sessions.destroy')); ?>" method="POST">
           <?php echo csrf_field(); ?>
           <?php echo method_field('DELETE'); ?>
           <input type="submit" value="カートを空にする">
       </form>    
   <?php else: ?>
       <p>カートの中身は空です。</p>
   <?php endif; ?>

   <a href="<?php echo e(route('sessions.create')); ?>">商品選択ページ</a>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/sessions/index.blade.php ENDPATH**/ ?>
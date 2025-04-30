<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <table>
       <tr>
           <th>ID</th>
           <td><?php echo e($product->id); ?></td>
       </tr>
       <tr>
           <th>商品名</th>
           <td><?php echo e($product->product_name); ?></td>
       </tr>
       <tr>
           <th>価格</th>
           <td><?php echo e($product->price); ?></td>
       </tr>    
       <tr>
           <th>作成日時</th>
           <td><?php echo e($product->created_at); ?></td>            
       </tr>
       <tr>
           <th>更新日時</th>
           <td><?php echo e($product->updated_at); ?></td>
       </tr>      
   </table>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravel-basic/resources/views/products/show.blade.php ENDPATH**/ ?>
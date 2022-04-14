<!DOCTYPE html>
<html lang="en">
<head>
  <title>To-do list app</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

  <style>
    #heading {
      text-align: center;
    }
  </style>
</head>
<body style="background-color: #62757b;">

<div id=heading class="container pt-5">
  <h1>Your To-do Notes</h1>
</div>

<div class="container pt-5">
  <h2>My Tasks <a class="btn btn-info" href="/category-create">Create Task</a></h2>     

  <?php if(session()->has('success')): ?>
  <div class="alert alert-info" role="alert">
    <strong><?php echo e(session()->get('success')); ?></strong>
  </div>
  <?php endif; ?>

  <table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->index+1); ?></td>
        <td><?php echo e($category->title); ?></td>
        <td>
        	<a href="/category-edit/<?php echo e($category->id); ?>" class="btn btn-sm btn-info">Edit</a>
          <a href="/category-delete/<?php echo e($category->id); ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\todo project\laravelcrud\resources\views/categories/list.blade.php ENDPATH**/ ?>
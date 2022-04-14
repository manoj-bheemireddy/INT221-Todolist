<!DOCTYPE html>
<html lang="en">
<head>
  <title>To-do list app - Create Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body style="background-color: #62757b;">

<div class="container pt-5">
  <h2>New Task</h2>           
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/category-store">
        <?php echo csrf_field(); ?>
      <label>Title</label>
      <input type="text" name="title" class="form-control"
      value="<?php echo e(old('title')); ?>" 
       />

      <?php if($errors->has('title')): ?>
      <p class="text-danger"><?php echo e($errors->first('title')); ?></p>
      <?php endif; ?>

      <button class="btn btn-info mt-4" type="submit">Create</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\todo project\laravelcrud\resources\views/categories/new.blade.php ENDPATH**/ ?>
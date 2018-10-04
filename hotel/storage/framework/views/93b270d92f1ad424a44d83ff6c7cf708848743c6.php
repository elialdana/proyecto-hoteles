<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Habitaciones</title>
  </head>

    <p>
          <a href="<?php echo e(route('rooms')); ?>" class="btn btn-secondary">Regresar</a>
    </p>

<div class="container">
  <body>
  <div class="class my-10">
        <h2>
          Crear Habitación
        </h2>

        <?php if($errors->any()): ?>
          <div class="alert alert-danger">
            <h6>Por favor corregir los errores</h6>
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </ul>          
          </div>
        <?php endif; ?>
        
        
        <form method="POST" action="<?php echo e(url('rooms/store')); ?>">

          <?php echo e(csrf_field()); ?>


          <div class="form-group col-md-4">
            <label for="level">Nivel</label>
            <input class="form-control" type="text" name="level" id="level" value="<?php echo e(old('level')); ?>">          
          </div>

          <div class="form-group col-md-4">
            <label for="room_number">No. Habitación</label>
            <input class="form-control" type="text" name="room_number" id="room_number" value="<?php echo e(old('name')); ?>">          
          </div>
          
          <div class="form-group col-md-4">
            <label for="price">Precio</label>
            <input class="form-control" name="price" id="price">
          </div>

          <div class="form-group col-md-4">
            <label for="roomType">Tipo de Habitación</label>
            <select class="form-control" id="roomType">
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option><?php echo e($item->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>            

          <button type="submit" class="btn btn-primary">Crear</button>
        </form>

  </div>
  </body>
</div>  
</html>
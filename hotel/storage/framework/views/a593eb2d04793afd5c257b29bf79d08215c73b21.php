<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tipos de Habitación</title>
  </head>

    <p>
          <a href="<?php echo e(route('roomServices')); ?>" class="btn btn-secondary">Regresar</a>
    </p>

<div class="container">
  <body>
        <h2>
            Modificar Servicio
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
        
        
        <form method="POST" action="<?php echo e(url("roomServices/{$hotRoomServices->id}")); ?>">
          <?php echo e(method_field('PUT')); ?>

          <?php echo e(csrf_field()); ?>


        <div class="form-group col-md-4">
          <label for="name">Nombre</label>
          <input class="form-control" type="text" name="name" id="name" value="<?php echo e(old('name', $hotRoomServices->name)); ?>">
        </div>

        <div class="form-group col-md-4">
          <label for="description">Descripción</label>
          <input class="form-control" type="text" name="description" id="description" value="<?php echo e(old('description', $hotRoomServices->description)); ?>">
        </div>
        <div class="form-group col-md-4">
          <label for="price">Precio</label>
          <input class="form-control" type="text" name="price" id="price" value="<?php echo e(old('price', $hotRoomServices->price)); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

  </body>
</div>
</html>
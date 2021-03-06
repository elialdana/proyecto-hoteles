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
          <a href="{{ route('roomServices') }}" class="btn btn-secondary">Regresar</a>
    </p>

<div class="container">
  <body>
  <div class="class my-10">
        <h2>
          Crear Servicio
        </h2>

        @if($errors->any())
          <div class="alert alert-danger">
            <h6>Por favor corregir los errores</h6>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach  
            </ul>          
          </div>
        @endif
        
        
        <form method="POST" action="{{ url('roomServices/store') }}">

          {{ csrf_field() }}

          <div class="form-group col-md-4">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">          
          </div>

          <div class="form-group col-md-4">
            <label for="description">Descripción</label>
            <input class="form-control" type="text" name="description" id="description" value="{{ old('description') }}">          
          </div>
          
          <div class="form-group col-md-4">
            <label for="price">Precio</label>
            <input class="form-control" name="price" id="price">
          </div>
        

          <button type="submit" class="btn btn-primary">Crear</button>
        </form>

  </div>
  </body>
</div>  
</html>
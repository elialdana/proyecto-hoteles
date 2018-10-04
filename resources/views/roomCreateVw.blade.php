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
          <a href="{{ route('rooms') }}" class="btn btn-secondary">Regresar</a>
    </p>

<div class="container">
  <body>
  <div class="class my-10">
        <h2>
          Crear Habitación
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
        
        
        <form method="POST" action="{{ url('rooms/store') }}">

          {{ csrf_field() }}

          <div class="form-group col-md-4">
            <label for="level">Nivel</label>
            <input class="form-control" type="text" name="level" id="level" value="{{ old('level') }}">          
          </div>

          <div class="form-group col-md-4">
            <label for="room_number">No. Habitación</label>
            <input class="form-control" type="text" name="room_number" id="room_number" value="{{ old('name') }}">          
          </div>
          
          <div class="form-group col-md-4">
            <label for="price">Precio</label>
            <input class="form-control" name="price" id="price">
          </div>

          <div class="form-group col-md-4">
            <label for="roomType">Tipo de Habitación</label>
            <select class="form-control" id="roomType">
              @foreach($data as $item)
              <option>{{ $item->name }}</option>
              @endforeach
            </select>
          </div>            

          <button type="submit" class="btn btn-primary">Crear</button>
        </form>

  </div>
  </body>
</div>  
</html>
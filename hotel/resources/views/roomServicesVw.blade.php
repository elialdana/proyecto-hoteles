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
        
        <a href="{{ route('index')}}" class="btn btn-secondary">Regresar</a>
    </p>

<div class="container">

  <body>
    <div class="class my-10">
        <h2>
            Administrar Servicios a la Habitación
        </h2>
        
        <br>
        <form action="{{ route('roomServicesNew') }}" method="GET">
            <button type="submit" class="btn btn-success">Agregar (+)</button>
        </form> 
        <br>

        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('roomServicesEdit', $item) }}" class="btn btn-outline-primary btn-sm btn-block">Editar</a>
                            <form action="{{ route('roomServicesDestroy', $item) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-outline-danger btn-sm btn-block">Eliminar</button>
                            </form> 
                         </div>     
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </div>
</html>
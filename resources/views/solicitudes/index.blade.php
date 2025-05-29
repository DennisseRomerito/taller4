<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listado de Solicitudes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Sistema Solicitudes</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('solicitudes.create') }}">Crear Solicitud</a>
                  </li>
                </ul>
                <form class="d-flex" role="search" method="GET" action="{{ route('solicitudes.index') }}">
                  <input class="form-control me-2" type="search" name="search" placeholder="Buscar" aria-label="Buscar" />
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      
      <div class="row mt-3">
        <div class="col-3">
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('solicitudes.index') }}">Solicitudes</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Otra sección</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Enlace</a></li>
          </ul>
        </div>
        
        <div class="col-9">
          <p class="fs-1">Listado de Solicitudes</p>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tema</th>
                <th>Descripción</th>
                <th>Área</th>
                <th>Fecha Registro</th>
                <th>Fecha Cierre</th>
                <th>Estado</th>
                <th>Observación</th>
                <th>Usuario Existente</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($solicitudes as $solicitud)
                <tr>
                  <td>{{ $solicitud->id }}</td>
                  <td>{{ $solicitud->tema }}</td>
                  <td>{{ $solicitud->descripcion }}</td>
                  <td>{{ ucfirst($solicitud->area) }}</td>
                  <td>{{ $solicitud->fecha_registro }}</td>
                  <td>{{ $solicitud->fecha_cierre ?? '-' }}</td>
                  <td>{{ ucfirst($solicitud->estado) }}</td>
                  <td>{{ $solicitud->observacion ?? '-' }}</td>
                  <td>{{ $solicitud->usuarioExt ? 'Sí' : 'No' }}</td>
                  <td>
                    <a href="{{ route('solicitudes.edit', $solicitud->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('solicitudes.destroy', $solicitud->id) }}" method="POST" style="display:inline" onsubmit="return confirm('¿Eliminar esta solicitud?')">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

          {{-- Aquí puedes agregar paginación si usas paginate() --}}
          {{-- {{ $solicitudes->links() }} --}}
        </div>
      </div>
      
      <div class="row mt-4">
        <div class="col">
      <p class="h6">Hecho por: Dennisse Romero</p>
      <a href="http://127.0.0.1:8000/solicitudes/create">Ir a Crear</a>
  
        </div>
    </div>
  </div>  
</div>
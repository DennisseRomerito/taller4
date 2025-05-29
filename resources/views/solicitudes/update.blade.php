<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Solicitud</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>

        <div class="col-9 text-start">
          <p class="fs-1">Editar Solicitud</p>

          <form action="{{ route('solicitudes.update', $solicitud->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="input-group mb-3">
              <span class="input-group-text">Id</span>
              <input
                type="text"
                name="id"
                id="id"
                class="form-control"
                value="{{ $solicitud->id }}"
                readonly
              />
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Tema</span>
              <input
                type="text"
                name="tema"
                id="tema"
                value="{{ old('tema', $solicitud->tema) }}"
                class="form-control"
                required
              />
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Descripción</span>
              <textarea
                name="descripcion"
                id="descripcion"
                class="form-control"
                required
              >{{ old('descripcion', $solicitud->descripcion) }}</textarea>
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="area">Área</label>
              <select class="form-select" id="area" name="area" required>
                <option value="ti" {{ old('area', $solicitud->area) == 'ti' ? 'selected' : '' }}>TI</option>
                <option value="contabilidad" {{ old('area', $solicitud->area) == 'contabilidad' ? 'selected' : '' }}>Contabilidad</option>
                <option value="administrativo" {{ old('area', $solicitud->area) == 'administrativo' ? 'selected' : '' }}>Administrativo</option>
                <option value="operativo" {{ old('area', $solicitud->area) == 'operativo' ? 'selected' : '' }}>Operativo</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Fecha Registro</span>
              <input
                type="date"
                class="form-control"
                value="{{ $solicitud->fecha_registro }}"
                readonly
                disabled
              />
              <!-- Campo oculto para enviar la fecha_registro -->
              <input
                type="hidden"
                name="fecha_registro"
                value="{{ $solicitud->fecha_registro }}"
              />
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Fecha Cierre</span>
              <input
                type="date"
                class="form-control"
                value="{{ $solicitud->fecha_cierre }}"
                readonly
                disabled
              />
              <!-- Campo oculto para enviar la fecha_cierre -->
              <input
                type="hidden"
                name="fecha_cierre"
                value="{{ $solicitud->fecha_cierre }}"
              />
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="estado">Estado</label>
              <select class="form-select" id="estado" name="estado" required>
                <option value="solicitado" {{ old('estado', $solicitud->estado) == 'solicitado' ? 'selected' : '' }}>Solicitado</option>
                <option value="aprobado" {{ old('estado', $solicitud->estado) == 'aprobado' ? 'selected' : '' }}>Aprobado</option>
                <option value="rechazado" {{ old('estado', $solicitud->estado) == 'rechazado' ? 'selected' : '' }}>Rechazado</option>
              </select>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Observación</span>
              <textarea
                name="observacion"
                id="observacion"
                class="form-control"
              >{{ old('observacion', $solicitud->observacion) }}</textarea>
            </div>

            <div class="input-group mb-3">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="usuarioExt"
                  name="usuarioExt"
                  value="1"
                  {{ old('usuarioExt', $solicitud->usuarioExt) ? 'checked' : '' }}
                />
                <label class="form-check-label" for="usuarioExt">
                  Usuario Externo
                </label>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col">
          <p class="h6">Hecho por: Dennisse Romero</p>
          <a href="http://127.0.0.1:8000/solicitudes">Ir a Visualizar</a>
        </div>
      </div>
    </div>
  </body>
</html>

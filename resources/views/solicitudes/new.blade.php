<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Crear Nueva Solicitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
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
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
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
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Otra opción</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Deshabilitado</a>
            </li>
          </ul>
        </div>
        <div class="col-9 text-start">
          <p class="fs-1 mb-4">Crear Nueva Solicitud</p>

          <form action="{{ route('solicitudes.store') }}" method="post">
            @csrf

            <!-- Tema -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="tema-label">Tema</span>
              <input
                type="text"
                name="tema"
                id="tema"
                class="form-control"
                aria-describedby="tema-label"
                required
              />
            </div>

            <!-- Descripción -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="descripcion-label">Descripción</span>
              <textarea
                name="descripcion"
                id="descripcion"
                class="form-control"
                aria-describedby="descripcion-label"
                rows="4"
                required
              ></textarea>
            </div>

            <!-- Área -->
            <div class="input-group mb-3">
              <label class="input-group-text" for="area">Área</label>
              <select
                name="area"
                id="area"
                class="form-select"
                required
              >
                <option value="" disabled selected>Seleccione un área</option>
                <option value="ti">TI</option>
                <option value="contabilidad">Contabilidad</option>
                <option value="administrativo">Administrativo</option>
                <option value="operativo">Operativo</option>
              </select>
            </div>

            <!-- Estado -->
            <div class="input-group mb-3">
              <label class="input-group-text" for="estado">Estado</label>
              <select
                name="estado"
                id="estado"
                class="form-select"
                required
              >
                <option value="solicitado" selected>Solicitado</option>
                <option value="aprobado">Aprobado</option>
                <option value="rechazado">Rechazado</option>
              </select>
            </div>

            <!-- Observación -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="observacion-label">Observación (opcional)</span>
              <textarea
                name="observacion"
                id="observacion"
                class="form-control"
                aria-describedby="observacion-label"
                rows="3"
              ></textarea>
            </div>

            <!-- Usuario Externo -->
            <div class="form-check mb-3">
              <input
                class="form-check-input"
                type="checkbox"
                name="usuarioExt"
                id="usuarioExt"
                value="1"
              />
              <label class="form-check-label" for="usuarioExt">Usuario Existente</label>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Solicitud</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>

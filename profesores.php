<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores - Sistema de Horarios UTA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Sistema de Horarios UTA</h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="profesores.php">Profesores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="materias.php">Materias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carreras.php">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="grupos.php">Grupos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="horarios.php">Horarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        <section id="profesores">
            <h2>Profesores</h2>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProfesorModal">Añadir Profesor</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ejemplo Profesor</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nombre="Ejemplo Profesor">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="1">Eliminar</button>
                            <button class="btn btn-info btn-sm assign-btn" data-id="1" data-nombre="Ejemplo Profesor">Asignar materia</button>
                            <button class="btn btn-secondary btn-sm view-assignments-btn" data-id="1">Ver materia</button>
                        </td>
                    </tr>
                    <!-- Aquí puedes agregar más filas de ejemplo o dinámicamente con JavaScript -->
                </tbody>
            </table>
        </section>
    </main>

    <!-- Modal para añadir profesor -->
    <div class="modal fade" id="addProfesorModal" tabindex="-1" role="dialog" aria-labelledby="addProfesorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProfesorModalLabel">Añadir Profesor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-profesor-form">
                        <div class="form-group">
                            <label for="nombre_profesor">Nombre del Profesor</label>
                            <input type="text" class="form-control" id="nombre_profesor" name="nombre_profesor" required>
                            <small id="error-message" class="form-text text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Añadir Profesor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar profesor -->
    <div class="modal fade" id="editProfesorModal" tabindex="-1" role="dialog" aria-labelledby="editProfesorModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfesorModalLabel">Editar Profesor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-profesor-form">
                        <input type="hidden" id="edit-id_profesor" name="id_profesor">
                        <div class="form-group">
                            <label for="edit-nombre_profesor">Nombre del Profesor</label>
                            <input type="text" class="form-control" id="edit-nombre_profesor" name="nombre_profesor" required>
                            <small id="edit-error-message" class="form-text text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Aquí puedes agregar los scripts JavaScript para manejar las acciones de los botones -->
</body>
</html>

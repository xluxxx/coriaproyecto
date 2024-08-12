<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos - Sistema de Horarios UTA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Puedes agregar estilos personalizados aquí si es necesario */
    </style>
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
        <section id="grupos">
            <h2>Grupos</h2>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addGrupoModal">Añadir Grupo</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Grupo</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irán las filas de grupos -->
                    <tr>
                        <td>Grupo A</td>
                        <td>Ingeniería</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Fin de las filas de grupos -->
                </tbody>
            </table>
        </section>
    </main>

    <!-- Modal para añadir grupo -->
    <div class="modal fade" id="addGrupoModal" tabindex="-1" role="dialog" aria-labelledby="addGrupoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addGrupoModalLabel">Añadir Grupo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-grupo-form">
                        <div class="form-group">
                            <label for="nombre_grupo">Grupo</label>
                            <input type="text" class="form-control" id="nombre_grupo" name="nombre_grupo" required>
                        </div>
                        <div class="form-group">
                            <label for="id_carrera">Carrera</label>
                            <select class="form-control" id="id_carrera" name="id_carrera" required>
                                <option value="">Elige una carrera</option>
                                <option value="1">Ingeniería</option>
                                <option value="2">Medicina</option>
                                <option value="3">Derecho</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Añadir Grupo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar grupo -->
    <div class="modal fade" id="editGrupoModal" tabindex="-1" role="dialog" aria-labelledby="editGrupoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editGrupoModalLabel">Editar Grupo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-grupo-form">
                        <input type="hidden" id="edit-id_grupo" name="id_grupo">
                        <div class="form-group">
                            <label for="edit-nombre_grupo">Grupo</label>
                            <input type="text" class="form-control" id="edit-nombre_grupo" name="nombre_grupo" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-id_carrera">Carrera</label>
                            <select class="form-control" id="edit-id_carrera" name="id_carrera" required>
                                <option value="">Elige una carrera</option>
                                <option value="1">Ingeniería</option>
                                <option value="2">Medicina</option>
                                <option value="3">Derecho</option>
                            </select>
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
</body>
</html>

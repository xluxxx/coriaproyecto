<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras - Sistema de Horarios UTA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
        <section id="carreras">
            <h2>Carreras</h2>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCarreraModal">Añadir Carrera</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre de la Carrera 1</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre de la Carrera 2</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <div class="modal fade" id="addCarreraModal" tabindex="-1" role="dialog" aria-labelledby="addCarreraModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCarreraModalLabel">Añadir Carrera</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-carrera-form">
                        <div class="form-group">
                            <label for="nombre_carrera">Nombre de la Carrera</label>
                            <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Añadir Carrera</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCarreraModal" tabindex="-1" role="dialog" aria-labelledby="editCarreraModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCarreraModalLabel">Editar Carrera</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-carrera-form">
                        <div class="form-group">
                            <label for="edit-nombre_carrera">Nombre de la Carrera</label>
                            <input type="text" class="form-control" id="edit-nombre_carrera" name="nombre_carrera" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

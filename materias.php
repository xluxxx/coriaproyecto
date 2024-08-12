<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias - Sistema de Horarios UTA</title>
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
    </nav><!-- Aquí iría la barra de navegación si estuviera incluida -->
    <!-- <nav>Barra de navegación</nav> -->

    <main class="container mt-4">
        <section id="materia">
            <h2>Materias</h2>
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addmateriaModal">Añadir Materia</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de datos de materias, ya que no se puede usar PHP -->
                    <tr>
                        <td>Matemáticas</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-id="1" data-nombre="Matemáticas">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="1">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-id="2" data-nombre="Historia">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="2">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Física</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-btn" data-id="3" data-nombre="Física">Editar</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="3">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Modal para añadir materia -->
    <div class="modal fade" id="addmateriaModal" tabindex="-1" role="dialog" aria-labelledby="addmateriaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmateriaModalLabel">Añadir Materia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-materia-form">
                        <div class="form-group">
                            <label for="nombre_materia">Nombre de la Materia</label>
                            <input type="text" class="form-control" id="nombre_materia" name="nombre_materia" required>
                            <small id="error-message" class="form-text text-danger"></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Añadir Materia</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para editar materia -->
    <div class="modal fade" id="editmateriaModal" tabindex="-1" role="dialog" aria-labelledby="editmateriaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editmateriaModalLabel">Editar Materia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-materia-form">
                        <input type="hidden" id="edit-id_materia" name="id_materia">
                        <div class="form-group">
                            <label for="edit-nombre_materia">Nombre de la Materia</label>
                            <input type="text" class="form-control" id="edit-nombre_materia" name="nombre_materia" required>
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

    <script>
        document.getElementById('add-materia-form').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Materia Añadida',
                text: 'La materia ha sido añadida correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });

        document.getElementById('edit-materia-form').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Cambios Guardados',
                text: 'La materia ha sido actualizada correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });

        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nombre = this.getAttribute('data-nombre');
                document.getElementById('edit-id_materia').value = id;
                document.getElementById('edit-nombre_materia').value = nombre;
                $('#editmateriaModal').modal('show');
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const id = this.getAttribute('data-id');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podrás recuperar este registro!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminarlo',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Eliminado',
                            text: 'La materia ha sido eliminada.',
                            icon: 'success',
                            confirmButtonText: 'Aceptar'
                        }).then(() => {
                            window.location.reload(); // Recarga la página para reflejar los cambios
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>

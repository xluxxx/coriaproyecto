<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Horarios - Sistema de Horarios UTA</title>
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
        <section id="crear-horarios">
            <h2>Crear Horarios</h2>
            <form id="crear-horario-form">
                <div class="form-group">
                    <label for="grupo">Grupo</label>
                    <select class="form-control" id="grupo" name="grupo" required>
                        <!-- Opciones de grupos -->
                        <option value="1">Grupo 1</option>
                        <option value="2">Grupo 2</option>
                        <option value="3">Grupo 3</option>
                        <!-- Añadir más opciones según sea necesario -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="turno">Turno</label>
                    <select class="form-control" id="turno" name="turno" required>
                        <option value="mañana">Mañana (8:00 - 13:30)</option>
                        <option value="tarde">Tarde (12:30 - 17:40)</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear Horario</button>
            </form>
        </section>

        <section id="mostrar-horarios" class="mt-5">
            <h2>Horarios Generados</h2>
            <h3>Grupo: Grupo 1</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Hora de Inicio</th>
                        <th>Hora de Fin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lunes</td>
                        <td>08:00</td>
                        <td>09:00</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>10:00</td>
                        <td>11:00</td>
                    </tr>
                    <!-- Añadir más filas según sea necesario -->
                </tbody>
            </table>

            <!-- Repite la estructura para más grupos -->
            <h3>Grupo: Grupo 2</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Hora de Inicio</th>
                        <th>Hora de Fin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Miércoles</td>
                        <td>08:00</td>
                        <td>09:00</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>10:00</td>
                        <td>11:00</td>
                    </tr>
                    <!-- Añadir más filas según sea necesario -->
                </tbody>
            </table>

            <!-- Mostrar un mensaje si no hay horarios -->
            <p>No se han generado horarios todavía.</p>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

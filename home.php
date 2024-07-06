<?php
include('header.php');
?>

<div class="container mt-5">
    <h2 class="text-center">Información del Alumno</h2>
    <div class="accordion" id="infoAlumnoAccordion">
        <div class="card">
            <div class="card-header" id="headingNotas">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNotas" aria-expanded="true" aria-controls="collapseNotas">
                        Notas
                    </button>
                </h2>
            </div>
            <div id="collapseNotas" class="collapse show" aria-labelledby="headingNotas" data-parent="#infoAlumnoAccordion">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Materia</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Matemáticas</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Lengua</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>Ciencias</td>
                                <td>9</td>
                            </tr>
                            <!-- Añadir más materias y notas según sea necesario -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingAsistencias">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAsistencias" aria-expanded="false" aria-controls="collapseAsistencias">
                        Asistencias
                    </button>
                </h2>
            </div>
            <div id="collapseAsistencias" class="collapse" aria-labelledby="headingAsistencias" data-parent="#infoAlumnoAccordion">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Asistencia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/03/2023</td>
                                <td>Presente</td>
                            </tr>
                            <tr>
                                <td>02/03/2023</td>
                                <td>Ausente</td>
                            </tr>
                            <tr>
                                <td>03/03/2023</td>
                                <td>Presente</td>
                            </tr>
                            <!-- Añadir más registros de asistencia según sea necesario -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingObservaciones">
                <h2 class="mb-0">
                    <a href="#">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseObservaciones" aria-expanded="false" aria-controls="collapseObservaciones">
                        Observaciones
                    </button>
                    </a>
                </h2>
            </div>
            <div id="collapseObservaciones" class="collapse" aria-labelledby="headingObservaciones" data-parent="#infoAlumnoAccordion">
                <div class="card-body">
                    <textarea class="form-control" rows="5" placeholder="Escribe aquí las observaciones del preceptor..."></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./assets/css/normalize.css" rel="stylesheet">
    <link href="./assets/css/styles2.css" rel="stylesheet">
</head>
<body>
    <nav>
        <p>Cadetes Nuevo Placilla</p>
        <a href="./index.php">Volver</a>
    </nav>
    <main>
    <form method="post" action="./inscripcion_basica.php">
        <div class="contenido-form">
        <div class="section-alumno">
            <h2>Datos del Alumno</h2>
            <section>
                <div>
                    <p>Nombres</p>
                    <input name="01" type="text" required>
                </div>
                <div>
                    <p>Apellidos</p>
                    <input name="02" type="text">
                </div>
                <div>
                    <p>Fecha Nacimiento</p>
                    <input id="fnac" name="03" type="date" required>
                </div>
                <div>
                    <p>Edad</p>
                    <input style="text-align: center; background-color: rgba(255,255,255,0.5);" id="edad" name="02" type="text" required readonly>
                </div>
            </section>
            <div>
                    <p>Foto Carnet</p>
                    <input name="archivo" type="file">
                </div>
        
        </div>
        <div class="section-apoderados">
        <h2>Datos del Apoderado</h2>
        <section>
                <div>
                    <p>Nombres</p>
                    <input name="nombre_ap" type="text" required>
                </div>
                <div>
                    <p>Apellidos</p>
                    <input name="apellidos_ap" type="text">
                </div>
                <div>
                    <p>Ocupación</p>
                    <input name="ocupacion_ap" type="text">
                </div>
                <div>
                    <p>Dirección</p>
                    <input name="direccion_ap" type="text">
                </div>

                <div>
                    <p>Número Telefónico</p>
                    <input name="numero_ap" type="text">
                </div>

                <div>
                    <p>Parentesco</p>
                    <input name="parentesco_ap" type="text">
                </div>
            </section>

        </div>
        </div>
        <button>ENVIAR INSCRIPCION</button>
        </form>
    </main>
    <script src="./assets/js/script.js"  type="text/javascript"></script>
</body>
</html>
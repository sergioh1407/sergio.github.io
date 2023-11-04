
<html lang="es">
    <head>
        <title>ingreso</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
         <link href="interfaz.css" rel="stylesheet">
    </head>
    <style>
        body {
            background: linear-gradient(to bottom, #000, #00478f);
            background-blend-mode: multiply;
        }
        </style>
    <?php 
include("./conexionbd.php");
?>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4 ">
                <ig src="Imagenes/Logo_gym_system-removebg-preview.png">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4 bg-white" style="margin-top: 100px;">
                <h2 style="text-align: center;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Healthy Corps</h2>
                <img src="Healthy_Corps-logo (1).png" style="width: 350px;" >
                <div style="padding-left: 10px;" class="btn-group" role="group" aria-label="Basic example">
                    <a href="registro.php" ><input name="interfaz registro" type="button" class="btn btn-primary" value="Registrarse"></a>
                  </div>
                <div  class="btn-group" role="group" aria-label="Basic example" >
                    <a href="inicio de sesion.php"><input name="interfaz inicio de sesion" type="button" class="btn btn-primary" value="Iniciar sesión"></a>
                  </div>
                <div  class="btn-group" role="group" aria-label="Basic example" >
                    <a href="inicio de entrenadores.php"><input name="interfaz inicio de sesion" type="button" class="btn btn-primary" value="Entrenador"></a>
                  </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 py-4 ">
            </div>
        </div>
    </div>
</body>
</html>

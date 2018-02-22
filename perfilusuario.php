<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Perfil personal</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/perfilusuario.css" media="all" />
    <link rel="stylesheet" href="css/inheader2.css" media="all" />
    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/perfilusuario.js"></script>
</head>

<body>
    <div class="container-fluid margin">
        <header class="row">
            <?php include "includes/inheader2.html";?> </header>
        <section id="portada">
            <div id="foto">
                <img src="imagenes/monkey%20(1).png" alt="Foto de perfil" class="col-xl-2 offset-xl-5 col-lg-2 offset-lg-5 col-md-2 offset-md-5 col-sm-3 offset-sm-5 col-4 offset-4" />
            </div>
        </section>
        <section id="info">
            <div class="row">
                <h3 class="col-xl-5 offset-xl-4 col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-7 offset-sm-3 col-5 offset-3">BIANCA COCOR</h3>
            </div>
            <div class="row">
                <button class="col-xl-2 offset-xl-4 col-lg-2 offset-lg-4 col-md-2 offset-md-4 col-sm-2 offset-sm-4 col-3 offset-3 text-center" id="follow">Seguir</button>
                <button class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-3 text-center">Mensaje</button>
            </div>
            <div class="row" id="datos">
                <h2 class="col-xl-2 offset-xl-3 col-lg-2 offset-lg-3 col-md-2 offset-md-2 col-sm-3 offset-sm-1 col-12">20 VÍDEOS SUBIDOS</h2>
                <h2 class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12">5 DESTINOS</h2>
                <h2 class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-12">208 SEGUIDORES</h2>
            </div>
        </section>
        <section id="contenido" class="row">
            <div class="col-xl-3">
                <h4>Información personal</h4>
                <br>
                <p>PRESENTACIÓN</p>
                <p>Estudió en</p>
                <p><i class="fas fa-thumbtack"></i>Vive en</p>
                <p>Último viaje</p>
                <p>Intereses </p>
                <p>Viaje soñado</p>
                <p>Redes sociales</p>
            </div>
            <div class="col-xl-9">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4>Vídeos subidos</h4>
                    <div class="row">
                    <div id="video-wrapper" class="col-xl-3">
                        <div class="video-centro">
                            <a href="reproduccion.php"><video src="videos/roraima.mp4" width="100%"></video></a>
                            <p class="pulsado">Viaje a Roraima</p>
                        </div>
                    </div>
                    <div id="video-wrapper" class="col-xl-3">
                        <div class="video-centro">
                            <video src="videos/roraima.mp4"  width="100%"></video>
                        </div>
                    </div>
                        <div id="video-wrapper" class="col-xl-3">
                        <div class="video-centro">
                            <video src="videos/roraima.mp4"  width="100%"></video>
                        </div>
                        </div>
                        
                    
                    </div>
                </div>
            </div>
        </section>
        <section id="mapa" class="row">
            <h4>Mapa virtual</h4>
        </section>
        <footer class="row">
            <?php include "includes/footer.html";?>
        </footer>
    </div>
</body>

</html>
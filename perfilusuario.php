<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8" />
    <title>Perfil personal</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/perfilusuario.css" media="all"/>
    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
    <body>
        <div class="container-fluid margin">
        <header class="row"><?php include "includes/inheader.html";?>   </header>
            <section id="portada">
                <div id="foto">
                    <img src="imagenes/monkey%20(1).png" alt="Foto de perfil" width="150px" class="col-xl-2 offset-xl-5"/>
                </div>
            </section>
            <section id="info">
                <div class="row">
                    <h3 class=" col-xl-5 offset-xl-4">BIANCA COCOR</h3>
                </div>
                <div class="row">
                    <button class="col-xl-2  offset-xl-4 text-center" id="follow">Seguir</button>
                    <button class="col-xl-2 text-center">Enviar mensaje</button>
                </div>
                <div class="row">
                    <h2 class="col-xl-2 offset-xl-3 text-right">20 VIDEOS</h2>
                    <h2 class="col-xl-2 text-right">5 DESTINOS</h2>
                    <h2 class="col-xl-2 text-right">208     SEGUIDORES</h2>
                </div>
            </section>
            <section id="contenido" class="row">
                <div class="col-xl-3">
                    <h4>Información personal</h4>
                    <br>
                    <p>PRESENTACIÓN</p>
                    <p>Estudió en</p>
                    <p>Vive en</p>
                    <p>Último viaje</p>
                    <p>Intereses </p>
                    <p>Viaje soñado</p>
                    <p>Redes sociales</p>
                </div>
                <div class="col-xl-8">
                    <div class="col-xl-12">
                      <h4>Vídeos subidos</h4>
                    </div>
                </div>
            </section>
            <section id="mapa" class="row">
                <h4>Mapa virtual</h4>
            </section>
        <footer class="row"><?php include "includes/footer.html";?>
        </footer>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Paseo por Roraima - BananaTube</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/reproduccion.css"/>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- fin iconos font-awesome -->

</head>
<body>
    <!--Encabezado-->
        <header class="row"><?php include "includes/inheader.html";?></header>
    <!--Fin encabezado-->
    <!--Contenido principal-->
    <section id="contenido" class="row">
        <section id="video" class="col-xl-12">
            <div id="video-wrapper" class="row">
                <div class="video-centro" class="col-xl-12">
                    <video src="videos/roraima.mp4" controls width="50%"></video>
                </div>
            </div>
            <div id="infovideo" class="row">
                <div id="texto-video" class="col-xl-12">
                    <header>Paseo por Roraima</header>
                    <p><img src="" /> <strong>experiencia de</strong> Pepito Pérez <strong>el 5 de diciembre de 2017</strong></p>
                </div>
                <div id="repro-compartir" class="col-xl-12">
                    <div id="repro-video">Reproducciones<i class="fa fa-share-alt" aria-hidden="true"></i> <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div id="hashtag" class="row">
                <p>
                    <a href="#">#Viajes</a> 
                    <a href="#">#Roraima</a> 
                    <a href="#">#Venezuela</a> 
                    <a href="#">#Naturaleza</a> 
                    <a href="#">#Aventura</a>
                </p>
            </div>
        </section>
    <!-- info video y social-->
        <section id="comentarios" class="col-xl-12">
            <div class="row">
                <header>Comentarios</header>
                <div>
                    <div>
                        <img src=""/>
                        <div id="com1">
                            <h4>@JuanGonzalez</h4>
                            <p>¡Me encanta! Nuestro próximo viaje <strong>@AnaGarcia</strong></p>
                        </div>
                    </div>
                    <div>
                        <img src="" />
                        <div id="com2">
                            <h4>@AnaGarcia</h4>
                            <p>Apuntado queda ;) </p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#"id="submit-buscador" class="redondito">Escribir un comentario</a>
                </div>
            </div>
        </section>
        <section class="row">
            <div>
                <header>Vídeos relacionados</header>
                <div></div>
            <!-- previsualización otros vídeos -->
            </div>
            <div>
                <a href="#" id="submit-buscador" class="redondito">Otros</a>
            </div>
        </section>
    </section>
    <!--Fin contenido principal-->
    <!--Footer-->
    <footer class="row" ><?php include "includes/footer.html";?></footer>
    <!--Fin de footer-->
</body>
</html>
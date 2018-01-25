<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Paseo por Roraima - BananaTube</title>
    <!-- para usar iconos font-awesome -->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- fin iconos font-awesome -->
    <link rel="stylesheet"
          href="css/reproduccion.css"/>
</head>
<body>
    <!--Encabezado-->
    <section>
        <div id="header"><?php include "includes/inheader.html";?></div>
    </section>
    <!--Fin encabezado-->
    <!--Contenido principal-->
    <section id="contenido">
        <section id="video">
            <div id="video-wrapper">
                <div class="video-centro">
                    <video src="videos/roraima.mp4" controls width="50%"></video>
                </div>
            </div>
            <div id="infovideo">
                <div id="texto-video" class="floatizq">
                    <header>Paseo por Roraima</header>
                    <p><img src="" /> <strong>experiencia de</strong> Pepito Pérez <strong>el 5 de diciembre de 2017</strong></p>
                </div>
                <div id="repro-compartir" class="floatder">
                    <div id="repro-video" class="floatizq">Reproducciones</div>
                    <div id="sharebut" class="floatizq">
                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                    </div>
                    <div id="megustabut">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div id="hashtag" class="floatizq">
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
        <section id="comentarios">
            <div class="floatizq">
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
        <section id="infodestino">
            <div class="floatizq">
                <header>Información del destino</header>
                <img src="" />
            </div>
            <div>
                <div class="floatder">
                    <header>Datos interesantes</header>
                    <ul>
                        <li>Es conocida también como la "Madre de Todas las Aguas".</li>
                        <li>Su cima es compartida por tres países diferentes: Venezuela, Brasil y Guayana.</li>
                        <li>Hay varias especies de mariposas endémicas de esta zona, como <i>Pedaliodes roraimae</i>.</li>
                    </ul>
                </div>
                <div class="floatder">
                    <a href="#" id="submit-buscador" class="redondito">Ver más</a>
                </div>
            </div>
        </section>
        <section id="vidrel">
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
    <section>
        <div><?php include "includes/footer.html";?></div>
    </section>
    <!--Fin de footer-->
</body>
</html>
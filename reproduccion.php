<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Paseo por Roraima - BananaTube</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/reproduccion.css"/>
    <link rel="stylesheet" href="css/inheader2.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- fin iconos font-awesome -->

</head>
<body>
    <div class="container-fluid">
    <!--Encabezado-->
        <header class="row"><?php include "includes/inheader2.html";?></header>
    <!--Fin encabezado-->
    <!--Contenido principal-->
    <section id="contenido" class="row">
        <section id="video" class="row">
            <div class="col-12">
            <div id="video-wrapper" class="row">
                <div class="video-centro">
                    <video src="videos/roraima.mp4" controls width="50%"></video>
                </div>
            </div>
            <div id="infovideo" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3>Paseo por Roraima</h3>
                    <div class="row col-xl-6">
                        <div class="col-xl-12 text-left">
                            <p><img src="" /> <strong>Pepito Pérez </strong>   5 de diciembre de 2017</p>
                                <p id="hashtag">
                                <a href="#">#Viajes</a> 
                                <a href="#">#Roraima</a> 
                                <a href="#">#Venezuela</a> 
                                <a href="#">#Naturaleza</a> 
                                <a href="#">#Aventura</a>
                            </p>
                        </div>
                </div>
                <div id="repro-video" class="col-xl-3 col-lg-3 col-md-3 text-right">Reproducciones<i class="fa fa-share-alt" aria-hidden="true"></i> <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
            </div>
           </div>
        </section>
    <!-- info video y social-->
        <section id="comentarios" class="row">
       
                <h3>Comentarios</h3>
                <div class="col-xl-12">
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
        </section>
    <br>
        <section class="row">
            <div class="col-xl-12">
                <h3>Vídeos relacionados</h3>
                <div></div>
            <!-- previsualización otros vídeos -->
                <a href="#" id="submit-buscador" class="redondito">Otros</a>
            </div>
        </section>
    </section>
        
    <!--Fin contenido principal-->
    <!--Footer-->
    <footer class="row" ><?php include "includes/footer.html";?></footer>
    <!--Fin de footer-->

    </div>
</body>
</html>
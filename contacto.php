<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Contacto</title>
        <link rel="stylesheet" href="css/contacto.css" media="all"/>
    </head>
        <body>
        <header id="header">
         <div><?php include "includes/inheader.html";?></div>
        </header>
        <section id="titulo">
            <h1>CONTACTO</h1>
        </section>
        <section id="contenido">
                <form name="miformulario" 
                      id="formcontacto" 
                      action="" 
                      method="post"
                      class="floatizq">
                <label for="nombre">NOMBRE Y APELLIDOS/EMPRESA/ORGANIZACIÓN:</label>
                    <br/>
                <input type="text" name="nombre" id="nombre" value="" autocomplete="off" class="margeninf"/>
                <br/>
                <label for="email">CORREO ELECTRÓNICO:</label>
                <br/>
                <input type="email" name="email" id="email" value="" autocomplete="off" class="margeninf"/>
                <br/>
                <label for="mensaje">MENSAJE:</label>
                <br/>
                <input type="text" name="mensaje" id="mensaje" value="" autocomplete="off" class="margeninf"/>
                    <br/>
                    <div>
                    <input type="submit" name="button" id="boton" value="ENVIAR" />
                    </div>
                </form>
            <div id="derecha" class="floatder">
                <div>
                <h5>DIRECCIÓN</h5>
                    <p>C/ MARQUÉS DE AHUMADA, 9</p>
                    <p>28028 MADRID, ESPAÑA</p>
                </div>
                <div>
                    <h5>TELÉFONO</h5>
                    <p>+34 638 569 801</p>
                </div>
                <div>
                    <h5>CORREO ELECTRÓNICO</h5>
                    <p class="margeninf">bananatube.mb@gmail.com</p>
                </div>
                <div id="redes">
                    <h5>REDES SOCIALES</h5>
                    <p>@BANANATUBE-MB</p>
                    <figure>
                         <a href="http://twitter.com/">
                        <img src="imagenes/socialmedia/twitter.png" 
                             alt="Twitter"/></a>
                    <a href="http://facebook.com/">
                        <img src="imagenes/socialmedia/facebook.png"
                             alt="Facebook"/></a>
                    <a href="http://plus.google.com/">
                        <img src="imagenes/socialmedia/google-plus.png"
                             alt="Google+"/></a>
                    <a href="http://www.instagram.com/">
                        <img src="imagenes/socialmedia/instagram.png"
                             alt="Instagram"/></a>
                    <a href="http://www.youtube.com/">
                        <img src="imagenes/socialmedia/youtube.png"
                             alt="YouTube"/></a>
                    </figure>
                </div>
            </div>
        </section>
    </body>
</html>
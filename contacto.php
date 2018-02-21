<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/contacto.css" media="all" />
    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/contacto.js"></script>
</head>

<body>
    <div class="container-fluid">
        <header class="row" role="navigation">
            <?php include "includes/inheader.html";?>
        </header>
        <section class="row" id="titulo" role="banner">
            <h1 class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">CONTACTO</h1>
        </section>
        <div class="container-fluid margin" role="form">
            <section class="row" id="contenido">
                <div class="col-xl-4 offset-xl-3 col-lg-4 offset-lg-3 col-md-5 offset-md-2 col-sm-6 offset-sm-3 col-7 offset-3 form-group">
                    <form name="miformulario" id="formcontacto" action="" method="post" class="needs-validation row" novalidate>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="nombre">NOMBRE Y APELLIDOS/EMPRESA/ORGANIZACIÓN:</label>
                            <br/>
                            <input type="text" name="nombre" id="nombre" value="" autocomplete="off" required aria-required="true" minlength=3 class="form-control" />
                          
                              <div class="invalid-feedback">
                               <i class="fa fa-times" aria-hidden="true"></i>Por favor, escribe un nombre válido.
                              </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="email">CORREO ELECTRÓNICO:</label>
                            <br/>
                            <input type="email" name="email" id="email" value="" autocomplete="off" required aria-required="true" class="form-control" />
                              <div class="invalid-feedback">
                               <i class="fa fa-times" aria-hidden="true"></i>Por favor, escribe un correo electrónico válido.
                              </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="mensaje">MENSAJE:</label>
                            <br/>
                            <textarea rows="5" cols="4" name="mensaje" id="mensaje" value="" required aria-required="true" autocomplete="off" class="form-control" maxlength="1000"></textarea>
                              <div class="invalid-feedback">
                               <i class="fa fa-times" aria-hidden="true"></i>Por favor, escribe un comentario.
                              </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-light" type="submit" name="button" value="">ENVIAR</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-3 offset-xl-1 col-lg-3 offset-lg-1 col-md-4 offset-md-1 col-sm-5 offset-sm-3 col-8 offset-3" id="derecha">
                    <div class="row">
                        <div class="col-xl-12">
                        <h5>DIRECCIÓN</h5>
                        <p>C/ MARQUÉS DE AHUMADA, 9</p>
                        <p>28028 MADRID, ESPAÑA</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div  class="col-xl-12">
                        <h5>TELÉFONO</h5>
                        <p>+34 638 569 801</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div  class="col-xl-12">
                        <h5>CORREO ELECTRÓNICO</h5>
                        <p>bananatube.mb@gmail.com</p>
                        </div>
                    </div>
                    <br>    
                    <div class="row">
                        <div class="col-xl-12">
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
                </div>
            </section>
        </div>
    </div>
     <footer role="contentinfo" class="row"><?php include "includes/footer.html";?></footer>
  <script>
      // Disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
        }, false);
        })();
        
        
        var password, password2;
        password = document.getElementById('pass');
        password2 = document.getElementById('pass2');
        password.onchange = password2.onkeyup = passwordMatch;
        function passwordMatch() {
            if(password.value !== password2.value)
                password2.setCustomValidity('Las contraseñas no coinciden.');
            else
                password2.setCustomValidity('');
        }
    </script>

</body>

</html>
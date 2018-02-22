<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Sube tu vídeo</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/subirvideo.css"/>
        <link rel="stylesheet" href="css/inheader2.css"/>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/subirvideo.js"></script>
    </head>
    <body>
        <div class="">
            <header>
                <?php include "includes/inheader2.html";?>
            </header>
            <section id="contenedor" class="container-fluid margin">
                <div id="titular" class="row">
                    <p>SUBE TU VÍDEO</p>
                </div>
                <div id="fsubirvid" class="row">
                    <form name="subirvideo"
                      id="formsubir"
                      action=""
                      method="post"
                      enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="archivo" >Selecciona tu vídeo</label>
                                <input type="file"
                               name="archivo"
                               id="archivo"
                               value="video"
                               multiple="multiple"
                               required
                                   class="form-control-file"/>
                            </div>
                            <div class="form-group col">
                                <label for="miniatura">Elige una portada</label>
                                <input type="file"
                               name="miniatura"
                               value="miniatura"
                               required
                                   class="form-control-file"/>
                            </div>
                        </div>
                        <div>
                            <label for="nombrevid" class="form-group">Título</label>
                            <input type="text"
                               name="nombrevid"
                               id="nombrevid"
                               value=""
                               maxlength="65"
                               placeholder="Nombre de tu vídeo"
                               required
                                   class="form-control"/>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="descvid" class="form-group">Descripción</label>
                                <textarea name="descvid"
                              id="descvid"
                              rows="5"
                              columns="5"
                              maxlenght="350"
                              placeholder="Describe tu vídeo"
                                      class="form-control"></textarea>
                            </div>
                            <div class="form-group col">
                                <label for="tags" class="form-group">Etiquetas</label>
                                <textarea name="tags"
                              id="tags"
                              rows="5"
                              columns="5"
                              placeholder="Añade tags relacionados"
                                      class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="input-group-btn text-center">
                            <button type="submit" class="btn btn-secondary">Sube tu vídeo</button>
                        </div>
                    </form>
                </div>
            </section>
            <footer class="row">
                <?php include "includes/footer.html";?>
            </footer>
        </div>
    </body>
</html>
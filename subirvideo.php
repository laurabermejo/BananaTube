<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Sube tu vídeo</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/subirvideo.css"/>
        <script src="js/jquery-3.2.1.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/vindicate.js"></script>
        <script src="js/subirvideo.js"></script>
    </head>
    <body>
        <header class="row">
            <?php include "includes/inheader.html";?>
        </header>
        <hr>
        <section>
            <form name="subirvideo"
                  id="formsubir"
                  action=""
                  method="post"
                  enctype="multipart/form-data">
                <div>
                    <label for="archivo"></label>
                    <input type="file"
                           name="archivo"
                           id="archivo"
                           value="video"
                           multiple="multiple"
                           required/>
                </div>
                <div>
                    <label for="miniatura"></label>
                    <input type="file"
                           name="miniatura"
                           value="miniatura"
                           required/>
                </div>
                <div>
                    <label for="nombrevid">Título</label>
                    <input type="text"
                           name="nombrevid"
                           id="nombrevid"
                           value=""
                           maxlength="65"
                           placeholder="Nombre de tu vídeo"
                           required/>
                </div>
                <div>
                    <label for="descvid">Descripción</label>
                    <textarea name="descvid"
                              id="descvid"
                              rows="5"
                              columns="5"
                              maxlenght="350"
                              placeholder="Describe tu vídeo"></textarea>
                </div>
                <div>
                    <label for="tags">Etiquetas</label>
                    <textarea name="tags"
                              id="tags"
                              rows="5"
                              columns="5"
                              placeholder="Añade tags relacionados"></textarea>
                </div>
                <div>
                    <input type="submit"
                           name="submit"
                           id="submit"
                           value="Subir vídeo"/>
                </div>
            </form>
        </section>
        <hr>
        <footer>
           <?php include "includes/footer.html";?>
        </footer>
    </body>
</html>
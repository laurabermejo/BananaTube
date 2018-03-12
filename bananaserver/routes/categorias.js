var express = require('express');
var router = express.Router();
var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/bananatube');
var db = mongoose.connection;
var conectado = false;
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function () {
    console.log("Conexion abierta");
    conectado = true;

});
/* GET users listing. */
router.get('/', function(req, res, next) {
   if (conectado) {
        user=cogeLogin(req.session);
        console.log(req.session);
        console.log(user);
        res.render('list', {
            title: 'API Rest Mongo',
            usuario:user
        });
    } else {
        res.render('errorDB', {
            title: 'Mongo No arrancado'
        });
    }
});
router.post('/', function(req, res, next) {
  if (conectado) {
        console.log(req.body);
        var usuario = new User({
            username: req.body.nombre,
            hash: req.body.pass
        });
        usuario.setPassword(req.body.pass);
        usuario.save(function (err, userdevuelto) {
            if (err) {
                return console.error(err);
            } else {
                console.log("usuario guardado");
                res.setHeader('Content-Type', 'application/json');
                res.send(JSON.stringify(userdevuelto));
            }
        });
    } else {
        res.render('errorDB', {
            title: 'Mongo No arrancado'
        });
    }
});
router.get('/:id', function(req, res, next) {
  if (conectado) {
        var objeto = {

        };
        objeto._id = req.params.id;
        User.findOne(
            //{_id:req.params.id}
            objeto,
            function (err, usuario) {
                if (err) return console.error(err);
                //console.log(users);
                res.setHeader('Content-Type', 'application/json');
                res.send(JSON.stringify(usuario));
            }
        );
    } else {
        res.render('errorDB', {
            title: 'Mongo No arrancado'
        });
    }
});
router.post('/:id', function(req, res, next) {
  if (conectado) {
        var objetoModificado = {};
        objetoModificado._id = req.params.id;
        objetoModificado.username = req.body.nombre;
        objetoModificado.hash = req.body.pass;
        console.log(objetoModificado);
        User.findByIdAndUpdate(
            req.params.id,
            objetoModificado,
            function (err, usuario) {
                if (err) return console.error(err);
                console.log(usuario);
                User.findById(
                    req.params.id,
                    function (err, usuario) {
                        if (err) return console.error(err);
                        console.log(usuario);
                        res.setHeader('Content-Type', 'application/json');
                        res.send(JSON.stringify(usuario));
                    }
                );
            }
        );
    } else {
        res.render('errorDB', {
            title: 'Mongo No arrancado'
        });
    }
});
router.get('/delete/:id', function(req, res, next) {
  if (conectado) {
        User.findByIdAndRemove(
            req.params.id,
            function (err, usuario) {
                if (err) return console.error(err);
                //console.log(users);
                //FALTA BORRAR
                res.setHeader('Content-Type', 'application/json');
                res.send(JSON.stringify(usuario));
            }
        );
    } else {
        res.render('errorDB', {
            title: 'Mongo No arrancado'
        });
    }

});
router.post('/upload', function(req, res, next) {
   var form = new formidable.IncomingForm();
    form.parse(req, function (err, fields, files) {
      var oldpath = files.filetoupload.path;
      var newpath = __dirname+'/../public/uploads/' + files.filetoupload.name;
      fs.rename(oldpath, newpath, function (err) {
        if (err) throw err;
        res.write('File uploaded and moved!');
        res.end();
      });
    }
    );
});

module.exports = router;
var express = require('express');
var router = express.Router();
var mongoose = require ('mongoose');
mongoose.connect('mongodb://localhost/test')
mongoose.connect('mongodb://localhost/test');
var db = mongoose.connection;
var conectado = false;
var User = require("../models/user");
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function () {
    console.log("Conexion abierta");
    conectado = true;
    

/* GET users listing. */
router.get('/', function(req, res, next) {
  //LISTADO
        res.render('api', {
        title: ''
    });
});
});
router.post('/', function(req, res, next) {
  //AÑADIR
});
router.get('/:id', function(req, res, next) {
  //MOSTRAR
});
router.post('/:id', function(req, res, next) {
  //EDITAR
});
router.get('/delete/:id', function(req, res, next) {
  //BORRAR
    //console.log(req.params.id);
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
  //SUBIR FICHEROS
});

module.exports = router;

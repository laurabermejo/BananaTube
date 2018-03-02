var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  //LISTADO
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
});
router.post('/upload', function(req, res, next) {
  //SUBIR FICHEROS
});

module.exports = router;
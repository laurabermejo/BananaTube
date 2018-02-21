function conectaDB() {
         console.log("conecta DDBB");
         window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
         window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
         window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange;
         var request = window.indexedDB.open("BananaTube", 1); //versión 1
         request.onerror = function (event) {
             console.log("error: ");
         };
         request.onsuccess = function (event) {
             db = request.result;
             console.log("success: " + db);
         };
         request.onupgradeneeded = function (event) {
             var db = event.target.result;
             var objectStore = db.createObjectStore("Usuarios", {
                 keyPath: "id"
             });
         }
     };

function escribeObjeto(objeto){
    var db;
    var request=db.transaction(["Usuarios"], "readwrite")
        .objectStore("Usuarios")
        .add(objeto)

    request.onsuccess = function (event) {
        console.log("Dato añadido a la BBDD");
    };

    request.onerror = function (event) {
        console.log("No se ha podido añadir a la BBDD");
    }
}

function init(){
    console.log("DOM cargado");
    if(!window.indexedDB){
        console.log("Tu navegador no soporta una versión estable de IndexedDB");
    }else{
        conectaDB();
        console.log("Este navegador soporta IndexedDB");
        escribeObjeto();
    }
}
document.addEventListener("DOMContentLoaded", init);
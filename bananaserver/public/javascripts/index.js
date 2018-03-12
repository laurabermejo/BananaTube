var Usuarios=[
    {id:"00001", nombre:"Bianca Cocor", email: "cocorbianca@gmail.com", user:"cocorbianca", pass:"01234", location:"Ávila"}
]
function conectaDB() {
    console.log("conecta DDBB");
    window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
    window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
    window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange;
    var db; 
    var request = window.indexedDB.open("BananaTube", 1); //versión 1
    request.onerror = function (event) {
        console.log("error: ");
    };
    request.onsuccess = function (event) {
        db = request.result;
        console.log("success: " + db);
    };
    request.onupgradeneeded = function (event) {
        db = event.target.result;
        var objectStore = db.createObjectStore("usuarios", {
            keyPath: "id"
        });
        objectStore.createIndex("nombre", "nombre", {unique:false});
        objectStore.createIndex("email", "email", {unique:true});
        objectStore.createIndex("user", "user", {unique:true});
        objectStore.createIndex("pass", "pass", {unique:false});
        objectStore.createIndex("location", "location", {unique:false});
        objectStore.transaction.oncomplete=function(event){
            var usuariosObjectStore=db.transaction("usuarios", "readwrite").objectStore("usuarios");
            for (var i in Usuarios){
                usuariosObjectStore.add(Usuarios[i]);
            }
        }
    }
};
/*
PENDIENTE QUE COJA LOS DATOS DEL JSON
function peticionAJAX*/

function init(){
    console.log("DOM cargado");
    if(!window.indexedDB){
        console.log("Tu navegador no soporta una versión estable de IndexedDB");
    }else{
        conectaDB();
        console.log("Este navegador soporta IndexedDB");
        peticionAJAX();
    }
}
document.addEventListener("DOMContentLoaded", init);
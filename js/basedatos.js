var indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window-msIndexedDB; 

    window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction; 

    window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange; 

function openDB(){
    dataBase = indexedDB.open("Base de datos BananaTube");
    console.log(dataBase);
}

function init(){
    console.log("DOM Cargado");
    if(!window.indexedDB){ 
            console.log("Your browser doesn't support a stable version of IndexedDB.") 
    } else{ 
            console.log("IndexedDB HTML5 está soportada en este navegador."); 
    }
    openDB();
};
    
document.addEventListener("DOMContentLoaded",init);
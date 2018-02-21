function leave(){
    console.log("dentro");
    $(".video-centro").addClass("pulsado");
};
function muestra(){
    console.log("fuera");
    $(".video-centro").removeClass("pulsado");
};
function init(){
    console.log("DOM Cargado")
    $(".video-wrapper").mouseover(muestra);
    $(".video-wrapper").mouseout(esconde);
};
$(document).ready(init);
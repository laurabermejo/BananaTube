/*
Validaciones
1. crea un formulario típico de login en el HTML, con dos campos usuario y contraseña
2. Haz que cuando se pulse el botón de enviar el formulario valide si el nombre de usuario y la contraseña están rellenados o no y sólo si es así deje enviar el formulario, en caso contrario deberá informar al usuario de qué campo o campos faltan por rellenar.
3. Haz el típico formulario de registro con los campos: nombre, email, repetir email, contraseña, repetir contraseña y aceptar condiciones del servicio. Con el botón de enviar el formulario
4. Valida el formulario, haciendo que el nombre tenga al menos 2 caracteres y sea requerido, el email sea valido y coincida en ambos campos, la contraseña tenga al menos 8 caracteres y coincidan y haya aceptado las condiciones del servicio.
(validador equalTo())
*/
function init(){
    console.log("DOM cargado");
    //Ejercicio 2
    $("#miform").validate({
        messages:{
            nusuario:{
                required: "Debe introducir su nombre de usuario"
            },
            pass:{
                required:"Debe introducir la contraseña"
            }
        }
    });
    //Fin ejercicio 2
    $("#miform2").validate({
        rules:{
            nomb: {
                minlength:2,
                required:true,
            },
            email: {
                email:true,
                required:true,
            },
            repemail: {
                email:true,
                equalTo:"email",
            },
            passs:{
                pattern:".{8,}"
            },
            cserv:"required",
        },
        messages:{
            nomb:{
                minlength:"Tu nombre debe tener al menos dos caracteres",
                required:"Debes introducir un nombre"
            },
            repemail:{
                equalTo:"Tu correo debe coincidir"
            },
            passs:{
                pattern:"Tu contraseña debe tener al menos 8 caracteres"
            },
            cserv:{
                required:"Debes aceptar las condiciones"
            }
        }
    }); //Ejercicio 4
}
$("document").ready(init);
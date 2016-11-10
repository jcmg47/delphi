function validar(user,pass){
 var parametros = {
          "user" : user,
          "pass" : pass
        };
        $.ajax({
          data : parametros,
          url : 'validar.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#error").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#error").html(response);
          },
          error: function (response){            
              $("#error").html("Intentelo nuevamente");
          }
        });
 }
 function validado(){

        $.ajax({
          url : '../login/validado.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#validado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#validado").html(response);
          },
          error: function (response){            
              $("#validado").html("Intentelo nuevamente");
          }
        });
 }
 
 function salir(){
        $.ajax({
          url : 'logout.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#error").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#error").html(response);
          },
          error: function (response){            
              $("#error").html("Intentelo nuevamente");
          }
        });
 }

function listalinea(){
        $.ajax({
          url : 'listalinea.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
            
              $("#listar").html("No se cargaron los datos");
          }
        });
    }
function listaasignacion(){
        $.ajax({
          url : 'listaasignacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
            
              $("#listar").html("No se cargaron los datos");
          }
        });
    }

function listaestacion(){    
        $.ajax({
          url : 'listaestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
             $("#listar").html("No se cargaron los datos");
          }
        });
}

function listasubestacion(){   
        $.ajax({
          url : 'listasubestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
             $("#listar").html("No se cargaron los datos");
          }
        });
 }
function listaempleado(){   
        $.ajax({
          url : 'listaempleado.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
             $("#listar").html("No se cargaron los datos");
          }
        });
 }

 function listaincidencia(){   
        $.ajax({
          url : 'listaincidencia.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
             $("#listar").html("No se cargaron los datos");
          }
        });
 }

function opcionlinea(tag,id){
 var parametros = {
          "id" : id
        };
        $.ajax({
          data : parametros,
          url : 'opcionlinea.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#"+tag).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#"+tag).html(response);
          },
          error: function (response){            
              $("#"+tag).html("Intentelo nuevamente");
          }
        });
 }

function opcionestacion(tag,id){
  var parametros = {
          "id" : id
        };
        $.ajax({
          data : parametros,
          url : 'opcionestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#"+tag).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#"+tag).html(response);
          },
          error: function (response){            
              $("#"+tag).html("Intentelo nuevamente");
          }
        });
 }

 function opcionturno(tag,id){
   var parametros = {
          "id" : id
        };
        $.ajax({
          data : parametros,
          url : 'opcionturno.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#"+tag).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#"+tag).html(response);
          },
          error: function (response){            
              $("#"+tag).html("Intentelo nuevamente");
          }
        });
 }

 function opciontipo(tag,id){
        var parametros = {
          "id" : id
        };
        $.ajax({
          data : parametros,
          url : 'opciontipo.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#"+tag).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#"+tag).html(response);
          },
          error: function (response){            
              $("#"+tag).html("Intentelo nuevamente");
          }
        });
 }

  function opcionpersonal(tag,id){
     var parametros = {
          "id" : id
        };
        $.ajax({
           data : parametros,
          url : 'opcionpersonal.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#"+tag).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#"+tag).html(response);
          },
          error: function (response){            
              $("#"+tag).html("Intentelo nuevamente");
          }
        });
 }

function borrarlinea(id){
        var parametros = {
          "id" : id
        }
        $.ajax({
          data : parametros,
          url : 'borrarlinea.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
              $("#listar").html("No se cargaron los datos");
          }
        });
}

function borrarempleado(id){
        var parametros = {
          "id" : id
        }
        $.ajax({
          data : parametros,
          url : 'borrarempleado.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
              $("#listar").html("No se cargaron los datos");
          }
        });
}

function borrarestacion(id){
        var parametros = {
          "id" : id
        }
        $.ajax({
          data : parametros,
          url : 'borrarestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
              $("#listar").html("No se cargaron los datos");
          }
        });
}

function borrarincidencia(id){
        var parametros = {
          "id" : id
        }
        $.ajax({
          data : parametros,
          url : 'borrarincidencia.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
              $("#listar").html("No se cargaron los datos");
          }
        });
}

function borrarsub(id){
        var parametros = {
          "id" : id
        }
        $.ajax({
          data : parametros,
          url : 'borrarsub.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#listar").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#listar").html(response);
          },
          error: function (response){
              $("#listar").html("No se cargaron los datos");
          }
        });
}

function actualizarempleado(id,nombre,paterno,materno,num,correo,turno,tipo){
        var parametros = {
          "id" : id,
          "tipo" : tipo,
          "turno" : turno,
          "nombre" : nombre,
          "paterno" : paterno,
          "materno" : materno,
          "num" : num,
          "correo" : correo
        };
        $.ajax({
          data : parametros,
          url : 'actualizarempleado.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+id).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+id).html(response);
          },
          error: function (response){
              $("#actualizado"+id).html("No se cargaron los datos");
          }
        });
}
function actualizarasignacion(idestacion,idpersonal,idespersonal){
        var parametros = {
          "idestacion" : idestacion,
          "idpersonal" : idpersonal,
          "idespersonal": idespersonal
        };
        $.ajax({
          data : parametros,
          url : 'actualizarasignacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+idpersonal).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+idpersonal).html(response);
          },
          error: function (response){
              $("#actualizado"+idpersonal).html("No se cargaron los datos");
          }
        });
}

function actualizarestacion(id,nombre,linea){
        var parametros = {
          "id" : id,
          "nombre" : nombre,
          "linea" :linea
        };
        $.ajax({
          data : parametros,
          url : 'actualizarestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizad"+id).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+id).html(response);
          },
          error: function (response){
              $("#actualizado"+id).html("No se cargaron los datos");
          }
        });
}

function actualizarincidencia(id,disp, fecha,personal){
        var parametros = {
          "id" : id,
          "disp" : disp,
          "fecha": fecha,
          "personal" : personal
        };
        $.ajax({
          data : parametros,
          url : 'actualizarincidencia.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+id).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+id).html(response);
          },
          error: function (response){
              $("#actualizado"+id).html("No se cargaron los datos");
          }
        });
}

function actualizarlinea(id,nombre,descripcion){
        var parametros = {
          "id" : id,
          "nombre" : nombre,
          "descripcion" : descripcion
        };
        $.ajax({
          data : parametros,
          url : 'actualizarlinea.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+id).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+id).html(response);
          },
          error: function (response){
              $("#actualizado"+id).html("No se cargaron los datos");
          }
        });
}

function actualizarsub(id,nombre, estacion){
        var parametros = {
          "id" : id,
          "nombre" : nombre,
          "estacion" : estacion
        };
        $.ajax({
          data : parametros,
          url : 'actualizarsub.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+id).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+id).html(response);
          },
          error: function (response){
              $("#actualizado"+id).html("No se cargaron los datos");
          }
        });
}

function guardarempleado(nombre,paterno,materno,num,correo,turno,tipo){
        var parametros = {
          "tipo" : tipo,
          "turno" : turno,
          "nombre" : nombre,
          "paterno" : paterno,
          "materno" : materno,
          "num" : num,
          "correo" : correo
        };
        $.ajax({
          data : parametros,
          url : 'guardaremp.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#guardado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#guardado").html(response);
          },
          error: function (response){
              $("#guardado").html("No se cargaron los datos");
          }
        });
}

function guardarestacion(nombre,linea){
        var parametros = {
          "nombre" : nombre,
          "linea" : linea
        };
        $.ajax({
          data : parametros,
          url : 'guardares.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#guardae").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#guardae").html(response);
          },
          error: function (response){
              $("#guardae").html("No se cargaron los datos");
          }
        });
}

function guardarsubestacion(nombre,estacion){
        var parametros = {
          "nombre" : nombre,
          "estacion" : estacion
        };
        $.ajax({
          data : parametros,
          url : 'guardarsub.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#guardase").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#guardase").html(response);
          },
          error: function (response){
              $("#guardase").html("No se cargaron los datos");
          }
        });
}

function guardarlinea(nombre,desc){
        var parametros = {
          "nombre" : nombre,
          "desc" : desc
        };
        $.ajax({
          data : parametros,
          url : 'guardar.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#guardali").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#guardali").html(response);
          },
          error: function (response){
              $("#guardali").html("No se cargaron los datos");
          }
        });
}

function guardarincidencia(fecha,disp,personal){
        var parametros = {
          "fecha" : fecha,
          "disp" : disp,
          "personal" : personal
        };
        $.ajax({
          data : parametros,
          url : 'guardarin.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#guardai").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#guardai").html(response);
          },
          error: function (response){
              $("#guardai").html("No se cargaron los datos");
          }
        });
}

function guardaasignacion(idestacion,idpersonal,prioridad){
        var parametros = {
          "idestacion" : idestacion,
          "idpersonal" : idpersonal,
          "prioridad"  : prioridad
        };
        $.ajax({
          data : parametros,
          url : 'guardaasignacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#actualizado"+idpersonal).html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado"+idpersonal).html(response);
          },
          error: function (response){
              $("#actualizado"+idpersonal).html("No se cargaron los datos");
          }
        });
}
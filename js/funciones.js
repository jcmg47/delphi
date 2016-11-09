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

function opcionlinea(){
        $.ajax({
          url : 'opcionlinea.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#lineas").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#lineas").html(response);
          },
          error: function (response){            
              $("#lineas").html("Intentelo nuevamente");
          }
        });
 }

function opcionestacion(){
        $.ajax({
          url : 'opcionestacion.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#estaciones").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#estaciones").html(response);
          },
          error: function (response){            
              $("#estaciones").html("Intentelo nuevamente");
          }
        });
 }

 function opcionturno(){
        $.ajax({
          url : 'opcionturno.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#turnos").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#turnos").html(response);
          },
          error: function (response){            
              $("#turnos").html("Intentelo nuevamente");
          }
        });
 }

 function opciontipo(){
        $.ajax({
          url : 'opciontipo.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#tipos").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#tipos").html(response);
          },
          error: function (response){            
              $("#tipos").html("Intentelo nuevamente");
          }
        });
 }

  function opcionpersonal(){
        $.ajax({
          url : 'opcionpersonal.php',
          type: 'post', 
          cache: false,
          beforeSend: function(){
             $("#tipos").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#tipos").html(response);
          },
          error: function (response){            
              $("#tipos").html("Intentelo nuevamente");
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

function actualizarempleado(id,tipo,turno,nombre,paterno,materno,num,correo){
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
             $("#actualizado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado").html(response);
          },
          error: function (response){
              $("#actualizado").html("No se cargaron los datos");
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
             $("#actualizado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado").html(response);
          },
          error: function (response){
              $("#actualizado").html("No se cargaron los datos");
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
             $("#actualizado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado").html(response);
          },
          error: function (response){
              $("#actualizado").html("No se cargaron los datos");
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
             $("#actualizado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado").html(response);
          },
          error: function (response){
              $("#actualizado").html("No se cargaron los datos");
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
             $("#actualizado").html("<img src = '../../img/loader.gif'>");
          },
          success : function(response){
            $("#actualizado").html(response);
          },
          error: function (response){
              $("#actualizado").html("No se cargaron los datos");
          }
        });
}
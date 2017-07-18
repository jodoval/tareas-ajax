
$(function(){


    var  $url="http://localhost/php/teoria/AJAX/tareas_ajax/public/";
    $(document).on ("click","#guardarTareas",function(){
      var $texto=$("#texto").val();
      var $token=$("input[name=_token]").val();

      $.ajax({
        url: $url+"crear-tarea",
        type: "post",
        dataType:"html",
        data:{
          texto: $texto,
          _token: $token

        }, //fin data
         success: function(tareas){
           $("#tareas").html(tareas);
         }


      }); //final .ajax

        $("#texto").val("");
       $("#crearTarea").modal("hide");
          $("#crearTarea").modal("hidden");
     });  //fin document

     $("#crearTarea").on('shown.bs.modal',function(){
        $("#texto").focus();
      });

 });  //fin function

$( document ).ready(function() {


  //Habilitar popovers

  $(function () {
    $('[data-toggle="popover"]').popover()
  })
        // $("#boton").click(function(e){

        //     e.preventDefault();
        //     var form = $("#formdetalle").serialize();

        //     $.ajax({
        //         type:'POST',
        //         url: 'datosdetalle.php', 
        //         data: form,
        //         success: function(){

        //             $("#formdetalle").trigger('reset');
        //         }
        // }); e.preventDefault();


        // });
    // 

    // Setup variable tracking
    var cookies = document.cookie.split(";").
    map(function(el){ return el.split("="); }).
    reduce(function(prev,cur){ prev[cur[0]] = cur[1];return prev },{});

cookies["MyCookie"] 



console.log(cookies);

var val = cookies["MyCookie"];

console.log(val);
var timesSubmitted = 0;

// Call function to submit form

$("#boton").click(function(e){

    e.preventDefault();

    var form = $("#formdetalle").serialize();

  // Check if user has submitted form more than 5 times

  if (timesSubmitted < val) {

      $.ajax({

            type:'POST',
            url: 'datosdetalle.php', 
            data: form,
            success: function(){

                $("#formdetalle").trigger('reset');
                          
              // Add for submission to counter
              timesSubmitted++;
              $("#botoncont").text("Registros por hacer:" + (--val));
            }
      });
  }else{
    $("#formdetalle").trigger('reset');
    $("#botoncont").text("Registros por hacer:" + 0);
      // Alert user they can not sumbit anymore!
    //  alert('No puedes llenar mas campos');
      swal({
        title: "Haz concluido",
        text: "Tus registros coinciden con la cantidad pedida",
        icon: "success",
        button: "Terminar",
      });
      $("#boton").attr("disabled", true);
      
  }
}

)});
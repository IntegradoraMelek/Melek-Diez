$( document ).ready(function() {


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

    // Setup variable for easy tracking!!!

var timesSubmitted = 0;

// Call function to submit form

$("#boton").click(function(e){

    e.preventDefault();

    var form = $("#formdetalle").serialize();

  // Check if user has submitted form more than 5 times

  if (timesSubmitted < 5) {

      $.ajax({

            type:'POST',
            url: 'datosdetalle.php', 
            data: form,
            success: function(){

                $("#formdetalle").trigger('reset');
                          
              // Add for submission to counter
              timesSubmitted++;
            }
      });
  }else{
      // Alert user they can not sumbit anymore!
      alert('You may only submit this 5 times per minute!');
      
  }
}

)});
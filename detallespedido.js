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

    // Setup variable tracking
    var cookies = document.cookie.split(";").
    map(function(el){ return el.split("="); }).
    reduce(function(prev,cur){ prev[cur[0]] = cur[1];return prev },{});

cookies["MyCookie"] 



console.log(cookies);

var timesSubmitted = 0;

// Call function to submit form

$("#boton").click(function(e){

    e.preventDefault();

    var form = $("#formdetalle").serialize();

  // Check if user has submitted form more than 5 times

  if (timesSubmitted < 3) {

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
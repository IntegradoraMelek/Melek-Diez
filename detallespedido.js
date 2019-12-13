$( document ).ready(function() {


    // function savedata(){

    //     var nombre = $("#playera").val();
    //     var numero = $("#numero").val();
    //     var talla_short = $("#selectshort").val();
    //     var talla_playera = $("#selectplayera").val();

    // }

        $("#boton").click(function(e){

            e.preventDefault();
            var form = $("#formdetalle").serialize();

            $.ajax({
                type:'POST',
                url: 'datosdetalle.php', 
                data: form,
                success: function(){

                    $("#formdetalle").trigger('reset');
                }
        }); e.preventDefault();


        });


    });
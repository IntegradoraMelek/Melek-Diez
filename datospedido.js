$( document ).ready(function() {

$("#selectProducto").change(function(){

    $("#preciopro").html($("option:selected",this).attr("data-precio"))
});

function getPrecio() {
        var str='';
        var val=document.getElementById('selectProducto');
        for (i=0;i< val.length;i++) { 
            if(val[i].selected){
                str += val[i].value + ','; 
            }
        }         
        var str=str.slice(0,str.length -1);
        
	$.ajax({          
        	type: "GET",
        	url: "getprecio.php",
        	data:'id_producto='+str,
        	success: function(data){
        		$("#precioUnitario").html(data);
        	}
	});
}
});


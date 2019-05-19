var btsave = document.getElementById("btnSave");
btsave.addEventListener("click",e=>{

var t=document.getElementById("tarea").value;
var d=document.getElementById("descripcion").value;

$.ajax({
	headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    },
	url: 'Tarea',
	type: 'POST',
	
	data: {'tarea':t,
		   'descripcion':d
		  
		    },
	success:function(rs){
	console.log(rs);
	setTimeout(cargarPagina,1000);

	}
});







});

function cargarPagina(){
	location.reload();
}


$(document).ready(function(){
/*edit*/
$(document).on("click","#btnEdit",function(){

		id=$(this).attr('idTarea');
		
		$.ajax({

		url: 'Tarea/'+id,
		type: 'GET',
		data:{'id':id},
		
		success:function(rs){
		
		document.getElementById("tareaup").value=rs['tarea'];
		document.getElementById("descripcionup").value=rs['descripcion'];
		document.getElementById("idup").value=rs['id'];
		
		}
		});
		
		
		});


$(document).on("click","#btnUpdate",function(){
   id=$("#idup").val();
   tarea = $("#tareaup").val();
   descripcion = $("#descripcionup").val();

   $.ajax({
   	headers: {
        'X-CSRF-TOKEN': $('meta[name="tokenup"]').attr('content')
    },
   	
   	url: 'Tarea/'+id,
   	type: 'PUT',
   
   	data: {'id':id,'tarea':tarea,'descripcion':descripcion},
   	success:function(rs){
   		console.log(rs);
   		setTimeout(cargarPagina,1000);
   	}
   });


/*elimlinar*/


  



});



$(document).on("click","#btnEliminar",function(){


alertify.confirm('Confirm Title', 'Confirm Message',

 function(){ 
			id = $(this).attr("idtareaup");
			token = $(this).attr("token");
					$.ajax({
					headers: {
					'x-csrf-token': token
					},
					url: 'tarea/'+id,
					type: 'delete',
					
					data: {param1: 'value1'},
					success:function(rs){
					alertify.alert('alert title', 'alert message!', function(){ alertify.success('ok'); });
					
					
					
					
					}
					});
			

 	alertify.success('Ok')
 	setTimeout(cargarPagina,1000);

 	 }
   , function(){ alertify.error('Cancel')});

});

});
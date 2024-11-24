<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>EDUHOME - Login</title>


    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- JS -->
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="css/bootstrap-notify.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="css/signin.css">
  </head>
  <body class="text-center">

  <div class="container">
  	<divr class="row">
  		
  		<div class="col-sm">
	      	<div class="form-signin">
				<div class="form-control">
			      	<!--<img class="mb-4" src="css/CRM.svg" alt="" width="172" height="172">-->
			      	<img class="mb-4" src="img/logo/logo2.png" alt="" width="272" height="142">
			    </div>
				<div class="form-control">
			      <!--<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>-->
			      <button id="tab1" class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Login</button>

			     <!-- <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Regístrate</label>-->
			      <button id="tab2" class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Regístrate</button>
			    </div>
			    <div class="form-control">
			    	<div class="text-center">
			        
			          
			            <p class="text-gray-500 mb-0">www.eduhome.com</p>
			            <a href="index.html">&larr; Back to WebPage...</a>
			        </div>
			    </div>
			</div>
	    </div>
	    <div class="col-sm">
	    	<div class=" tab1 collapse multi-collapse" id="multiCollapseExample1">
			  <h1 class="h3 mb-3 font-weight-normal">Inicie Sección </h1>
			  <label for="inputEmail" class="sr-only">Cédula</label>
			  <input id="inputEmail" class="form-control" placeholder="Ingrese la Cedula" required autofocus>
			  <label for="inputPassword" class="sr-only">Password</label>
			  <input type="password" id="inputPassword" class="form-control" placeholder="Ingrese Password" required>
			  <div class="checkbox mb-3">
				<label>
				  <input type="checkbox" value="remember-me"> Remember me
				</label>
			  </div>
			  <button id="btm-user"class="btn btn-lg btn-primary btn-block">Sign in</button>
			  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
			</div>

			<div class="tab2 form-signin collapse multi-collapse" id="multiCollapseExample2">
				<h1 class="h3 mb-3 font-weight-normal">Crear una Cuenta... </h1>
				<label for="inputNombre2" class="sr-only">Nombre Completo</label>
				<input id="inputNombre2" class="form-control" placeholder="Ingrese su Nombre" required autofocus>
				<label for="inputCedula2" class="sr-only">Cédula</label>
				<input id="inputCedula2" class="form-control" placeholder="Ingrese la Cedula" required autofocus>
				<label for="inputPassword2" class="sr-only">Password</label>
				<input type="password" id="inputPassword2" class="form-control" placeholder="Ingrese Password" required>
				<div class="checkbox mb-3">
				
				</div>
				<button id="btm-user_registre" class="btn btn-lg btn-primary btn-block">Crear Cuenta</button>
				<p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
			</div>
	    </div>
  	</div>
  </div>

<script>
	$(document).ready(function(){

		$("#tab1").click(function(){

			
		    $(".tab1").collapse('show');
		    $(".tab2").collapse('hide');

		    

		});

		$("#tab2").click(function(){
		    $(".tab2").collapse('show');
		    $(".tab1").collapse('hide');
		    
		});

		//if (($(".tab2").collapse('hide') == true) && ($(".tab1").collapse('hide')== true))
		//{
		//	alert("se oculto todo");
		//}

		   // if ($('.tab1').is(':hidden') && $('.tab2').is(':hidden') )
			 //  alert(" todos estan ocultos");
			//else
			  // alert(" ya no estan ocultos");
		


	  $("#btm-user" ).click(function(){
		  //alert($("#inputEmail").val());
		  //alert($("#inputPassword").val());
		 $('.alert').alert('close');
		  $.ajax({
				  url:"principal.php?m=login_check",
				  type: "POST",
				  data: {
					cedula: $("#inputEmail").val(),
					pass: $("#inputPassword").val()
				  }
			})
			.done(function( data, xhr ) {
				if (data["valor"] > 0){
					//alert("acceso accesible");
					$.notify(data["msn"], {
						newest_on_top: true,
						type: 'success',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
					$("#inputEmail").val("");
					$("#inputPassword").val("");
					window.location.href = "principal.php?m=index"; 
				}else{
					$.notify("Ocurrio algo! "+data["msn"], {
						newest_on_top: true,
						type: 'warning',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
				}
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				$.notify("Error Ocurrido++++ status: "+jqXHR+" errorThrown = "+errorThrown+"", {
						newest_on_top: true,
						type: 'danger',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
			})
			.always(function(data) {
				//alert( "complete" );
			});
		});

	  	$("#btm-user_registre" ).click(function(){

		 $('.alert').alert('close');
		  $.ajax({
				  url:"principal.php?m=registrese",
				  type: "POST",
				  data: {
					cedula: $("#inputCedula2").val(),
					nombre: $("#inputNombre2").val(),
					pass: $("#inputPassword2").val()
				  }
			})
			.done(function( data, xhr ) {
				//alert(data[1]);
				console.table(data);
				if (data["valor"] > 0){
					//alert("acceso accesible");
					$.notify(data['msn'], {
						newest_on_top: true,
						type: 'success',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
					$.notify("Comuniquese con el Administrador ... para su Creación de Perfil", {
						newest_on_top: true,
						type: 'success',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
					//window.location.href = "principal.php?m=index"; 
				}else{
					$.notify("Ocurrio algo! "+data["msn"], {
						newest_on_top: true,
						type: 'warning',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
				}
			})
			.fail(function(jqXHR, textStatus, errorThrown) {
				$.notify("Error Ocurrido++++ status: "+jqXHR+" errorThrown = "+errorThrown+"", {
						newest_on_top: true,
						type: 'danger',
						animate: {
							enter: 'animated zoomInDown',
							exit: 'animated zoomOutUp'
						}
					});
			})
			.always(function(data) {
				//alert( "complete" );
				$("#inputCedula2").val("");
				$("#inputNombre2").val("");
				$("#inputPassword2").val("");
			});
		});

	});
</script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

	<title> Dashboard Materia | MySchool Admin</title>

  <!-- Custom fonts for this template-->
	<link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<link href="css/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="css/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

	<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="css/bootstrap-notify.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<!-- Complemento para Exportar Datos -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js "></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- Scripts de Country Dashboard -->
	
	<link href='css/fullcalendar/core/main.css' rel='stylesheet' />
    <link href='css/fullcalendar/daygrid/main.css' rel='stylesheet' />

    <script src='css/fullcalendar/core/main.js'></script>
    <script src='css/fullcalendar/daygrid/main.js'></script>


	<link href='css/fullcalendar/timegrid/main.css' rel='stylesheet' />
	<link href='css/fullcalendar/list/main.css' rel='stylesheet' />

	<script src='css/fullcalendar/interaction/main.js'></script>

	<script src='css/fullcalendar/timegrid/main.js'></script>
	<script src='css/fullcalendar/list/main.js'></script>

    <script>
    	var ind;
    	var datos;
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
	      header: {
	        left: 'prev,next today',
	        center: 'title',
	        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
	      },
	      	navLinks: true, // can click day/week names to navigate views
      		eventLimit: true, // allow "more" link when too many events
      		events: {
		        url: 'tareas.php?m=ajaxtabla_calendario',
		        success: function(data){
		        	console.table(data);
		        	datos=data;

		        },
		        failure: function() {
		          Console.log("PASO ALGO NOSE");
		        }
		      },
		    eventClick:function(calEvent,jsEvent,view){
		    	//alert(datos[0]["id"]);
		    	$("#InputIDcss").val(datos[0]["id"]);
		    	$("#InputNOMcss").val(datos[0]["title"]);
		    	$("#InputDescripcioncss").val(datos[0]["descripcion"]);
		    	ind=datos[0]["id"];

		    	$("#tarea").prepend("<a class='btn btn-primary btn-icon-split' href='tareas.php?m=kardes_tarea&id="+ind+"'><span class='icon text-white-50'><i class='fas fa-flag'></i></span><span class='text'>IR A TAREAS </span> </a>");
				$('#myModal3').modal({show:true});
				
		    }
        });

        calendar.render();
      });

    </script>
	
    
</head>


<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Encuesta</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="../vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="../vendor/whirl/dist/whirl.css">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- SWEET ALERT-->
   <link rel="stylesheet" href="../vendor/sweetalert/dist/sweetalert.css">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="../vendor/datatables-colvis/css/dataTables.colVis.css">
   <link rel="stylesheet" href="../vendor/datatables/media/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="../vendor/dataTables.fontAwesome/index.css">
   <!-- =============== OTHERS STYLES ===============-->
   <link rel="stylesheet" type="text/css" href="../css/popup_modificado.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="../css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="../css/app.css" id="maincss">
</head>
<body>
	<div class="wrapper">
	<?php
		require_once '../Dao/VistaDao.php';
		$vistadao = new VistaDao();
		$vistadao->set_vista("gest_curso");
		include 'barra_opciones.php';
	?>
		<section>
			<!-- Page content-->
			<div class="content-wrapper">
				<h3>Gestionar Curso</h3>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"></h3>
				</div>
				<div class="panel-body">

					<!-- START DATATABLE -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">Gestion de Cursos
										<small></small>
									</div>

									<div class="panel-body">
										<!--<a class="mb-sm btn btn-success" id="btn_crearcurso" onclick="agregarCurso()">Agregar Curso</a>-->
										<button class="mb-sm btn btn-success" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Agregar Curso</button>
										<div id="id01" class="modal">
											<form class="modal-content animate" action="../Controlador/Curso.php">
												<div class="imgcontainer">
													<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
													<!-- <h3>Crear Curso</h3> -->
													<div class="panel-heading">
														<h3>Crear Curso</h3><small></small>
													</div>
												</div>

												<div class="container">
													<input name="action" value="crear" style="display: none;visibility:hidden" readonly>
													<label><b>Código</b></label><br>
													<input type="text" placeholder="Ingresar Código" name="code" required>

													<br><br>

													<label><b>Nombre</b></label><br>
													<input type="text" placeholder="Ingresar Nombre" name="name" required>
												</div>

												<div class="container">
													<button class="mb-sm btn btn-success" type="submit">Agregar</button>
													<button class="mb-sm btn btn-danger" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
												</div>
											</form>
										</div>

										<script>
											// Get the modal
											var modal = document.getElementById('id01');
											// When the user clicks anywhere outside of the modal, close it
											window.onclick = function(event) {
												if (event.target == modal) {
													modal.style.display = "none";
												}
											}
										</script>


										<script type="text/javascript">
											function agregarCurso(){

											}

											function swalAgregarCurso() {
												swal({
													title : "¡Agregado!",
													text : "Se agrego el curso exitosamente",
													type : "success"
												}, function(isConfirm) {
													location.reload();
												});
											}

												//swal("Cancelado", "Se cancelo la eliminación del curso", "error");
												/*
											    swal({
											      title: "Agregar Curso", 
											      text: "Are you sure that you want to delete this photo?", 
											      type: "warning",
											      showCancelButton: true,
											      closeOnConfirm: false,
											      confirmButtonText: "Yes, delete it!",
											      confirmButtonColor: "#ec6c62"
											    }, function() {
											      $.ajax({
											        url: "/api/photos/" + photoId,
											        type: "DELETE"
											      })
											      .done(function(data) {
											        swal("Deleted!", "Your file was successfully deleted!", "success");
											      })
											      .error(function(data) {
											        swal("Oops", "We couldn't connect to the server!", "error");
											      });
											    });
											    */
										</script>

										<div class="table-responsive">
											<table class="table table-striped table-hover" id="datatable1">
												<thead>
													<tr>
														<th class="sort-alpha">Codigo del Curso</th>
														<th>Nombre del Curso</th>
														<th>Opciones</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>TEL101</td>
														<td>Redes de computación</td>
														<td><button class="mb-sm btn btn-info"><i class="icon-pencil"></i></button>
															<button class="mb-sm btn btn-danger" onclick="swalEliminarCurso('Redes de computación')"><i class="icon-trash"></i></button></td>
													</tr>
													<tr>
														<td>TEL250</td>
														<td>Campos Electromagneticos</td>
														<td><button class="mb-sm btn btn-info"><i class="icon-pencil"></i></button>
															<button class="mb-sm btn btn-danger" onclick="swalEliminarCurso('Campos Electromagneticos')"><i class="icon-trash"></i></button></td>
													</tr>
												</tbody>
												<script type="text/javascript">
													function swalEliminarCurso(nombre_curso) {
													    swal({
													      title: "Eliminar Curso", 
													      text: "¿Desea eliminar el curso \"" + nombre_curso + "\"?", 
													      type: "warning",
													      showCancelButton : true,
													      confirmButtonColor : "#DD6B55",
													      confirmButtonText : "Eliminar",
													      cancelButtonText : "Cancelar",
													      closeOnConfirm : false,
													      closeOnCancel : false
													    }, function (isConfirm) {
													    	if (isConfirm) {
													    		swal({
													    			title : "¡Eliminado!",
															        text : "Se elimino el curso exitosamente",
															        type : "success"
															    }, function(isConfirm) {
															    	location.reload();
															    });
													    	} else {
													    		swal("Cancelado", "Se cancelo la eliminación del curso", "error");
													    	}
													    });
													}
												</script>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END DATATABLE -->
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- =============== VENDOR SCRIPTS ===============-->
	<!-- MODERNIZR-->
	<script src="../vendor/modernizr/modernizr.custom.js"></script>
	<!-- MATCHMEDIA POLYFILL-->
	<script src="../vendor/matchMedia/matchMedia.js"></script>
	<!-- JQUERY-->
	<script src="../vendor/jquery/dist/jquery.js"></script>
	<!-- BOOTSTRAP-->
	<script src="../vendor/bootstrap/dist/js/bootstrap.js"></script>
	<!-- STORAGE API-->
	<script src="../vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
	<!-- JQUERY EASING-->
	<script src="../vendor/jquery.easing/js/jquery.easing.js"></script>
	<!-- ANIMO-->
	<script src="../vendor/animo.js/animo.js"></script>
	<!-- SLIMSCROLL-->
	<script src="../vendor/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- SCREENFULL-->
	<script src="../vendor/screenfull/dist/screenfull.js"></script>
	<!-- LOCALIZE-->
	<script src="../vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
	<!-- RTL demo-->
	<script src="../js/demo/demo-rtl.js"></script>
	<!-- =============== PAGE VENDOR SCRIPTS ===============-->
	<!-- SWEET ALERT-->
	<script src="../vendor/sweetalert/dist/sweetalert.min.js"></script>
	<!-- DATATABLES-->
   	<script src="../vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   	<script src="../vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   	<script src="../vendor/datatables/media/js/dataTables.bootstrap.js"></script>
   	<script src="../vendor/datatables-buttons/js/dataTables.buttons.js"></script>
   	<script src="../vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
   	<script src="../vendor/datatables-buttons/js/buttons.colVis.js"></script>
   	<script src="../vendor/datatables-buttons/js/buttons.flash.js"></script>
   	<script src="../vendor/datatables-buttons/js/buttons.html5.js"></script>
   	<script src="../vendor/datatables-buttons/js/buttons.print.js"></script>
   	<script src="../vendor/datatables-responsive/js/dataTables.responsive.js"></script>
   	<script src="../vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
   	<script src="../js/demo/demo-datatable.js"></script>
	<!-- =============== APP SCRIPTS ===============-->
	<script src="../js/app.js"></script>
</body>
</html>
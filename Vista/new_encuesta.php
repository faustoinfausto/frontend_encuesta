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
   <!-- DATETIMEPICKER-->
   <link rel="stylesheet" href="../vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
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
		$vistadao->set_vista("new_encuesta");
		include 'barra_opciones.php';
	?>
		<section>
			<!-- Page content-->
			<div class="content-wrapper">
				<h3>Crear encuesta</h3>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Fechas de Secuencias</h3>
				</div>

				<div class="panel-body">
					<div class="card-body">
                        <div class="table-responsive table-bordered">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>L</th>
                                    <th>M</th>
                                    <th>X</th>
                                    <th>J</th>
                                    <th>V</th>
                                    <th>S</th>
                                    <th>D</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>J</td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_1">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_2">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_3">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_4">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_5">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_6">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker1_7">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>K</td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_1">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_2">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_3">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_4">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_5">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_6">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker2_7">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                 </tr>
                                 </tr>
                                 <tr>
                                    <td>W</td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_1">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_2">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_3">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_4">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_5">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_6">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                    <td>
                                          <div class="input-group date" id="datetimepicker3_7">
                                             <input class="form-control" type="text">
                                             <span class="input-group-append input-group-addon">
                                                <span class="input-group-text fa fa-calendar"></span>
                                             </span>
                                          </div>
                                    </td>
                                 </tr>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Curso</h3>
				</div>
				<div class="panel-body">
					
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
	<script src="js/demo/demo-rtl.js"></script>
	<!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- DATETIMEPICKER-->
   <script type="text/javascript" src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<!-- =============== APP SCRIPTS ===============-->
	<script src="js/app.js"></script>
</body>
</html>
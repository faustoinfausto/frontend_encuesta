<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Gestionar Curso</title>
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
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="../vendor/weather-icons/css/weather-icons.min.css">
   <!-- SWEET ALERT-->
   <link rel="stylesheet" href="../vendor/sweetalert/dist/sweetalert.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <?php
         require_once '../Dao/VistaDao.php';
         $vistadao = new VistaDao();
         $vistadao->set_vista("gest_curso");
         include 'navbar.php';
      ?>
      <!-- Main section-->

      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <h3>Gestionar Curso</h3>
         </div>
         <div class="panel panel-default">
            <div class="panel-heading">Gestion de Cursos
               <small></small>
            </div>
            <div class="panel-body">
               <button class="mb-sm btn btn-success" onclick="location.href='../app/gestcurso.php'">Agregar Curso</button>

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
                           <td><button class="mb-sm btn btn-info" onclick="location.href='../app/gestcurso.php?action=mod&idcurso=1'"><i class="icon-pencil"></i></button>
                              <button class="mb-sm btn btn-danger" onclick="swalEliminarCurso('Redes de computación')"><i class="icon-trash"></i></button></td>
                           </tr>
                           <tr>
                              <td>TEL250</td>
                              <td>Campos Electromagneticos</td>
                              <td><button class="mb-sm btn btn-info" onclick="location.href='../app/gestcurso.php?action=mod&idcurso=2'"><i class="icon-pencil"></i></button>
                              <button class="mb-sm btn btn-danger" onclick="swalEliminarCurso('Campos Electromagneticos')"><i class="icon-trash"></i></button></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

            </div>
         </div>
      </section>

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

      <!-- Page footer-->
      <footer>
         <span>&copy; 2018 - Telecomunicaciones</span>
      </footer>
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
   <!-- SPARKLINE-->
   <script src="../vendor/sparkline/index.js"></script>
   <!-- FLOT CHART-->
   <script src="../vendor/flot/jquery.flot.js"></script>
   <script src="../vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="../vendor/flot/jquery.flot.resize.js"></script>
   <script src="../vendor/flot/jquery.flot.pie.js"></script>
   <script src="../vendor/flot/jquery.flot.time.js"></script>
   <script src="../vendor/flot/jquery.flot.categories.js"></script>
   <script src="../vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
   <!-- EASY PIE CHART-->
   <script src="../vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
   <!-- MOMENT JS-->
   <script src="../vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- DEMO-->
   <script src="js/demo/demo-flot.js"></script>
   <!-- SWEET ALERT-->
   <script src="../vendor/sweetalert/dist/sweetalert.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>
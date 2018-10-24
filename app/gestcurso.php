<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
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
            <h3><?php echo 'Gestionar Curso'; ?> </h3>
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="../Controlador/Curso.php?action=gestionar" data-parsley-validate="" novalidate="">
                     <!-- START panel-->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title"><?php echo 'Gestionar Curso'; ?></div>
                        </div>
                        <div class="panel-body">
                           <div class="form-group">
                              <label class="control-label">Código *</label>
                              <input class="form-control" type="text" name="codigo" required>
                           </div>
                           <div class="form-group">
                              <label class="control-label">Nombre *</label>
                              <input class="form-control" type="text" name="nombre" required>
                           </div>
                           <div class="required">* Campos obligatorios</div>
                        </div>
                        <div class="panel-footer">
                           <div class="clearfix">
                              <div class="pull-left">
                                 <button class="btn btn-danger" onclick="location.href='../app/curso.php'">Cancelar</button>
                              </div>
                              <div class="pull-right">
                                 <button class="btn btn-success" type="submit"><?php echo 'Gestionar'; ?></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END panel-->
                  </form>
               </div>
            </div>
            <!-- END row-->
         </div>
      </section>

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
   <!-- PARSLEY-->
   <script src="../vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>
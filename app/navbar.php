      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar" role="navigation">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a class="navbar-brand" href="#/">
                  <div class="brand-logo">
                     <img class="img-responsive" src="img/logo.png" alt="App Logo">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img class="img-responsive" src="img/logo-single.png" alt="App Logo">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a class="hidden-xs" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                        <em class="fa fa-navicon"></em>
                     </a>
                     <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                     <a class="visible-xs sidebar-toggle" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                        <em class="fa fa-navicon"></em>
                     </a>
                  </li>
                  <!-- START User avatar toggle-->
                  <!-- END User avatar toggle-->
                  <!-- START lock screen-->
                  <!-- END lock screen-->
               </ul>
               <!-- END Left navbar-->

               <!-- START Right Navbar-->
               
               <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->

            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>


      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.HEADER">Nueva Encuesta</span>
                  </li>

                  <?php
                  if( $vistadao->get_vista("new_encuesta") )
                     echo '<li class=" active">';
                  else
                     echo '<li class=" ">';
                  ?>
                     <a href="#newencuesta" title="Nueva Encuesta" data-toggle="collapse" onclick="location.href='../Controlador/Encuesta.php'">
                        <!--<div class="pull-right label label-info">3</div>-->
                        <em class="icon-plus"></em>
                        <span data-localize="sidebar.nav.NEWENCUESTA">Nueva Encuesta</span>
                     </a>
                  </li>

                  <?php
                  if( $vistadao->get_vista("cont_encuesta") )
                     echo '<li class=" active">';
                  else
                     echo '<li class=" ">';
                  ?>
                     <a href="#contencuesta" title="Continuar Encuesta" data-toggle="collapse" onclick="location.href='../Controlador/Encuesta.php?action=load'">
                        <!--<div class="pull-right label label-info">3</div>-->
                        <em class="icon-arrow-right-circle"></em>
                        <span data-localize="sidebar.nav.CONTENCUESTA">Continuar Encuesta</span>
                     </a>
                  </li>

                  <?php
                  if( $vistadao->get_vista("gest_curso") )
                     echo '<li class=" active">';
                  else
                     echo '<li class=" ">';
                  ?>
                     <a href="#gestcurso" title="Gestionar Curso" data-toggle="collapse" onclick="location.href='../Controlador/Curso.php'">
                        <em class="icon-notebook"></em>
                        <span data-localize="sidebar.nav.GESTCURSO">Nueva Encuesta</span>
                     </a>
                  </li>

               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- offsidebar-->
      <aside class="offsidebar hide">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul class="nav nav-tabs nav-justified" role="tablist">
                  <li class="active" role="presentation">
                     <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li role="presentation">
                     <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                     </a>
                  </li>
               </ul>
               <!-- Tab panes-->
               
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
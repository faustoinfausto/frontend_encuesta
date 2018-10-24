	<!-- top navbar-->
	<header class="topnavbar-wrapper">
		<!-- START Top Navbar-->
		<nav class="navbar topnavbar" role="navigation">
			<!-- START navbar header-->
            <div class="navbar-header">
            	<a class="navbar-brand" href="../Controlador/Inicio.php">
            		<div class="brand-logo">
            			<img class="img-responsive" src="../Vista/img/logo.png" alt="App Logo">
            		</div>
            	</a>
            </div>
            <!-- END navbar header-->
        </nav>
        <!-- END Top Navbar-->
    </header>
    <aside class="aside">
    	<!-- START Sidebar (left)-->
    	<div class="aside-inner">
    		<nav class="sidebar" data-sidebar-anyclick-close="">
    			<!-- START sidebar nav-->
    			<ul class="nav">
    				<li class="nav-heading ">
    					<span data-localize="sidebar.heading.HEADER">Menu Principal</span>
    				</li>

                    <!--
    				<?php
    				#if( $vistadao->get_vista("dashboard") )
    					#echo '<li class=" active">';
    				#else
    					#echo '<li class=" ">';
    				?>

    					<a title="Dashboard" data-toggle="collapse" onclick="location.href='dashboard.php'">
    						<em class="icon-home"></em>
    						<span data-localize="sidebar.nav.DASHBOARD">Bienvenido</span>
    					</a>
    				</li>
                    -->

                    <?php
                    if( $vistadao->get_vista("new_encuesta") )
                        echo '<li class=" active">';
                    else
                        echo '<li class=" ">';
                    ?>
                    
                        <!--<a title="Dashboard" data-toggle="collapse" onclick="location.href='new_encuesta.php'">-->
                            <a title="Dashboard" data-toggle="collapse" onclick="location.href='../Controlador/Encuesta.php'">
                            <em class="icon-plus"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Generar Encuesta</span>
                        </a>
                    </li>

                    <?php
                    if( $vistadao->get_vista("cont_encuesta") )
                        echo '<li class=" active">';
                    else
                        echo '<li class=" ">';
                    ?>
                    
                        <a title="Dashboard" data-toggle="collapse" onclick="location.href='../Controlador/Encuesta.php?action=load'">
                            <em class="icon-arrow-right-circle"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Continuar Encuesta</span>
                        </a>
                    </li>

                    <?php
                    if( $vistadao->get_vista("gest_curso") )
                        echo '<li class=" active">';
                    else
                        echo '<li class=" ">';
                    ?>
                    
                        <a title="Dashboard" data-toggle="collapse" onclick="location.href='../Controlador/Curso.php'">
                            <em class="icon-notebook"></em>
                            <span data-localize="sidebar.nav.DASHBOARD">Gestion Curso</span>
                        </a>
                    </li>
    				
    				<li class=" ">
    					<a title="Dashboard" data-toggle="collapse" onclick="location.href='../index.html'">
    						<em class="icon-logout"></em>
    						<span data-localize="sidebar.nav.DASHBOARD">Salir</span>
    					</a>
    				</li>

    			</ul>
    			<!-- END sidebar nav-->
    		</nav>
    	</div>
    </aside>
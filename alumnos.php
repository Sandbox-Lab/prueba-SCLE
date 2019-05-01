<?php 
include 'Include/session.inc.php' ;
include 'Include/connection.inc.php' ;
include 'Include/delete_alumno.inc.php' ;
/*
include 'Include/update.inc.php' ;  Nota: crear estos escripts
include 'Include/show.inc.php' ;
*/
#=========================================================
	
include 'Template/header.php';
include 'Template/navbar.php';
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<ul class="nav menu">
		<li><a href="inicio.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Inicio</a></li>
		<li class="parent active">
			<a href="#">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>Personal <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>
			</a>
			<ul class="children collapse" id="sub-item-1">
				<li class="active">
					<a class="" href="alumnos.php">
						<span class="glyphicon glyphicon-book activate" aria-hidde="true"></span>Alumnos
					</a>
				</li>

				<li>
					<a class="" href="docentes.php">
						<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>Docentes
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div> <!--/.sidebar-->

<?php
include 'Template/main.php'; //Contenedor del espacio de trabajo
include 'Template/breadcrumb.php';
include 'Template/head.php';
include 'Template/tabla_alumnos.php';
include 'Template/endmain.php';//Fin del contenedor
include 'Template/footer.php';
?>

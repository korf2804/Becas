<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand active" href="<?php echo base_url('index.php/userhome'); ?>"><i class="fa fa-desktop"> <?php echo $usuario; ?></i></a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-search"> Buscar</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('index.php/operario/buscar/busqueda_matricula') ?>"><i class="fa fa-search">Matricula</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/buscar/busqueda_nombre') ?>"><i class="fa fa-search">Nombre</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/buscar/busqueda_apellidos') ?>"><i class="fa fa-search">Apellidos</i></a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-file-o"> Becas</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('index.php/operario/becas/ingreso_fotocopias') ?>"><i class="fa fa-files-o"> Fotocopias</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/becas/ingreso_impresion') ?>"><i class="fa fa-print"> Impresion</i></a></li>			
				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('index.php/operario/listar/lista_antropologia') ?>"><i class="fa fa-list-ul"> Antropología</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/listar/lista_periodismo') ?>"><i class="fa fa-list-ul"> Periodismo</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/listar/lista_psicologia') ?>"><i class="fa fa-list-ul"> Psicología</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/listar/lista_sociologia') ?>"><i class="fa fa-list-ul"> Sociología</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/listar/lista_trabajosocial') ?>"><i class="fa fa-list-ul"> Trabajo Social</i></a></li>
				</ul>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-user"> <?php echo $usuario; ?></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('index.php/operario/operario/datos_operario') ?>"><i class="fa fa-gears"> Modificar mis datos</i></a></li>
					<li><a href="<?php echo base_url('index.php/operario/operario/password') ?>"><i class="fa fa-key"> Modificar contraseña</i></a></li>
					<li><a href="<?php echo base_url('index.php/userhome/logout'); ?>"><i class="fa fa-sign-out">Salir</i></a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
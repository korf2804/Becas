<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Desplegar navegación</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand active" href="<?php echo base_url('userhome'); ?>"><i class="fa fa-desktop"> <?php echo $perfil; ?></i></a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-area-chart"> Estadisticas</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/estadisticas/anuales') ?>"><i class="fa fa-area-chart"> Anuales</i></a></li>
					<li><a href="#"><i class="fa fa-area-chart"> Semestrales</i></a></li>
					<li><a href="#"><i class="fa fa-area-chart"> Mensuales</i></a></li>

				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-pie-chart"> Totales</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-pie-chart"> Anuales</i></a></li>
					<li><a href="#"><i class="fa fa-pie-chart"> Semestrales</i></a></li>
					<li><a href="#"><i class="fa fa-pie-chart"> Mensuales</i></a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-usd"> Cierres de Mes</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/cierre/actual') ?>"><i class="fa fa-usd"> Actual</i></a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="fa fa-usd"> Anuales</i></a></li>
					<li><a href="#"><i class="fa fa-usd"> Semestrales</i></a></li>
					<li><a href="<?php echo base_url('jefatura/cierre/mensual') ?>"><i class="fa fa-usd"> Mensuales</i></a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-search"> Buscar</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/buscar/busqueda_matricula') ?>"><i class="fa fa-search">Matricula</i></a></li>
					<li><a href="<?php echo base_url('jefatura/buscar/busqueda_nombre') ?>"><i class="fa fa-search">Nombre</i></a></li>
					<li><a href="<?php echo base_url('jefatura/buscar/busqueda_apellidos') ?>"><i class="fa fa-search">Apellidos</i></a></li>
				</ul>
			</li>
			<?php if($perfil == 'Jefatura Decanato'):?>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_antropologia') ?>"><i class="fa fa-list-ul"> Antropología</i></a></li>
					<li><a href="<?php echo base_url('jefatura/listar/lista_periodismo') ?>"><i class="fa fa-list-ul"> Periodismo</i></a></li>
					<li><a href="<?php echo base_url('jefatura/listar/lista_psicologia') ?>"><i class="fa fa-list-ul"> Psicología</i></a></li>
					<li><a href="<?php echo base_url('jefatura/listar/lista_sociologia') ?>"><i class="fa fa-list-ul"> Sociología</i></a></li>
					<li><a href="<?php echo base_url('jefatura/listar/lista_trabajosocial') ?>"><i class="fa fa-list-ul"> Trabajo Social</i></a></li>
				</ul>
			</li>
			<?php elseif($perfil == 'Jefatura Trabajo Social'):?>
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_trabajosocial') ?>"><i class="fa fa-list-ul"> Trabajo Social</i></a></li>
				</ul>
			</li>
			<?php elseif($perfil == 'Jefatura Sociologia'):?>
				<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_sociologia') ?>"><i class="fa fa-list-ul"> Sociología</i></a></li>
				</ul>
			</li>
			<?php elseif($perfil == 'Jefatura Periodismo'):?>
				<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_periodismo') ?>"><i class="fa fa-list-ul"> Periodismo</i></a></li>
				</ul>
			</li>
			<?php elseif($perfil == 'Jefatura Antropologia'):?>
				<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_antropologia') ?>"><i class="fa fa-list-ul"> Antropología</i></a></li>
				</ul>
			</li>
			<?php elseif($perfil == 'Jefatura Psicologia'):?>
				<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list-ul"> Listas de Becados</i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/listar/lista_psicologia') ?>"><i class="fa fa-list-ul"> Psicología</i></a></li>
				</ul>
			</li>
			<?php endif; ?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-user"> <?php echo $usuario; ?></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo base_url('jefatura/jefatura/datos_jefatura') ?>"><i class="fa fa-gears"> Modificar mis datos</i></a></li>
					<li><a href="<?php echo base_url('jefatura/jefatura/password') ?>"><i class="fa fa-key"> Modificar contraseña</i></a></li>
					<li><a href="<?php echo base_url('userhome/logout'); ?>"><i class="fa fa-sign-out">Salir</i></a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<style type="text/css">
	.scrollup{
	    width:40px;
	    height:40px;
	    opacity:0.3;
	    position:fixed;
	    bottom:25px;
	    right:25px;
	    display:inline;
	    text-indent:-9999px;
	    background: url('<?php echo base_url(); ?>assets/img/icon_top.png') no-repeat;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
  		$('#arriba').click(function(){ //Subir Pagina al top
			$('html, body').animate({scrollTop:0}, 500);
			return false;
		});
    });
</script>
		
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
			<div class="table-responsive">
				<h1 class="text-text-center">Listado de <?php echo $carrera; ?></h1>
				<?php if($query): ?>
				<h2 class="text-text-center">Total <?php echo $query->num_rows(); ?> alumnos becados</h2>
				<table class="table table-hover table-condensed " style="font-size:12px;">
					<tr>
						<th>Matricula</th>
						<th>rut</th>
						<th>Nombre</th>
						<th>Año</th>
						<th>Becas<br />Fotocopia</th>
						<th>Becas<br />Impresion</th>
						<th>Semestre</th>
					</tr>
					<?php 
						foreach ($query->result() as $tipo):
					?>	
					<tr>
						<td><?php echo $tipo->matricula; ?></td>
						<td><?php echo $tipo->rut; ?></td>
						<td><?php echo $tipo->nombres. " ".$tipo->apellidos_paterno. " ".$tipo->apellidos_materno; ?></td>
						<td><?php echo $tipo->anio; ?></td>
						<td><?php echo $tipo->becas_fotocopias; ?></td>
						<td><?php echo $tipo->becas_impresion; ?></td>
						<td><?php echo $tipo->anio_semestre; ?></td>
					</tr>
					<?php
						endforeach;
					?>
					<a href="" id='arriba' class="scrollup">ir arriba</a>
				</table>
				<?php else: ?>
					<h2 class="text text-center">Aun no hay alumnos ingresados</h2>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>

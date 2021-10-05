<?php 
	$datos = $result->row();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12  col-md-12 ">
			<h1>CIERRE MENSUAL</h1>
			<h2>MES: <?php echo $datos->mes; ?></h2>
			<div class="table">
				<table class="table table-hover table-condensedr">
					<tr>
						<th rowspan="3" class="info">Carrera</th>
						<th colspan="6">Becas</th>
						<th colspan="6">Valores</th>
					</tr>
					<tr>
						<th colspan="3" class="danger">Impresion</th>
						<th colspan="3" class="success">Fotocopias</th>
						<th colspan="3" class="warning">Impresion</th>
						<th colspan="3" class="active">Fotocopias</th>
					</tr>
					<tr>
						<th  class="danger">Monto<br />Actual</th>
						<th  class="danger">Monto<br />Anterior</th>
						<th  class="danger">Monto<br />Total</th>
						<th class="success">Monto<br />Actual</th>
						<th class="success">Monto<br />Anterior</th>
						<th class="success">Monto<br />Total</th>
						<th class="warning">Valor<br />Neto</th>
						<th class="warning">Valor<br />IVA</th>
						<th class="warning">Valor<br />Total</th>
						<th class="active">Valor<br />Neto</th>
						<th class="active">Valor<br />IVA</th>
						<th class="active">Valor<br />Total</th>
					</tr>
					<?php 	foreach ($result->result() as $row):?>
					<tr>
						<th class="info"><?php echo $row->carrera;?></th>
						<th class="danger"><?php echo $row->montoActual_im;?></th>
						<th class="danger"><?php echo $row->montoAnterior_im;?></th>
						<th class="danger"><?php echo $row->montoTotal_im;?></th>
						<th class="success"><?php echo $row->montoActual_fo;?></th>
						<th class="success"><?php echo $row->montoAnterior_fo;?></th>
						<th class="success"><?php echo $row->montoTotal_fo;?></th>
						<th class="warning">$<?php echo $row->valorNeto_im;?></th>
						<th class="warning">$<?php echo $row->valorIVA_im;?></th>
						<th class="warning">$<?php echo $row->valorTotal_im;?></th>
						<th class="active">$<?php echo $row->valorNeto_fo;?></th>
						<th class="active">$<?php echo $row->valorIVA_fo;?></th>
						<th class="active">$<?php echo $row->valorTotal_fo;?></th>
					</tr>
					<?php 	endforeach; ?>
				</table>
			</div>
			
		</div>
	</div>
</div>
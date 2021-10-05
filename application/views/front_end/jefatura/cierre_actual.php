<?php
$precio          = $valor->row();//Obtener Precios
$Valor_Impresion = $precio->impresion;//precio impresion
$Valor_Fotocopia = $precio->fotocopia;//precio fotocopia
$IVA_fo          = round((($Valor_Fotocopia*1.19)-$Valor_Fotocopia));//IVA Fotocopia
$IVA_im          = round((($Valor_Impresion*1.19)-$Valor_Impresion));//IVA Impresion
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12  col-md-10 col-md-offset-1">
			<h1>CIERRE ACTUAL</h1>
			<h2>MES: <?php echo $mes;?></h2>
			<div class="table-responsive">
				<table class="table table-hover table-condensedr">
					<tr>
						<th rowspan="2">CARRERA</th>
						<th rowspan="2">TIPO</th>
						<th colspan="3">BECAS</th>
						<th colspan="3">VALORES</th>
					</tr>
					<tr>
						<th>Monto Actual</th>
						<th>Monto Anterior</th>
						<th>Monto Total Ocupado</th>
						<th>Valor NETO</th>
						<th>Valor IVA</th>
						<th>TOTAL $</th>
					</tr>
<?php
foreach ($monto->result() as $row):
?>
					<tr>
						<th rowspan="2"><?php echo strtoupper($row->carrera);?></th>
						<th>Fotocopias</th>
<?php
if ($result == FALSE):
//Variables Fotocopias
$F_montoActual   = $row->fotocopiadas;
$F_MontoAnterior = 0;
$F_Total         = $F_MontoAnterior+$row->fotocopiadas;
$F_valorNeto     = $F_montoActual*$Valor_Fotocopia;
$F_valorIVA      = $F_valorNeto*0.19;
$F_valorTotal    = $F_valorNeto+round($F_valorIVA);
//Variables Impresion
$I_montoActual   = $row->impresas;
$I_MontoAnterior = 0;
$I_Total         = $I_MontoAnterior+$row->impresas;
$I_valorNeto     = $I_montoActual*$Valor_Impresion;
$I_valorIVA      = $I_valorNeto*0.19;
$I_valorTotal    = $I_valorNeto+round($I_valorIVA);
 else :
//Variables Fotocopias
foreach ($result->result() as $valor) {

	$F_montoActual   = $row->fotocopiadas-$valor->Tfotocopiadas;
	$F_MontoAnterior = $valor->Tfotocopiadas;
	$F_MontoAnterior = $valor->Tfotocopiadas;
}
$F_Total      = $F_MontoAnterior+$F_montoActual;
$F_valorNeto  = $F_montoActual*$Valor_Fotocopia;
$F_valorIVA   = $F_valorNeto*0.19;
$F_valorTotal = $F_valorNeto+round($F_valorIVA);
//Variables Impresion
$I_montoActual   = $valor->Timpresas;
$I_MontoAnterior = $valor->Timpresas;
$I_Total         = $I_MontoAnterior+$I_montoActual;
$I_valorNeto     = $I_montoActual*$Valor_Impresion;
$I_valorIVA      = $I_valorNeto*0.19;
$I_valorTotal    = $I_valorNeto+round($I_valorIVA);

?>

							<th class="danger">	<?php echo $F_montoActual;?></th>
							<th class="danger">	<?php echo $F_MontoAnterior;?></th>
							<th class="danger">	<?php echo $F_Total;?></th>
							<th class="danger">$	<?php echo $F_valorNeto;?></th>
							<th class="danger">$	<?php echo round($F_valorIVA);?></th>
							<th class="danger">$	<?php echo $F_valorTotal;?></th>

						</tr>
						<tr>
							<th>Impresion</th>
							<th class="success">	<?php echo $I_montoActual;?></th>
							<th class="success">	<?php echo $I_MontoAnterior;?></th>
							<th class="success">	<?php echo $I_Total;?></th>
							<th class="success">$	<?php echo $I_valorNeto;?></th>
							<th class="success">$	<?php echo round($I_valorIVA);?></th>
							<th class="success">$	<?php echo $I_valorTotal;?></th>

<?php endif;?>
</tr>
<?php endforeach;?>
					</table>
			</div>

		</div>
	</div>
</div>
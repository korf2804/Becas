
<br />
<div class="container">
    <div class="row">
    	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
			<div class="table-responsive">
				<table class="table table-hover table-condensed  text-success">
					<?php if($result): ?>
					<?php foreach ($result->result() as $row):?>
					<tr>
			     		<th class="text text-center" colspan="6"><?php echo strtoupper($row->nombres." ".$row->apellidos_paterno." ".$row->apellidos_materno);?></th>
                    <tr>
                        <th>Carrera</th>
                        <th>Becas<br />Ingresadas</th>
                        <th>Becas<br />Ocupadas</th>
                        <th>Restantes</th>
                        <th>Expiración</th>
                        <th>Semestre</th>
                    </tr>
                    <tr>
                        <th><?php echo $row->carrera; ?></th>
                        <th><?php echo $row->becas_fotocopias; ?></th>
                        <th><?php echo $row->fotocopiadas; ?></th>
                        <?php $restantes = $row->becas_fotocopias - $row->fotocopiadas; ?>
                        <th><?php echo $restantes; ?></th>
                        <th><?php echo $row->expiracion; ?></th>
                        <th><?php echo $row->anio_semestre; ?></th>
                        <?php $result->free_result(); ?>
                    </tr>
                    <?php endforeach; ?>
                	<?php else: ?>
                		<?php redirect('index.php/error/error_802', 'refresh'); ?>
                	<?php endif; ?>
				</table>
			</div>
		</div>
	</div>		
</div>

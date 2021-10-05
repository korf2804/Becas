<div class="container">
    <div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    	<h1>Cierres Mensuales</h1>
	    	<h3>Selecciones Mes</h3>
	    	<br />
	    	<form class="form-horizontal" action="<?php echo base_url(); ?>jefatura/cierre/mensualSelect" method="post">
				<label for="inputCarrera" class="control-label col-lg-2 col-xs-12">MES:</label>
	          	<div class="col-xs-9">
	            	<select name="mes" id="mes" class="form-control input-lg col-xs-12">
	            		<option value="" selected>Seleccione mes...</option>
	            		<?php foreach($mes->result() as $meses): ?>
	              		<option value="<?php echo $meses->mes; ?>"><?php echo $meses->mes; ?></option>
	              	<?php endforeach; ?>
	              	</select>
	            </div>
	            <div class="col-xs-9 col-xs-offset-2">
	              	<br>
	                <button type="submit" class="btn btn-primary form-control btn-lg">VER CIERRE<i class="fa fa-usd"></i></button>
              	</div>
	        </form>
	    </div>
    </div>
</div>
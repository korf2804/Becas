<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<h1>Actualizar Contraseña</h1>
        	<h3>Todos los campos son Obligatorios</h3>
        	<br />
          
        	<form class="form-horizontal" action="<?php echo base_url('jefatura/jefatura/update_password'); ?>" method="post">
    				<div class="form-group">
      				<label for="inputName" class="control-label col-lg-4 col-xs-12">Contraseña Actual:</label>
              <div class="col-xs-7">
                <input type="password" class="form-control input-lg col-xs-12" name="lastPassword">
              </div>
              <label for="inputApellido" class="control-label col-lg-4 col-xs-12">Nueva Contraseña:</label>
              <div class="col-xs-7">
                <input type="password" class="form-control input-lg col-xs-12"  name="newPassword">
              </div>
              <label for="inputEmail" class="control-label col-lg-4 col-xs-12">Repita Contraseña:</label>
              <div class="col-xs-7">
                <input type="password" class="form-control input-lg col-xs-12"  name="newPassword2">
              </div>
              <br>
              <div class="col-xs-9 col-xs-offset-2">
              <br>
                <button type="submit" class="btn btn-primary form-control btn-lg">Actualizar Mi Contraseña <i class="fa fa-gears"></i></button>
              </div>
    				</div>
			    </form>
  				</div>
			</form>
        </div>
    </div>
</div>
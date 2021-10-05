<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<h1>Actualizar mis Datos</h1>
        	<h3>No todos los campos son modificables</h3>
        	<br />
          
        	<form class="form-horizontal" action="<?php echo base_url('jefatura/jefatura/update_datos'); ?>" method="post">
          <?php foreach ($result->result() as $row):?>
    				<div class="form-group">
      				<label for="inputName" class="control-label col-lg-3 col-xs-12">Nombres:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->nombre; ?>"name="nombre">
              </div>
              <label for="inputApellido" class="control-label col-lg-3 col-xs-12">Apellidos:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->apellidos; ?>" name="apellidos">
              </div>
              <label for="inputEmail" class="control-label col-lg-3 col-xs-12">Correo:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->correo; ?>" name="correo">
              </div>
              <label for="inputUsuario" class="control-label col-lg-3 col-xs-12">Usuario:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->usuario; ?>" name="usuario" disabled>
              </div>
              <label for="inputRol" class="control-label col-lg-3 col-xs-12">Rol:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->departamento; ?>" name="departamento" disabled>
              </div>
              <label for="inputCarrera" class="control-label col-lg-3 col-xs-12">Perfil:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" value="<?php echo $row->perfil; ?>" name="perfil" disabled>
              </div>
            <?php endforeach; ?>
              <br>
              <div class="col-xs-9 col-xs-offset-2">
              <br>
                <button type="submit" class="btn btn-primary form-control btn-lg">Actualizar Mis Datos <i class="fa fa-gears"></i></button>
              </div>
    				</div>
			    </form>
  				</div>
			</form>
        </div>
    </div>
</div>
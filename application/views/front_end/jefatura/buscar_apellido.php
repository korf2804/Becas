<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<h1>Busqueda de alumnos por Apellidos</h1>
        	<h3>Ingrese apellidos a buscar y seleccione carrera</h3>
        	<br />
        	<form class="form-horizontal" action="<?php echo base_url(); ?>jefatura/buscar/resultado_busqueda_apellido" method="post">
    				<div class="form-group">
      				<label for="inputName" class="control-label col-lg-2 col-xs-12">Apellido:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" placeholder="Ejemplo: Santander Alvear" name="apellido">
              </div>
              <label for="inputCarrera" class="control-label col-lg-2 col-xs-12">Carrera:</label>
              <div class="col-xs-9">
                <select name="carrera" id="carrera" class="form-control input-lg col-xs-12">
                <?php if($perfil == 'Jefatura Decanato'): ?>
                  <option value="Antropologia">Antropologia</option>
                  <option value="Periodismo">Peridismo</option>
                  <option value="Psicologia">Psicologia</option>
                  <option value="Trabajo Social">Trabajo Social</option>
                  <option value="Sociologia">Sociologia</option>
                <?php else: ?>
                  <option value="<?php echo $departamento; ?>"><?php echo $departamento; ?></option>
                <?php endif; ?>
                </select>
              </div>
              <br>
              <div class="col-xs-9 col-xs-offset-2">
              <br>
                <button type="submit" class="btn btn-primary form-control btn-lg">BUSCAR <i class="fa fa-search"></i></button>
              </div>
    				</div>
			    </form>
  				</div>
			</form>
        </div>
    </div>
</div>
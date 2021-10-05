<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<h1>Busqueda de alumnos por Matricula</h1>
        	<h3>Ingrese los numeros de la matricula a buscar y seleccione carrera</h3>
        	<br />
        	<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/operario/buscar/resultado_busqueda_matricula" method="post">
    				<div class="form-group">
      				<label for="inputName" class="control-label col-lg-2 col-xs-12">Matricula:</label>
              <div class="col-xs-9">
                <input type="text" class="form-control input-lg col-xs-12" placeholder="Ejemplo: 2010123456" name="matricula">
              </div>
              <label for="inputCarrera" class="control-label col-lg-2 col-xs-12">Carrera:</label>
              <div class="col-xs-9">
                <select name="carrera" id="carrera" class="form-control input-lg col-xs-12">
                  <option value="5">Antropologia</option>
                  <option value="1">Periodismo</option>
                  <option value="2">Psicologia</option>
                  <option value="3">Trabajo Social</option>
                  <option value="4">Sociologia</option>
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
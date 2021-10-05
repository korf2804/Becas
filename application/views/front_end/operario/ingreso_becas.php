<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
      <h1>Ingresar Numero de matricula</h1>
      <br />
 
      <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/operario/becas/<?php echo $busqueda; ?>" method="post">
        <div class="form-group">
          <label for="inputName" class="control-label col-lg-2 col-xs-12">Matricula:</label>
       
          <div class="col-xs-9">
            <input type="text" class="form-control input-lg col-xs-12" placeholder="Ejemplo: 2010123456" name="matricula">
          </div>
          <br>
          <div class="col-xs-9 col-xs-offset-2">
          <br>
            <button type="submit" class="btn btn-primary form-control btn-lg">BUSCAR <i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

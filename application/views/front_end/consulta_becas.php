<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
            <br /><br />
            <div class="panel-group">
                <h2 class="text text-center">Ingrese su numero de matricula en el formato indicado</h2>
            </div>  
            <form action="<?php echo base_url(); ?>index.php/consulta/validar" method="post" name="consulta">
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                    <input class="form-control" type="text" name="matricula" placeholder="Formato Matricula: '2015457896'"value="<?php echo set_value('matricula'); ?>">
                    <?php echo form_error('matricula'); ?>
                </div>
                <div class="form-group">
                        <input class="btn btn-primary btn-lg btn-block" type="submit"  value="consultar mis becas!!!">
                </div>
            </form>
        </div>
    </div>
</div>
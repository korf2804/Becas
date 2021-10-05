<div class="container">
    <div class="row">
        <?php 
            if($result){
            ?>
                <h1>Resultados para la busqueda "<?php echo $par_busqueda; ?>". </h1>
                <h2>Para la carrera de "<?php echo $carrera; ?>"</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                    <tr>
                        <th>Matricula</th>
                        <th>Rut</th>
                        <th>Nombre<br />completo</th>
                        <th>Becas<br />Impresión</th>
                        <th>Becas<br />Fotocopia</th>
                        <th>Expiración</th>
                    </tr>
                    <?php
                        foreach ($result->result() as $row):
                    ?>
                    <tr>
                        <th><?php echo $row->matricula; ?></th>
                        <th><?php echo $row->rut; ?></th>
                        <th><?php echo $row->nombres." ".$row->apellidos_paterno." ".$row->apellidos_materno; ?></th>
                        <th><?php echo $row->becas_impresion; ?></th>
                        <th><?php echo $row->becas_fotocopias; ?></th>
                        <th><?php echo $row->expiracion; ?></th>
                    </tr>
                    <?php
                        endforeach;
            }
            else{
                redirect('error/error_404', 'refresh');
            }
        ?>          
                    </table>
                </div>
    </div>
</div>


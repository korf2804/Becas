<div class="container">
    <div class="row">
        <?php 
            if($result){
                switch($carrera):
                    case 1: $c = 'Periodismo'; break;
                    case 2: $c = 'Psicologia'; break;
                    case 3: $c = 'Trabajo Social'; break;
                    case 4: $c = 'Sociologia'; break;
                    case 5: $c = 'Antropologia'; break;
                endswitch;
            ?>
                <h1>Resultados para la busqueda "<?php echo $par_busqueda; ?>". </h1>
                <h2>Para la carrera de "<?php echo $c; ?>"</h2>
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
                        <th><?php echo $row->SB_MatriculaBecado; ?></th>
                        <th><?php echo $row->SB_RutBecado; ?></th>
                        <th><?php echo $row->SB_NomBecado." ".$row->SB_ApePatBecado." ".$row->SB_ApeMatBecado; ?></th>
                        <th><?php echo $row->SB_BecasImpresion; ?></th>
                        <th><?php echo $row->SB_BecasFotocopia; ?></th>
                        <th><?php echo $row->SB_FechaExpiracion; ?></th>
                    </tr>
                    <?php
                        endforeach;
            }
            else{
                redirect('index.php/errors/error_404', 'refresh');
            }
        ?>          
                    </table>
                </div>
    </div>
</div>


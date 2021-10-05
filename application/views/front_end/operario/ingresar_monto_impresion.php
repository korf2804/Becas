<div class="container">
    <div class="row">
        <?php 
            if($result){
                $hoy = date('Y-m-d');
            ?>
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <h1>Ingresar Becas de Impresión</h1>
                <h2>Matricula "<?php echo $par_busqueda; ?>"</h2>
                <br />
                <div class="table-responsive">
                    <?php
                        foreach ($result->result() as $row):
                            switch($row->SB_CarreraBecado):
                                case 1: $c = 'Periodismo'; break;
                                case 2: $c = 'Psicologia'; break;
                                case 3: $c = 'Trabajo Social'; break;
                                case 4: $c = 'Sociologia'; break;
                                case 5: $c = 'Antropologia'; break;
                            endswitch;
                    ?>
                    <table class="table table-hover table-condensed">
                        <th class="text text-center" colspan="6"><?php echo strtoupper($row->SB_NomBecado." ".$row->SB_ApePatBecado." ".$row->SB_ApeMatBecado);?></th>
                    <tr>
                        <th>Carrera</th>
                        <th>Becas<br />Ingresadas</th>
                        <th>Becas<br />Ocupadas</th>
                        <th>Restantes</th>
                        <th>Expiración</th>
                        <th>Semestre</th>
                    </tr>
                    
                    <tr>
                        <th><?php echo $c; ?></th>
                        <th><?php echo $row->SB_BecasImpresion; ?></th>
                        <th><?php echo $row->SB_ImpresasBecado; ?></th>
                        <?php $restantes = $row->SB_BecasImpresion - $row->SB_ImpresasBecado; ?>
                        <th><?php echo $restantes; ?></th>
                        <th><?php echo $row->SB_FechaExpiracion; ?></th>
                        <th><?php echo $row->SB_SemestreBecado; ?></th>
                        
                    </tr>
                    <tr>
                        <?php if(($restantes <= 0) || ($row->SB_FechaExpiracion < $hoy)):?>
                            <?php if($row->SB_FechaExpiracion < $hoy): ?>
                                <th class="text text-center text-danger" colspan="6">La Fecha de Expiración de sus becas fue el  "<?php echo date("d/m/Y",strtotime($row->SB_FechaExpiracion)); ?>"</th>
                                </tr>
                                <tr>
                                <th class="text text-center text-danger" colspan="6">El alumno Ocupo <?php echo $row->SB_ImpresasBecado; ?> becas</th>
                            <?php elseif($restantes <= 0): ?>
                                <th class="text text-center text-danger" colspan="6">El alumno Ocupo <?php echo $row->SB_ImpresasBecado; ?> becas</th>
                            <?php endif; ?>
                        <?php else: ?>
                        <th colspan="6">
                            <form class="form-horizontal" action="<?php echo base_url('operario/resultados/impresion'); ?>" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="text" class="form-control input-lg col-xs-12 text-center" placeholder="Puede Imprimir maximo <?php echo $restantes; ?> hojas" name="impresas">
                                        <input type="hidden"  name="matricula" value="<?php echo $row->SB_MatriculaBecado; ?>">

                                    </div>
                                    <br>
                                    <div class="col-xs-10 col-xs-offset-1">
                                        <br>
                                        <button type="submit" class="btn btn-primary form-control btn-lg">Ingresar <i class="fa fa-print"></i></button>
                                    </div>
                                </div>
                            </form>
                        </th>
                    <?php endif; ?>
                    </tr>
                    <?php
                        endforeach;
            }
            else{
                redirect('index.php/error/error_801', 'refresh');
            }
        ?>          
                    </table>
                </div>
    </div>
</div>


   
      
      <br />
      
    </div>
  </div>
</div>

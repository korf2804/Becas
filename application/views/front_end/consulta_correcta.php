<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
            <br /><br />
            <div class="table-responsive">
                <table class="table table-border table-condensed">
                    <?php if (!isset($query->SB_MatriculaBecado)): ?>
                        <tr class="danger">
                            <th colspan="3">Alumno</th>
                            <td colspan="4">El alumno no esta ingresado en la base de datos</td>
                        </tr>
                        <tr class="success">
                            <th colspan="2">Matricula</th>
                            <td colspan="2">Matricula no se encuentra ingresada</td>
                            <th>Rut</th>
                            <td colspan="2">RUT no se encuentra ingresado</td>
                        </tr>
                        <tr>
                            <td colspan="7" class="text-center">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/consulta">
                                    <i class="fa fa-search fa-2x pull-left"></i> Consultar Nuevamente
                                </a>
                            </td>
                        </tr>
                    <?php else: ?>
                        <tr class="active">
                            <th colspan="3">Alumno</th>
                            <td colspan="4"><?php echo $query->SB_NomBecado . ' ' . $query->SB_ApePatBecado . ' ' . $query->SB_ApeMatBecado; ?></td>
                        </tr>
                        <tr class="success">
                            <th colspan="2">Matricula</th>
                            <td colspan="2"><?php echo $query->SB_MatriculaBecado; ?></td>
                            <th>Rut</th>
                            <td colspan="2"><?php echo $query->SB_RutBecado; ?></td>
                        </tr>
                        <tr class="danger">
                            <th>Carrera</th>
                            <th>Tipo</th>
                            <th>Becas Ingresadas</th>
                            <th>Becas Ocupadas</th>
                            <th>Restantes</th>
                            <th>Semestre</th>
                            <th>Expiración</th>
                        </tr>
                        <tr class="warning">
                            <td rowspan="2" class="text-center"><?php echo $query->SB_CarreraBecado; ?></td>
                            <td>Fotocopia</td>
                            <td><?php echo $query->SB_BecasFotocopia; ?></td>
                            <?php
                            $restantesFotocopia = $query->SB_BecasFotocopia - $query->SB_FotocopiadasBecado;
                            $restantesImpresion = $query->SB_BecasImpresion - $query->SB_ImpresasBecado;
                            ?>
                            <td><?php echo $query->SB_FotocopiadasBecado; ?></td>
                            <td><?php echo $restantesFotocopia; ?></td>
                            <td rowspan="2" class="text-center"><?php echo $query->SB_SemestreBecado; ?></td>
                            <td rowspan="2" class="text-center"><?php echo $query->SB_FechaExpiracion; ?></td>
                        </tr>
                        <tr class="warning">
                            <td>Impresión</td>
                            <td><?php echo $query->SB_BecasImpresion; ?></td>
                            <td><?php echo $query->SB_ImpresasBecado; ?></td>
                            <td><?php echo $restantesImpresion; ?></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="text-center">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>index.php/consulta">
                                    <i class="fa fa-search fa-2x pull-left"></i> Consultar Nuevamente
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <h2 class="post-title">Seccion Noticias:</h2>
                <h4 class="text-success">Fecha: <?php echo $fecha; ?></h4>
            </div>
            <?php foreach($result->result() as $row): ?>
            <div class="post-preview">
            	<h2 class="section-heading"><?php echo $row->SB_NomArticulo; ?></h2>
            	<p class="subheading text-justify"><?php echo $row->SB_ContArticulo ?></p>
            	<span class="meta">escrito el <?php echo $row->SB_FechaArticulo; ?></span>
            </div>
            <hr />
        <?php endforeach; ?>
        </div>
    </div>

    <hr>
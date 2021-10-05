<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo base_url(); ?>assets/img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?php echo $detalle->nombre_articulo; ?></h1>
                    <h2 class="subheading"><?php echo $detalle->fecha_articulo; ?> </h2>
                    <span class="meta">Escrito por <a href="#">(nombre escrito)</a> En <?php echo $detalle->fecha_articulo; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
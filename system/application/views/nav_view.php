<div class="row" align="center" style="background:#ccc;"><strong><h3><?php echo strtoupper($_SERVER['HTTP_HOST']) ; ?></h3></strong></div>
<section class="row">
    <header>        
        <div class="logo col_7 col">
            <img src="<?php echo base_url();?>imagenes/TURISMO_WEB.png" alt="Logo de Turismo" />
        </div><!-- logo col_7 -->        
        <nav class="col_9 col">
            <ul>
                <li><a href="<?php echo base_url();?>">Inicio</a></li>
                <li><a href="<?php echo base_url();?>boletin_controller/operacion">Operación</a></li>
                <li class="last"><a href="<?php echo base_url();?>boletin_controller/administracion">Administración</a></li>
            </ul>
        </nav><!-- nav col_9 -->
      <div class="clear"></div><!-- clear -->
    </header>
</section><!-- row -->

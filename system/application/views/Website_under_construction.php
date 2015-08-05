<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <h2 class="width_16 col"></h2>
    <div class="col col_9">
        <article>
            <h1>EN CONSTRUCCIÓN</h1>
            <blockquote class="right">Muy pronto estará listo!!!</blockquote>
            <p>
                <img style="width:50%;height:100%" src="<?php echo base_url();?>imagenes/Website_under_construction.png" alt="Website_under_construction" />
            </p>
        </article>  
    </div><!-- col_9 -->
  <div class="col col_7">
        <article>
            <h2>Menú de Operaciónes</h2>
            <ul>
                <li><a href="<?php echo base_url();?>boletin_controller/seguimiento">Registrar un Seguimiento</a></li> 
                <li><a href="<?php echo base_url();?>boletin_controller/listado_boletines">Bitácora de Seguimientos</a></li>
                <li><a href="<?php echo base_url();?>boletin_controller/estadisticas2">Gráficas Medios Escritos</a></li>
                <li><a href="<?php echo base_url();?>boletin_controller/estadisticas3">Gráficas Medios Electrónicos</a></li>
            </ul>   
            <div class="clear" style="height:20px;"></div>            
        </article>
    </div><!-- col_7 -->
    
    <div class="col_16 col">
        <a class="documentation"><script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f=new Date();
document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script></a>
    </div><!-- col_16 -->
</section><!-- row -->
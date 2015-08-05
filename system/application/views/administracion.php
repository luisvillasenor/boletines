<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <h2 class="width_16 col"></h2>
    <div class="col col_11">
        <article>
            <h1>Gestión de Medios Escritos, Electrónicos y Comunicados</h1>
            <blockquote class="right">Acciónes:<br />
                <ul>
                    <li>Agregar</li>
                    <li>Actualizar</li>
                </ul>
            </blockquote>
            <p>Esta sección permite gestionar tanto a los medios escritos como a los electrónicos.</p>
            <p>Si selecciona del menú la opción Medios Escritos ó Medios Electrónicos, Ud. podrá realizar una de las acciones 
                de ésta sección.</p>
            <p>Las acciones que ejecute, se verán reflejados en la sección de <strong><a href="<?php echo base_url();?>boletin_controller/operacion"/>Operación</a></strong>.</p>
        </article>  
    </div><!-- col_9 -->
    <div class="col col_5">
        <!-- MENU ADMINISTRACION -->
        <?php include "system/application/views/menu_administracion.php";?>
    </div><!-- col_7 -->    
    <div class="col_16 col">
        <a class="documentation"><script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f=new Date();
document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script></a>
    </div><!-- col_16 -->
</section><!-- row -->

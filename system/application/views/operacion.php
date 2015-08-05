<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <!-- MENU OPERACIONES -->
    <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_16">
        <article>
            <h1>Gestión de Operaciones</h1>
            <blockquote class="right">Operaciones:<br />
                <ul>
                    <li>Registrar un Seguimiento</li>
                    <li>Bitácora de Seguimientos</li>
                    <li>Resultados</li>
                    <li>Gestión de Evidencias</li>
                </ul>
            </blockquote>
            <p>En ésta sección Ud. podrá llevar el seguimiento de los Boletines que publique en Medios Escritos y Electrónicos.</p>
            <p>El seguimiento se realiza por el número de boletin generado. Con dicho número de boletin podra darle seguimiento y saber si 
                fue publicado en algún medio, en que secciones fue publicado, si fue positiva ó negativa así como agregar la evidencia
                que haya generado de ese boletín.</p>
            <p>También podra listar y ver todos los boletines registrados con fecha de publicación.
                Finalmente los resultados del seguimiento el Sistema se los mostrará en forma de tabla y gráfica.</p>            
        </article>  
    </div><!-- col_9 -->
    
    
    <div class="col_16 col">
        <a class="documentation"><script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f=new Date();
document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script></a>
    </div><!-- col_16 -->
</section><!-- row -->


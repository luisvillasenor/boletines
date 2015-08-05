<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <!-- MENU OPERACIONES -->
    <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_16">
        <article>
            <h1>BITÁCORA DE SEGUIMIENTOS ESCRITOS </h1>
            <?php include "system/application/views/menu_filtros_medios_escritos.php";?>
            <table id="customers"> 
                    <thead>
                    Se encontraron <?php echo $total_rows;?> registros en total.
                    </thead>
                        <tr>
                            <th>ID</th>
                            <th>Comunicado</th>
                            <th>Nombre del medio</th>
                            <th>Fecha Publicación</th>
                            <th>Página principal</th>                            
                            <th>Interiores</th>                      
                            <th>Columna</th>
                            <th>Foto</th>
                            <th>Texto</th>
                            <th>Calificación</th>
                            <th>Comentarios</th>
                        </tr>        
                    <tbody align="center">                    
                    </tbody>
            </table>             
        </article> 
        <hr>         
    </div><!-- col_14 -->    
</section><!-- row -->
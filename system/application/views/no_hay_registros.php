<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <!-- MENU OPERACIONES -->
    <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_16">
        <article>
            <h1>BITÁCORA DE SEGUIMIENTOS ELECTRÓNICOS </h1>
            <?php include "system/application/views/menu_filtros_medios_electronicos.php";?>
            <table id="customers"> 
                    <thead>
                    Se encontraron <?php echo $total_rows;?> registros en total.
                    </thead>
                        <tr>
                            <th>ID</th>
                            <th>Comunicado</th>
                            <th>Nombre del medio</th>
                            <th>Fecha Publicación</th>
                            <th>Teasser</th>                            
                            <th>Nota</th>                      
                            <th>Capsula</th>
                            <th>Corte Informativo</th>
                            <th>Audio</th>
                            <th>Imagen</th>
                            <th>Calificacion</th>
                            <th>Comentarios</th>
                        </tr>
        
                    <tbody align="center">
                    
                    </tbody>
            </table> 
    
            
        </article> 
        <hr> 
        
    </div><!-- col_14 -->
  
    
</section><!-- row -->
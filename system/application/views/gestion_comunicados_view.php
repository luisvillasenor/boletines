<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <h2 class="width_16 col"></h2>
    <div class="col col_11">
        <article>
        <h1>Gestión de Comunicados</h1>
        <fieldset>Número/Comunicado<br>
            <form name="agregar_comunicado" id="agregar_comunicado" method="post" action="<?php echo base_url('boletin_controller/agregar_boletin');?>" onsubmit= "return validar_formulario3()">
                <input name="numero_boletin" type="text" id="numero_boletin"/>
                <input name="titulo_boletin" type="text" id="titulo_boletin"/>
                <input type="submit" value="Agregar Nuevo"/>
            </form>
        </fieldset>
        </br>
        <fieldset>            
        <table id="registros_recorridos">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Comunicado</th>                    
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php foreach($get_all_comunicados as $item_combo_recorridos):?>
                <form name="actualizar_boletin" id="actualizar_boletin" action="<?php echo base_url('boletin_controller/actualizar_boletin');?>" method="post">
                    <tr>
                        <input name="id" id="id" type="hidden" value="<?php echo $item_combo_recorridos->id;?>"/>                        
                        <td><input name="numero_boletin" id="numero_boletin" type="text" value="<?php echo $item_combo_recorridos->numero_boletin;?>"/></td>
                        <td><input name="titulo_boletin" id="titulo_boletin" type="text" value="<?php echo $item_combo_recorridos->titulo_boletin;?>"/></td>                        
                        <td><button type="submit" value="Submit"><img src="http://10.1.17.10/citranvias/system/application/views/edit.png" alt="submit"></button></td>
                    </tr>
                </form>
                <?php endforeach; ?>
            </tbody>
        </table>
        <hr>
        <p><?php echo $links; ?></p>
        </fieldset>
        </article>  
    </div><!-- col_9 -->
    <div class="col col_5">
        <!-- MENU ADMINISTRACION -->
        <?php include "system/application/views/menu_administracion.php";?>
    </div><!-- col_7 -->
</section><!-- row -->
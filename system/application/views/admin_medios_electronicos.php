<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
    <h2 class="width_16 col"></h2>
    <div class="col col_11">
        <article>
           <h1>Gestión de Medios Electrónicos</h1>
                

<!-- GESTION DE RECORRIDOS -->
          
        <div class="agregarnuevo">
        <fieldset>Agregar Nuevo Medio Electrónico<br>
            <form name="agregar_medio_electronico" id="" method="post" action="agregar_medio_electronico" onsubmit= "return validar_formulario2()">
                <input name="nombremedio" type="text" id="nombremedio"/></br></br>
                    <label>Alcance: </label>
                    <input type="radio" name="alcance" value="1">Estatal
                    <input type="radio" name="alcance" value="2">Nacional
                <input type="submit" value="Agregar Nuevo"/>
            </form>
        </fieldset>
        <hr>
        </div>
        <p>
        <div class="catalogolistado">        
            <table class="ui-state-highlight" id="registros_recorridos">
                <thead>
                    <tr>
                        <th>Medio Electrónico</th>
                        <th>Alcance</th>
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php foreach($get_electronicos as $item_combo_recorridos):?>
                    <form name="actualizar_medio" id="actualizar_medio" action="actualizar_medio" method="post">
                        <tr>
                            <input name="id" id="id" type="hidden" value="<?php echo $item_combo_recorridos->id;?>"/>
                            <input name="tipomedio" id="tipomedio" type="hidden" value="<?php echo $item_combo_recorridos->tipomedio;?>"/>
                            <td><input name="nombremedio" id="nombremedio" type="text" value="<?php echo $item_combo_recorridos->nombremedio;?>"/></td>
                            <td>
                                <?php switch ($item_combo_recorridos->alcance) {
                                    case '1':?>
                                        <input type="radio" name="alcance" value="1" checked="checked">Estatal
                                        <input type="radio" name="alcance" value="2">Nacional
                                <?php   break;
                                    case '2':?>
                                        <input type="radio" name="alcance" value="1">Estatal
                                        <input type="radio" name="alcance" value="2" checked="checked">Nacional
                                <?php   break;                                    
                                    default:?>
                                        <input type="radio" name="alcance" value="1">Estatal
                                        <input type="radio" name="alcance" value="2">Nacional
                                <?php   break; } ?>
                                
                            </td>
                            <td>
                                <button type="submit" value="Submit">
                                    <img src="http://10.1.17.10/citranvias/system/application/views/edit.png" alt="submit">
                                </button>
                            </td>
                        </tr>
                    </form>
                    <?php endforeach; ?>
                </tbody>
            </table>        
        </div>
             
        </article>

    </div><!-- col_9 -->

    <div class="col col_5">
        <!-- MENU ADMINISTRACION -->
        <?php include "system/application/views/menu_administracion.php";?>
    </div><!-- col_7 -->
  
    
  
</section><!-- row -->


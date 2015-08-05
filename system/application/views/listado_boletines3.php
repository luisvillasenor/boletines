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
                    <?php if ($nombremedio == '0') {?>
                        <small><a href="<?php echo base_url();?>boletin_controller/exporta_seg_electronicos"><img style="width:32px" src="<?php echo base_url();?>imagenes/exportexcel.png"></a></small>
                      <?php }else{ ?>
                        <small><a href="<?php echo base_url();?>boletin_controller/exporta_seg_electronicos_por_/<?php echo $nombremedio;?>"><img style="width:32px" src="<?php echo base_url();?>imagenes/exportexcel.png"></a></small>
                    <?php }
                    ?>
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
                    <?php foreach($combo_lista_el as $item_combo_lista):?>
                        

                        <tr>
                            <td><form action="<?php echo base_url();?>boletin_controller/editar_seguimiento_electronicos" method="post">
                                  <input name="id" id="id" type="hidden" value="<?php echo $item_combo_lista->id; ?>"/>
                                  <button type="submit"><?php echo $item_combo_lista->id; ?></button>
                                </form>
                            </td>                        
                            <?php foreach($combo_boletines as $item_boletin):?>
                                <?php if ($item_boletin->numero_boletin == $item_combo_lista->numero_boletin) { ?>
                                    <td><a href="<?php echo base_url();?>boletin_controller/seguimiento_individual_el/<?php echo $item_boletin->numero_boletin; ?>"><?php echo $item_boletin->titulo_boletin; ?></a></td>
                                <?php } ?>
                            <?php endforeach; ?>
                            <td>
                                <?php foreach ($combo_medios as $item_medio):?>
                                        <?php if ($item_medio->id == $item_combo_lista->nombremedio) { ?>
                                            <?php echo $item_medio->nombremedio; ?><br>
                                            (
                                                    <?php 
                                                        switch ($item_medio->alcance) {
                                                            case '0':?>
                                                              --
                                                        <?php break;
                                                            case '1':?>
                                                              Estatal
                                                        <?php break;
                                                            case '2':?>
                                                              Nacional
                                                        <?php        break;
                                                        }
                                                    ?>
                                            )
                                        <?php } ?>                                                                
                                <?php endforeach; ?>
                            </td>
                            <td><?php echo $item_combo_lista->fecha; ?></td>
                            <?php switch ($item_combo_lista->teasser){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?> 
                            <?php switch ($item_combo_lista->nota){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?>
                            <?php switch ($item_combo_lista->capsula){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?>
                            <?php switch ($item_combo_lista->corteinfo){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?>
                            <?php switch ($item_combo_lista->audio){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?>
                            <?php switch ($item_combo_lista->imagen){
                                case 0:?>  
                                    <td></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/tick.png"></td>
                                    <?php break;
                            }?>
                            <?php switch ($item_combo_lista->calificacion){
                                case 0:?>  
                                    <td><img src="<?php echo base_url();?>imagenes/icon-16-deny.png" title="Calificación NEGATIVA"></td>
                                    <?php break;

                                case 1: ?>
                                    <td><img src="<?php echo base_url();?>imagenes/new.png" title="Calificación POSITIVA"></td>
                                    <?php break;
                            }?>
                            <td><?php echo $item_combo_lista->comentarios; ?></td>
                        </tr>
                        
                    <?php endforeach; ?>
                    </tbody>
            </table> 
    
            
        </article> 
        <hr> 
        <p><?php echo $links; ?></p>
    </div><!-- col_14 -->
  
    
</section><!-- row -->
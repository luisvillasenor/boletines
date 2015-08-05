<!-- this section shows you most of the styled elements from the general stylesheet 
<div class="row" align="center" style="background:#ccc;"><strong><h3>MÓDULO EN DESARROLLO</h3></strong></div>
-->
<section class="row">
    <!-- MENU OPERACIONES -->
    <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <h3 class="width_16 col">
        <?php foreach($get_boletin as $item_combo_lista):?>
        <?php foreach($combo_boletines as $item_boletin):?>
        <?php if ($item_boletin->numero_boletin == $item_combo_lista->numero_boletin) { ?>
          <blockquote>
              <?php echo $item_boletin->titulo_boletin; ?>
          </blockquote>
        <?php } ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
    </h3>
    <div class="col col_16">
        Registros encontrados: <?php echo $record_count_seg; ?>
        <article>            
                <table id="customers"> 
                    <thead>
                        <h3>Historial de Seguimientos <a href="<?php echo base_url();?>boletin_controller/seguimiento_individual_el_pdf/<?php echo $item_boletin->numero_boletin;?>"><img style="width:32px" src="<?php echo base_url();?>imagenes/LogoPDF.png"></a></h3>
                    </thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Medio</th>
                            <th>Teasser</th>                            
                            <th>Nota</th>                      
                            <th>Capsula</th>
                            <th>Corte Informativo</th>
                            <th>Audio</th>
                            <th>Imagen</th>
                            <th>Calificacion</th>
                            <th>Comentarios</th>
                            <th>Evidencias</th>
                        </tr>                    
                    <tbody align="center">
                        <?php foreach($get_seg_ind as $item_combo_lista):?>
                        <tr>
                        <td><?php echo $item_combo_lista->fecha; ?></td>
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
                        <td>
                            <?php foreach ($get_all_evidencias_electronicos as $item_evidencia):?>
                                    <?php if ($item_evidencia->idSegEle == $item_combo_lista->id) { ?>
                                        <?php if ($item_evidencia->ext == '.pdf') { ?>                                            
                                                
                                                  <p>Archivo: <?php echo $item_evidencia->img_name;?><?php echo $item_evidencia->ext;?></p>
                                                                                                   
                                                
                                          <?php }else{ ?>
                                                
                                                  <p>Archivo: <?php echo $item_evidencia->img_name;?><?php echo $item_evidencia->ext;?></p>

                                                
                                          <?php } ?> 
                                    <?php } ?>                                                                
                            <?php endforeach; ?>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </p>
        </article>  
    </div><!-- col_16 -->
</section><!-- row -->
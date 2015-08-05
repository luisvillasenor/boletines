<section class="row">
  <!-- MENU OPERACIONES -->
  <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_9">
        <article>
          <h1>ACTUALIZAR SEGUIMIENTO</h1>
            <form name="actualizar_seguimiento_electronico" id="actualizar_seguimiento_electronico" method="post" action="<?php echo base_url();?>boletin_controller/actualizar_seguimiento_electronico"> 
              <?php foreach($combo_editar_electronicos as $item_combo_editar_electronicos):?> 

              <fieldset>  
                <label>ID Seguimiento: </label><?php echo $item_combo_editar_electronicos->id ;?><br><br>
                <input type="hidden" name="id" id="id" value="<?php echo $item_combo_editar_electronicos->id; ?>"/>
                <input type="hidden" name="numero_boletin" id="numero_boletin" value="<?php echo $item_combo_editar_electronicos->numero_boletin; ?>"/>
                <label>Comunicado: </label>    
                  <?php foreach($combo_boletines as $item_combo_boletines):?>
                    <?php if($item_combo_editar_electronicos->numero_boletin == $item_combo_boletines->numero_boletin){?>
                      <span><?php echo $item_combo_editar_electronicos->numero_boletin.'.- '.$item_combo_boletines->titulo_boletin;?></span>
                      <?php }?>          
                  <?php endforeach; ?>
                </br><br>
                <label>Medio Eletrónico:</label>
                <select name="nombremedio" class="validate[required]">
                  <?php foreach($combo_medios_electronicos as $item_combo_electronicos):?>
                    <?php if($item_combo_editar_electronicos->nombremedio == $item_combo_electronicos->id){?>
                      <option selected="selected" value="<?php echo $item_combo_electronicos->id;?>"><?php echo $item_combo_electronicos->nombremedio;?>( <?php                           
                              switch ($item_combo_electronicos->alcance) {
                                case '0':?>
                                  ---
                          <?php break;
                                case '1':?>
                                  Estatal
                          <?php break;
                                case '2':?>
                                  Nacional
                          <?php break;
                              }
                         ?> )</option>
                      <?php }else{?>
                      <option value="<?php echo $item_combo_electronicos->id;?>"><?php echo $item_combo_electronicos->nombremedio;?>( <?php                           
                              switch ($item_combo_electronicos->alcance) {
                                case '0':?>
                                  ---
                          <?php break;
                                case '1':?>
                                  Estatal
                          <?php break;
                                case '2':?>
                                  Nacional
                          <?php break;
                              }
                         ?> )</option>
                    <?php }?>
                  <?php endforeach; ?>
                </select>
                <br><br>
                <label>Fecha Publicación: </label>
                <input type="text" name="fecha" id="datepicker_actualizar_electronicos" size="11" maxlength="11" value="<?php echo $item_combo_editar_electronicos->fecha; ?>" />
                </br><br>
                <label>Configuración del Comunicado:</label>
                <table border="0" cellpadding="5 ">
                  <tr>
                          <th>Teasser</th>                            
                          <th>Nota</th>                      
                          <th>Capsula</th>
                          <th>Corte Informativo</th>
                          <th>Audio</th>
                          <th>Imagen</th>
                          <th>Calificación</th>
                          
                      </tr>
                  <tr>
                    <?php switch ($item_combo_editar_electronicos->teasser){
                            case 0:?>  
                                <th><input type="checkbox"  name="teasser" id="teasser"/></th>
                                <?php break;

                            case 1: ?>
                                <th><input type="checkbox" checked="checked" name="teasser" id="teasser"/></th>
                                <?php break;
                    }?> 
                    <?php switch ($item_combo_editar_electronicos->nota){
                                case 0:?>  
                                    <th><input type="checkbox"  name="nota" id="nota"/></th>
                                <?php break;
                                case 1: ?>
                                    <th><input type="checkbox" checked="checked" name="nota" id="nota"/></th>
                                <?php break;
                            }
                            ?>
                    <?php switch ($item_combo_editar_electronicos->capsula){
                        case 0:?>  
                            <th><input type="checkbox"  name="capsula" id="capsula" /></th>
                        <?php break;
                        case 1: ?>
                            <th><input type="checkbox" checked="checked" name="capsula" id="capsula" /></th>
                        <?php break;
                    }
                    ?> 
                    <?php switch ($item_combo_editar_electronicos->corteinfo){
                        case 0:?>  
                            <th><input type="checkbox"  name="corteinfo" id="corteinfo" /></th>
                        <?php break;
                        case 1: ?>
                            <th><input type="checkbox" checked="checked" name="corteinfo" id="corteinfo" /></th>
                        <?php break;
                    }
                    ?>
                    <?php switch ($item_combo_editar_electronicos->audio){
                        case 0:?>  
                            <th><input type="checkbox"  name="audio" id="audio" /></th>
                        <?php break;
                        case 1: ?>
                            <th><input type="checkbox" checked="checked" name="audio" id="audio" /></th>
                        <?php break;
                    }
                    ?>
                    <?php switch ($item_combo_editar_electronicos->imagen){
                        case 0:?>  
                            <th><input type="checkbox"  name="imagen" id="imagen" /></th>
                        <?php break;
                        case 1: ?>
                            <th><input type="checkbox" checked="checked" name="imagen" id="imagen" /></th>
                        <?php break;
                    }
                    ?>
                    <?php switch ($item_combo_editar_electronicos->calificacion){
                        case 0:?>
                            <td>
                              <input type="radio" name="calificacion" value="1"  /> Positiva<br>
                              <input type="radio" name="calificacion" value="0" checked="checked"/> Negativa
                            </td>
                        <?php break;
                        case 1: ?>
                            <td>
                              <input type="radio" name="calificacion" value="1" checked="checked"/> Positiva<br>
                              <input type="radio" name="calificacion" value="0"/> Negativa
                            </td>
                        <?php break;
                    }
                    ?> 
                    
               </tr>
               </table>
               <br><label>Comentarios </label><br>
                <textarea rows="4" cols="50" type="text" name="comentarios_el" value="<?php echo $item_combo_editar_electronicos->comentarios; ?>"><?php echo $item_combo_editar_electronicos->comentarios; ?></textarea>
               </br>
  <button type="submit" class="btn btn-default btn-sm">
    Actualizar
  </button>
      <!-- Borra el registro. Temporalmente desactivado
      <a id="opener3_<?php echo $item_combo_editar_electronicos->id; ?>">BORRAR</a>
      -->
      <!-- MODAL VIEW
      <div id="dialog3_<?php echo $item_combo_editar_electronicos->id; ?>" title="ESTA APUNTO DE BORRAR UN REGISTRO">
        <h2>Esta seguro de <b>ELIMINAR</b> el seguimiento <?php echo $item_combo_editar_electronicos->id ;?> ?</h2>
        <ul id="menu-img"> 
          <li><a id="eliminar_medio_electronicos" href="<?php echo base_url().'boletin_controller/eliminar_medio_electronicos/'.$item_combo_editar_electronicos->id;?>">Eliminar</a></li>
        </ul>        
      </div>
      <script>
        $(function() {
          $( "#dialog3_<?php echo $item_combo_editar_electronicos->id; ?>" ).dialog({
            width: 1024,                                
            autoOpen: false,
            show: {
              effect: "blind",
              duration: 1000
            },
            hide: {
              effect: "explode",
              duration: 1000
            }
          });             
          $( "#opener3_<?php echo $item_combo_editar_electronicos->id; ?>" ).click(function() {
            $( "#dialog3_<?php echo $item_combo_editar_electronicos->id; ?>" ).dialog( "open" );
          });
        });
      </script>
      MODAL VIEW -->
              <?php endforeach; ?>                
             </form>
           </article><!-- FIN SubDIV -->
  </div>
  <div class="col col_7">
  <h2>Evidencias Asociadas</h2>
  <table>
    <tbody>
      <?php foreach($get_evidencias_electronicos as $item_evid):
      if ($item_evid->ext == '.pdf') { ?>
        <tr>
          <td>
            <div style="padding:5px; border:2px solid" align="center">
              <p>Archivo: <?php echo $item_evid->img_name;?></p>
              <a href="<?php echo base_url().'evidencias/'.$item_evid->img_name.''.$item_evid->ext;?>" target="_blank">
                <img style="width:32px" src="<?php echo base_url();?>imagenes/LogoPDF.png">
              </a>
            </div>            
          </td>          
        </tr>
      <?php }else{ ?>
        <tr>
          <td>
            <div style="padding:5px; border:2px solid" align="center">
              <p>Archivo: <?php echo $item_evid->img_name;?></p>
              <div id="dialog_<?php echo $item_evid->id; ?>" title="Evidencia Asociada: <?php echo $item_evid->img_name;?> ">
              <p><?php $item_evid->id;?></p>
              <p>              
                <img style="width:100%" src="<?php echo base_url().'evidencias/'.$item_evid->img_name.''.$item_evid->ext;?>"></p>
              </div>
              <a id="opener_<?php echo $item_evid->id; ?>"><img style="width:100%" alt="Zoom" src="<?php echo base_url().'evidencias/'.$item_evid->thumb_name.''.$item_evid->ext;?>"></a>
              <script>
                $(function() {
                  $( "#dialog_<?php echo $item_evid->id; ?>" ).dialog({
                    width: 800,                                
                    autoOpen: false,
                    show: {
                      effect: "blind",
                      duration: 1000
                    },
                    hide: {
                      effect: "explode",
                      duration: 1000
                    }
                  });             
                  $( "#opener_<?php echo $item_evid->id; ?>" ).click(function() {
                    $( "#dialog_<?php echo $item_evid->id; ?>" ).dialog( "open" );
                  });
                });
              </script>
            </div>
          </td>          
        </tr>
      <?php } ?> 
      <?php endforeach; ?>
  </table>
</div>
        
    
</section><!-- row -->

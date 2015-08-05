<section class="row">
  <!-- MENU OPERACIONES -->
  <?php include "system/application/views/menu_operaciones.php";?>
<h2 class="width_16 col"></h2>
<div class="col col_9">
  <article>
    <h1>ACTUALIZAR SEGUIMIENTO</h1>
    <form name="actualizar_seguimiento_escrito" id="actualizar_seguimiento_escrito" method="post" action="actualizar_seguimiento_escrito"> 
  <?php foreach($combo_editar_escritos as $item_combo_editar_escritos):?> 
    <label>ID Seguimiento: </label><?php echo $item_combo_editar_escritos->id ;?><br><br>
    <input type="hidden" name="id" id="id" value="<?php echo $item_combo_editar_escritos->id; ?>"/>
    <input type="hidden" name="numero_boletin" id="numero_boletin" value="<?php echo $item_combo_editar_escritos->numero_boletin; ?>"/>
    <label>Comunicado: </label>    
      <?php foreach($combo_boletines as $item_combo_boletines):?>
        <?php if($item_combo_editar_escritos->numero_boletin == $item_combo_boletines->numero_boletin){?>
          <span><?php echo $item_combo_editar_escritos->numero_boletin.'.- '.$item_combo_boletines->titulo_boletin;?></span>
          <?php }?>          
      <?php endforeach; ?>
    </br><br>
    <label>Medio Escrito:</label>
    <select name="nombremedio" class="validate[required]">
      <?php foreach($combo_medios_escritos as $item_combo_escritos):?>
        <?php if($item_combo_editar_escritos->nombremedio == $item_combo_escritos->id){?>
          <option selected="selected" value="<?php echo $item_combo_escritos->id;?>"><?php echo $item_combo_escritos->nombremedio;?>( <?php                           
                              switch ($item_combo_escritos->alcance) {
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
          <option value="<?php echo $item_combo_escritos->id;?>"><?php echo $item_combo_escritos->nombremedio;?>( <?php                           
                              switch ($item_combo_escritos->alcance) {
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
    <input type="text" name="fecha" id="datepicker_actualizar_escritos2" size="11" maxlength="11" value="<?php echo $item_combo_editar_escritos->fecha; ?>" />
    </br><br>
    <label>Configuración del Comunicado:</label>
    <table border="0" cellpadding="5 ">      
      <tr>
        <th>Página principal</th>                            
        <th>Interiores</th>                      
        <th>Columna</th>
        <th>Foto</th>
        <th>Texto</th>
        <th>Calificación</th>
      </tr>
      <tr>
      <?php switch ($item_combo_editar_escritos->pp){
        case 0:?>  
          <th><input type="checkbox"  name="pp" id="pp"/></th>
        <?php break;
        case 1: ?>
          <th><input type="checkbox" checked="checked" name="pp" id="pp"/></th>
        <?php break;
      }?> 
      <?php switch ($item_combo_editar_escritos->interiores){
      case 0:?>  
      <th><input type="checkbox"  name="interiores" id="interiores"/></th>
      <?php break;
      case 1: ?>
      <th><input type="checkbox" checked="checked" name="interiores" id="interiores"/></th>
      <?php break;
      }
      ?>
      <?php switch ($item_combo_editar_escritos->columna){
      case 0:?>  
      <th><input type="checkbox"  name="columna" id="columna" /></th>
      <?php break;
      case 1: ?>
      <th><input type="checkbox" checked="checked" name="columna" id="columna" /></th>
      <?php break;
      }
      ?> 
      <?php switch ($item_combo_editar_escritos->foto){
      case 0:?>  
      <th><input type="checkbox"  name="foto" id="foto" /></th>
      <?php break;
      case 1: ?>
      <th><input type="checkbox" checked="checked" name="foto" id="foto" /></th>
      <?php break;
      }
      ?>
      <?php switch ($item_combo_editar_escritos->texto){
      case 0:?>  
      <th><input type="checkbox"  name="texto" id="texto" /></th>
      <?php break;
      case 1: ?>
      <th><input type="checkbox" checked="checked" name="texto" id="texto" /></th>
      <?php break;
      }
      ?>
      <?php switch ($item_combo_editar_escritos->calificacion){
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
    <textarea rows="4" cols="50" type="text" name="comentarios" value="<?php echo $item_combo_editar_escritos->comentarios; ?>"><?php echo $item_combo_editar_escritos->comentarios; ?></textarea>
  </br>
  <button type="submit" class="btn btn-default btn-sm">
    Actualizar
  </button>
      <!-- Borra el registro. Temporalmente desactivado 
      <a id="opener2_<?php echo $item_combo_editar_escritos->id; ?>">BORRAR</a>
      -->
      <!-- MODAL VIEW -->
      <div class="ui-dialog" id="dialog2_<?php echo $item_combo_editar_escritos->id; ?>" title="Eliminar Seguimiento">
        <h2>Esta seguro de <b>ELIMINAR</b> el seguimiento <?php echo $item_combo_editar_escritos->id ;?> ?</h2>
        <ul id="menu-img"> 
          <li><a id="eliminar_medio_escrito" href="<?php echo base_url().'boletin_controller/eliminar_medio_escrito/'.$item_combo_editar_escritos->id;?>">Eliminar</a></li>
        </ul>

      </div>
      <script>
        $(function() {
          $( "#dialog2_<?php echo $item_combo_editar_escritos->id; ?>" ).dialog({
            width: 600,                                
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
          $( "#opener2_<?php echo $item_combo_editar_escritos->id; ?>" ).click(function() {
            $( "#dialog2_<?php echo $item_combo_editar_escritos->id; ?>" ).dialog( "open" );
          });
        });
      </script>
      <!-- MODAL VIEW -->
  <?php endforeach; ?>
  </form>
  </article>
</div>
<div class="col col_7">
  <h2>Evidencias Asociadas</h2>
  <table>
    <tbody>
      <?php foreach($get_evidencias_escritos as $item_evid):
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

<section class="row">
    <h2 class="width_16 col"></h2>


        <div>  
            <form name="actualizar_seguimiento_escrito" id="actualizar_seguimiento_escrito" method="post" action="actualizar_seguimiento_escrito"> 
              <?php foreach($combo_editar_escritos as $item_combo_editar_escritos):?> 
              <input type="hidden" name="publicado" id="publicado" value="<?php echo $item_combo_editar_escritos->publicado; ?>"/><br>

              <fieldset>  
                ID : <?php echo $item_combo_editar_escritos->id ;?><br>
                <input type="hidden" name="id" id="id" value="<?php echo $item_combo_editar_escritos->id; ?>"/><br>
                Número Boletín:

                <select name="numero_boletin" class="validate[required]">
                  <?php foreach($combo_boletines as $item_combo_boletines):?>

                  <?php if($item_combo_editar_escritos->numero_boletin == $item_combo_boletines->numero_boletin){?>

                  <option selected="selected" value="<?php echo $item_combo_editar_escritos->numero_boletin;?>"><?php echo $item_combo_editar_escritos->numero_boletin;?></option>

                  <?php }else{?>

                  <option value="<?php echo $item_combo_boletines->numero_boletin;?>"><?php echo $item_combo_boletines->numero_boletin;?></option>

                  <?php }?>
                    
                  <?php endforeach; ?>
                </select><br>




                Medio Escrito:
                <select name="nombremedio" class="validate[required]">
                  <?php foreach($combo_medios_escritos as $item_combo_escritos):?>

                  <?php if($item_combo_editar_escritos->nombremedio == $item_combo_escritos->nombremedio){?>

                  <option selected="selected" value="<?php echo $item_combo_escritos->nombremedio;?>"><?php echo $item_combo_escritos->nombremedio;?></option>

                  <?php }else{?>

                  <option value="<?php echo $item_combo_escritos->nombremedio;?>"><?php echo $item_combo_escritos->nombremedio;?></option>

                  <?php }?>
                    
                  <?php endforeach; ?>
                </select>
                <table border="0" cellpadding="5 ">
                  <tr>
                    <th>Página principal</th>                            
                    <th>Interiores</th>                      
                    <th>Columna</th>
                    <th>Foto</th>
                    <th>Texto</th>
                    <th>Calificación</th>
                    <td>Evidencia</td>
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
                    <td>
                      <input type="text" value="<?php echo $item_combo_editar_escritos->Evidencia; ?>" size="30" name="Evidencia" id="Evidencia"/><br>
                      <input type="file" value=""  name="Evidencia" id="Evidencia"/>
                    </td>
               </tr>
               </table>

               <table border="0" cellpadding="10 ">
               <tr>
                 <td><span class="contenedores"> Fecha:<span>
                 <input type="text" name="fecha" id="datepicker_actualizar_escritos" size="11" maxlength="11" value="<?php echo $item_combo_editar_escritos->fecha; ?>" /></td>   
                 
                 <td><input name="editar_escritos" type="submit" id="editar_escritos" value="Actualizar"/></td>
               </tr>
           </table>
                  <div id="comentariobox">    
                      <center>Observaciones:<br>
                      <textarea name="comentarios" id="comentarios" cols="60" rows="3"> <?php echo $item_combo_editar_escritos->comentarios; ?> </textarea></center>
                  </div>
              </fieldset>  
                    
                    

              <?php endforeach; ?>                
             </form>
           </div><!-- FIN SubDIV -->
        
        
</section><!-- row -->



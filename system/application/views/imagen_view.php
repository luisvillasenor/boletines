<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
  <!-- MENU OPERACIONES -->
  <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <?php foreach($get_one as $item):?>
    <div class="col col_6">        
        <article>
           <h1>Reasignar evidencia a Seguimiento(s)</h1>
           <h4 class="error"><?php //echo $error;?></h4>
            <?php echo form_open_multipart('upload/reasignar');?>
              <label>idSegEle</label><input type="text" name="idSegEle" value="<?php echo $item->idSegEle;?>"></br></br>
              <label>idSegEsc</label><input type="text" name="idSegEsc" value="<?php echo $item->idSegEsc;?>"></br></br>
              <input type="hidden" name="id" id="id" value="<?php echo $item->id;?>">
              <?php switch ($item->status) {
                    case '0': ?>
                      <input type="radio" name="status" value="0" checked>Desactivar
                      <br>
                      <input type="radio" name="status" value="1">Activar
                      <br>
                <?php break;
                    case '1': ?>
                      <input type="radio" name="status" value="0">Desactivar
                      <br>
                      <input type="radio" name="status" value="1" checked>Activar
                      <br>
                <?php break;
                  } ?>
                  <br>
              <input type="submit" value="Salvar" name="reasignar" />
            </form>
        </article>        
        
    </div><!-- col_11 -->
    <div class="col col_10">
      <article>          
           <table>
              <thead>
                <th>Evidencia</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div style="padding:5px; border:2px solid" align="center">
                      <h3>ID: <?php echo $item->id;?> </h3>
                      <h3>Nombre: 
                        <?php echo $item->img_name;?> 
                        <?php
                          switch ($item->status) {
                            case '0': ?>
                              (Desactiva)
                        <?php break;
                            case '1': ?>
                              (Activa)
                        <?php break; } ?>
                      </h3>                    
                      <a href="<?php echo base_url().'evidencias/'.$item->img_name.''.$item->ext;?>" target="_blank">
                        <img style="width:32px" src="<?php echo base_url();?>imagenes/LogoPDF.png">
                      </a>
                    </div> 
                  </td>
                </tr>
              </tbody>
           </table>
        </article>        
    </div><!-- col_7 --> 
    <?php endforeach; ?>
</section><!-- row -->

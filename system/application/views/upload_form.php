<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
  <!-- MENU OPERACIONES -->
  <?php include "system/application/views/menu_operaciones.php";?>
    <h2 class="width_16 col"></h2>
    <div class="col col_14">
        <article>
           <h1>Cargar Nueva Evidencias</h1>
      		 <h4 class="error"><?php //echo $errors;?></h4>
      		 <blockquote class="right">
              Configuración:
              <ul>
                <li>Tipos: gif|jpg|png|PDF</li>
                <li>Tamaño máximo: 10MB</li>
              </ul>
              <small>Cualquier duda comuniquese con el Depto. de Informática.</small>
            </blockquote>
      			<?php echo form_open_multipart('upload/do_upload');?>
              <label>ID Seguimiento <strong>Escrito</strong> (idSegEsc)</label>
              <select name="idSegEsc">
                <option></option>
                <?php foreach($get_for_menu_esc as $item_menu_esc):?>
                  <option value="<?php echo $item_menu_esc->id;?>"><?php echo $item_menu_esc->id;?></option>
                <?php endforeach; ?>
              </select> 
              <br><br>
              <label>ID Seguimiento <strong>Electronico</strong> (idSegEle)</label>
              <select name="idSegEle">
                <option></option>
                <?php foreach($get_for_menu_ele as $item_menu_ele):?>
                  <option value="<?php echo $item_menu_ele->id;?>"><?php echo $item_menu_ele->id;?></option>
                <?php endforeach; ?>
              </select> 
              <br><br>              
      				<input type="file" name="userfile" size="40" />
      				<br /><br />
      				<input type="submit" value="Cargar" name="upload" />
      			</form>            
        </article>
    </div><!-- col_11 -->    
    <h2 class="width_16 col"></h2>
    <h1 class="width_16 col">LISTADO DE EVIDENCIAS</h1>
    <div class="col col_16">
    	<article>
           <h3>Archivo / idSegEle / idSegEsc / Status</h3>
           <header class="header">            
           		<?php foreach($get_imagenes as $item):
              if ($item->ext == '.pdf') { ?>
              <nav class="nav col_5 col">
           			<ul class="ul">
           				<li class="li">
                    <a href="<?php echo base_url().'upload/imagen/'.$item->img_name;?>"><img style="width:32px" src="<?php echo base_url();?>imagenes/LogoPDF.png">
                      <br><?php echo $item->img_name;?> / <?php echo $item->idSegEle;?> / <?php echo $item->idSegEsc;?>
                          <?php switch ($item->status) {
                                case '0': ?>
                                    / Desactivo
                          <?php break;
                                case '1': ?>
                                    / Activo
                          <?php break; } ?>
                    </a>
                  </li>
           			</ul>
              </nav>
              <?php }else{ ?>
              <nav class="nav col_5 col">
                <ul class="ul">
                  <li class="li">
                    <a href="<?php echo base_url().'upload/imagen/'.$item->img_name;?>"><img alt="uploaded image" src="<?php echo base_url().'evidencias/'.$item->thumb_name.''.$item->ext;?>">
                      <br><?php echo $item->img_name;?> / <?php echo $item->idSegEle;?> / <?php echo $item->idSegEsc;?>
                          <?php switch ($item->status) {
                                case '0': ?>
                                    / Desactivo
                          <?php break;
                                case '1': ?>
                                    / Activo
                          <?php break; } ?>
                    </a>
                  </li>
                </ul>
              </nav>

              <?php } ?>
				      <?php endforeach; ?>            
          </header>           		
        </article>
    </div>
</section><!-- row -->
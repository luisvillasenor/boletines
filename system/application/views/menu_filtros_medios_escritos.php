
<div class="width_16 col">
  <div class="navbar">  
    <div class="navbar-inner">
        <a class="brand"></a>
        <ul class="nav">  
          <div class="controls controls-row">
              <div class="span4">
                <li>                
                  <?php $atributos = array('class' => 'navbar-form pull-left','name' => 'rango'); 
                      echo form_open(site_url().'boletin_controller/listado_boletines2', $atributos); ?>                    
                      <select name="nombremedio" id="nombremedio" onchange="this.form.submit()">
                        <option>Filtro por Medios Escritos</option>
                          <?php foreach ($combo_medios as $item_medio ) :?>                      
                            <option value="<?php echo $item_medio->id;?>">
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
                            </option>
                          <?php endforeach; ?>
                      </select>
                  <?php echo form_close(); ?>
                </li>
              </div>
          </div>
        </ul>      
    </div>  
  </div>
</div>

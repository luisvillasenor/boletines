<!-- this section shows you most of the styled elements from the general stylesheet -->
<section class="row">
	<!-- MENU ADMINISTRACION -->
    <?php include "system/application/views/menu_operaciones.php";?>	
    <h2 class="width_16 col"></h2>
    <div class="col col_14">
        <article>
           <h1>Su archivo se cargo con éxito.</h1>
		    <div class="" id="recorridobox">        
		        <div class="agregarnuevo">
		        <fieldset><br>
				<img src="<?php echo base_url().'evidencias/'.$upload_data['raw_name'].$upload_data['file_ext'];?>">
				<img src="<?php echo base_url(). './evidencias/' . $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];?>">
		        </fieldset>
		        </div>
		    </div>            
        </article>  
    </div><!-- col_11 -->    
</section><!-- row -->

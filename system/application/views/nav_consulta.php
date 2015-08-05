<section class="row">
    <!-- MENU OPERACIONES -->
    <?php include "system/application/views/menu_operaciones.php";?>
<h2 class="width_16 col"></h2>
<div class="col col_14">
<h2>Seleccione un PERIODO de fechas. (inicial y final)</h2>
    <form name="" id="" method="post" action="estadisticas2">
        <label><a id="vertodo" href="<?php echo base_url();?>boletin_controller/estadisticas">Ver Todo</a></label>
        <label>Fecha Inicial:</label>
        <input name="f_ini" id="f_ini" >
        <label>Fecha Final:</label>
        <input name="f_fin" id="f_fin" >
        <button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon"></span> Consultar
        </button>
    </form>
</div>

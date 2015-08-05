<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=seguimientos_escritos.xls");
?>
<html>
<head>
    <div>
        <table border="1">
            <th>ID</th>
            <th>NoComunicado</th>
            <th>Comunicado</th>
            <th>Medio</th>
            <th>FechaPublicacion</th>
            <th>PaginaPrincipal</th>
            <th>Interior</th>
            <th>Columna</th>
            <th>Foto</th>
            <th>Texto</th>
            <th>Calificacion</th>
            <th>Comentarios</th>


            <?php foreach($combo_lista as $item_conteo):?>		
            <tr align="center">
                <td><?php echo $item_conteo->id; ?></td>
                <td><?php echo $item_conteo->numero_boletin; ?></td>
                <td></td>
                <td><?php echo $item_conteo->nombremedio; ?></td>
                <td><?php echo $item_conteo->fecha; ?></td>
                <td><?php echo $item_conteo->pp; ?></td>
                <td><?php echo $item_conteo->interiores; ?></td>
                <td><?php echo $item_conteo->columna; ?></td>
                <td><?php echo $item_conteo->foto; ?></td>
                <td><?php echo $item_conteo->texto; ?></td>
                <td><?php echo $item_conteo->calificacion; ?></td>
                <td><?php echo $item_conteo->comentarios; ?></td>
            </tr>		
            <?php endforeach;?>

        </table>
  </div>
</body>
</html>
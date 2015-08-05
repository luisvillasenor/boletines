<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=seguimientos_electronicos.xls");
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
            <th>Teasser</th>
            <th>Nota</th>
            <th>Capsula</th>
            <th>CorteInformativo</th>
            <th>Audio</th>
            <th>Imagen</th>
            <th>Calificacion</th>
            <th>Comentarios</th>


            <?php foreach($combo_lista_el as $item_conteo):?>		
            <tr align="center">
                <td><?php echo $item_conteo->id; ?></td>
                <td><?php echo $item_conteo->numero_boletin; ?></td>
                <td></td>
                <td><?php echo $item_conteo->nombremedio; ?></td>
                <td><?php echo $item_conteo->fecha; ?></td>
                <td><?php echo $item_conteo->teasser; ?></td>
                <td><?php echo $item_conteo->nota; ?></td>
                <td><?php echo $item_conteo->capsula; ?></td>
                <td><?php echo $item_conteo->corteinfo; ?></td>
                <td><?php echo $item_conteo->audio; ?></td>
                <td><?php echo $item_conteo->imagen; ?></td>
                <td><?php echo $item_conteo->calificacion; ?></td>
                <td><?php echo $item_conteo->comentarios; ?></td>
            </tr>		
            <?php endforeach;?>

        </table>
  </div>
</body>
</html>
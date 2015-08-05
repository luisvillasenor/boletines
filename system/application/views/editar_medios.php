<html>
<head>
<title>Editar Medios</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

h1 {
 color: #454;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>Aqui podras modificar la informacion de cada medio</h1>
<center><a href="ver_medios"> <input type="button" value="Regresar" name="regresar" /></a></center>
<table border="0" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th><p>Tipo de medio</p>
                <select name="tipomedio">
                <option>Prensa</option>
                <option>Radio</option>
                <option>Television</option>
                </select>
            </th>
          
            <th><p>Nombre</p><input type="text" name="txt_nombremedio" value="" /></th>
            
<th><br><br><input type="button" value="Actualizar" name="btnactualizar" /></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

</body>
</html>
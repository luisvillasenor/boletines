<html>
<head>
<title>Dar de alta un medio</title>

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

<h1>Aqui podras dar de alta mendios escritos y electronicos</h1>
Vendedor:
                        <select name="vendedor" id="vendedor">
                            <option value="Tersa García Sánchez">Tersa García Sánchez</option>   
                            <option value="Bethzabeth Chávez García">Bethzabeth Chávez García</option>
                            <option value="María Cruz García Sánchez">María Cruz García Sánchez</option>
                            <option value="Cecilia González Puentes">Cecilia González Puentes</option>
                        </select><br>
<center><a href="catalogo_medios"> <input type="button" value="Regresar" name="regresar" /></a></center>
<table border="0" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th><p>¿Qué tipo de medio es?</p>
                <select name="tipomedio">
                <option>Prensa</option>
                <option>Radio</option>
                <option>Television</option>
                </select>
            </th>
          
            <th><p>Nombre</p><input type="text" name="txt_altamedio" value="" /></th>
            
<th><br><br><input type="button" value="Agregar" name="btnagregar" /></th>
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
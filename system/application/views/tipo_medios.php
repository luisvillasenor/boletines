<html>
<head>
<title>Tipo de medios</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 12px;
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
table {
    font-size: 12px;
}
</style>
</head>
<body>

<h1>Aqui podras agregar o modificar el tipo de medio(prensa, radio, television, etc.)</h1>
<center><a href="ver_medios"> <input type="button" value="Regresar" name="regresar" /></a></center>
<code>TIPOS DE MEDIOS</code>

<table border="0" cellpadding="10">
 <tr>
  <th>Id</th>
  <th>Tipo de medio</th>
  <th>Estatus</th>
 </tr>
 <tr>
  <td>"" </td>
  <td> ""</td>
  <td><form>
    <input type="radio" name="estatus" value="Activo" checked="checked" /> Activo
    <input type="radio" name="estatus" value="Inactivo" /> Inactivo
    </form>  </td>
  <td><a href="editar_medios"><input type="button" value="Editar" name="edit" /> </a></td>
 </tr>
 <tr>
  <td>"" </td>
  <td> ""</td>
  <td><form>
    <input type="radio" name="estatus" value="Activo" checked="checked" /> Activo
    <input type="radio" name="estatus" value="Inactivo" /> Inactivo
    </form> </td>
  <td><form action=""> <input type="button" value="Editar"> </form></td>
 </tr>
 <tr>
  <td>"" </td>
  <td> ""</td>
  <td><form>
    <input type="radio" name="estatus" value="Activo" checked="checked" /> Activo
    <input type="radio" name="estatus" value="Inactivo" /> Inactivo
    </form></td>
  <td><form action=""> <input type="button" value="Editar"> </form></td>  
 </tr>
</table>

<code>Agregar una clasificacion</code>
<input type="text" name="agregar.medio" value="" />
<form action=""> <input type="button" value="Agregar"> </form>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario 1</title>
  </head>
  <body>
    <h1>Formulario PHP</h1>

    <form class="form-horizontal" role="form" action="info1.php" method="post" >
      <div class="form-group">
        <label>Nom:</label>
        <input type="text" name="name" value="" placeholder="Nom">
      </div>
      <br>

      <div class="form-group">
        <label class="col-lg-2 control-label">Email</label>
          <input type="email" name="mail"
             placeholder="Email">
      </div>
      <br>

      <div class="form-group">
        <label  class="col-lg-2 control-label">Contraseña</label>
          <input type="password" class="form-control" name="passwd"
             placeholder="Contraseña">
         </div>
         <br>

      <div class="form-group">
        <label>Comentari:</label>
        <textarea class="form-control" rows="3" placeholder="Comentari" name="comentrari"></textarea>
      </div>
      <br>

      <div class="form-group">
      <label>Qué necessites:</label>
      <label>
        <input type="radio" name="nece" value="inf">Informar
        <input type="radio" name="nece" value="opi"> Opinar
     </label>
   </div>
   <br>
   <div class="form-group">
     <select name="ocupacio">
       <option value="directiu">Directiu</option>
       <option value="Auxiliar">Auxiliar</option>
       <option value="tecnic">Tècnic</option>
       <option value="comercial">Comercial</option>
     </select>
  </div>
  <br>
  <div class="form-group">
    <label>Checkbox</label>
    <input type="checkbox" name="c[]" value="si"> Si
    <input type="checkbox" name="c[]" value="no "> No
    <input type="checkbox" name="c[]" value="aveces"> A veces
  </div>
<br>
  <div class="form-group">
    <input type="submit" name="enviar" value="Enviar">
  </div>

    </form>
  </body>
</html>

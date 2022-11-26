<?php       
    include("database.php");

    $users_id= $_GET["id"];

    $consulta_por_id = "SELECT * FROM `matheus_suzano_users` WHERE users_id ='$users_id'";

    $resultado_por_id = mysqli_query($conexao, $consulta_por_id);

    $atualiza_colaborador = mysqli_fetch_assoc($resultado_por_id);

    require("header_admin.php");
?>

<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.imglogo2{
        width:10%;
        right:47%;
        top: 10%;
        position: absolute;
    }
    .letra{
        justify-content:flex-end;
        text-align: center;
    }
</style>
<br><br>
<p class="letra">Atualizar Colaborador</p>
    
    <form action="atualiza_cadastro.php" method="post">
    <div class="container">

    <input type="hidden" name="users_id" value="<?php echo $atualiza_colaborador['users_id'];?>">

    <label for="nome_login">Login: </label>
    <input type="text" name="users_login" id="users_login" value="<?php echo $atualiza_colaborador['users_login'];?>"><br><br>

    <label for="password_login">Password:</label>
    <input type="text" name="users_password" id="users_password" value="<?php echo $atualiza_colaborador['users_password'];?>"><br><br>

    <label for="profile_login">Perfil de acesso: </label>
    <select name="users_profile" id="users_profile"value="<?php echo $atualiza_colaborador['users_profile'];?>">
    <option value=""></option>
    <option value="admin">Administrador</option>
    <option value="colaborador">Colaborador</option>
    </select><br><br>
  <button type="submit" class="registerbtn">Atualizar Colaborador</button>
  </div>
</form>
<?php       
    require("footer.php");
?>

     
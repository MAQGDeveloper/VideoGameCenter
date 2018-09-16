<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/index_styles.css">
    <title>Login</title>
</head>
<body background="src/assets/background_login.png" width="50%">
<p id="newUser">New Here? <a href="php/forms/signup.php"> <b>Sign Up</a></p></p>
    <p id="localTitle">VideoGame Center</p>
<div id="divLogin">
    <p id="formTitle">Login</p>
    <form action="login.php" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
         <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action" id="btn-Login">Login
            <i class="material-icons right">input</i>
         </button>
          <p id="forgotPass">Forgot your password? <b>Just Reset Your Password<a href="php/forms/reset.php"> Here</a></p>
    </form>
  </div>
    <footer>
        <p id="footer_text">VideoGame Center | A project by: Miguel Angel Quezada Galván < CUCEI/> Seminario de Solución de problemas de Bases de Datos. <a href="https://github.com/AngelQuezada/VideoGameCenter" style="color: pink;">Fork me on Github</a><i class="fab fa-github fa-2x" style="color:white"></i> version: 0.0.1</p>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
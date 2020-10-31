<?php
// Include config file
//require ('connection.php');

if (isset($_POST['contrasena'])){
//3.1.1 Assigning posted values to variables.

$contrasena = $_POST['contrasena'];
//3.1.2 Checking the values are existing in the database or not
//$query = "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['usuario'] = $usuario;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['usuario'])){
$usuario = $_SESSION['usuario'];
header('Location: menu-ppal.php');

}else{
//3.2 When the user visits the page first time, simple login form will be displayed.

?>

<html>
<head>
    <title>Iniciar Sesion</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
      
    </div>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
      </form>
</div>

</body>

</html>
<?php } ?>

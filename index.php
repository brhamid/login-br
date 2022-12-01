<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: ./redirecting.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login BR</title>
</head>
<body>
<div class="login">
	<h1>BR Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    	<input type="text" name="name" placeholder="Username" required="required" />

        <input type="password" name="password" placeholder="Password" required="required" />


        <button name="submit" type="submit" class="btn btn-primary btn-block btn-large">Daxil ol</button>
        
    </form>
</div>
</body>
</html>
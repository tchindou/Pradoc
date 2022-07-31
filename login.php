<?php session_start(); 
include_once('includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['pwd'];
$dec_password=$password;
$useremail=$_POST['email'];
$ret= mysqli_query($con,"SELECT uid FROM users WHERE email='$useremail' and pwd='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['uid']=$num['uid'];

header("location:index.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>

<?php include_once "includes/header.php"; ?>

<?php include_once "includes/navbar.php"; ?>

<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="background: #29fd53;">

<div class="card-header">
<h2 align="center" style="color: rgb(37, 41, 41);">Connexion</h2>
<hr />
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="email" type="email" placeholder="example@gmail.com" required/>
<label for="inputEmail">Votre email</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="pwd" type="password" placeholder="Votre mot de passe" required />
<label for="inputPassword">Mot de passe</label>
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="recovery.php">Mot de passe oublié !?</a>
<button class="btn btn-primary" id="log" name="login" type="submit">Connexion</button>
</div>
</form>
</div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="signup.php">Pas encore inscris! Inscrivez-vous</a></div>
                                          <div class="small"><a href="index.php">Retour à la page d'accueil</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php include_once "includes/footer.php"; ?>
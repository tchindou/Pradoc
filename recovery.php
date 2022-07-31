<?php
include('includes/config.php');
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php';

$mail = new PHPMailer;
if(isset($_POST['send'])){


$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,pwd,fname from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$toemail = $row2['email'];
$fname = $row2['fname'];
$subject = "Recuperation de mot de passe";
$password=$row2['pwd'];
$message = 'Ton mot de passe est  '.$password;
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'alaisetchindou167@gmail.com';    // SMTP username
$mail->Password = '@altc02$'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('alaisetchindou167@gmail.com','Pradoc');
$mail->addAddress($toemail);   // Add a recipient
$mail->isHTML(true);  // Set email format to HTML
$bodyContent=$message;
$mail->Subject =$subject;
$bodyContent = 'Dear'." ".$fname;
$bodyContent .='<p>'.$message.'</p>';
$mail->Body = $bodyContent;
if(!$mail->send()) {
echo  "<script>alert('Message ne peut pas être envoyé');</script>";
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo  "<script>alert('Mot de passe envoyé avec succès');</script>";
}

}
else
{
echo "<script>alert('Email introuvable, réinscrivez vous');</script>";   
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
<h2 align="center"><span class="logo">Pradoc</span></h2>
<hr />
<h3 class="text-center font-weight-light my-4">Recuperation de mot de passe</h3></div>
<div class="card-body">

<div class="small mb-3 text-muted">Saisissez votre email et nous enverrons le mot de passe</div>


<form method="post">
                               
<div class="form-floating mb-3">
<input class="form-control" name="femail" type="email" placeholder="name@example.com" required />
<label for="inputEmail">Email address</label>
</div>

<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="login.php">Se connecter</a>
<button class="btn btn-primary" id="log" type="submit" name="send">Envoyer</button>
</div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="signup.php">Vous avez pas de compte? S'inscrire!</a></div>
            <div class="small"><a href="index.php">Retour à la page d'accueil</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once "includes/footer.php"; ?>
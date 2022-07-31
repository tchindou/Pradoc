<?php session_start();
require_once('includes/config.php');


//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $tel=$_POST['tel'];
    $loc=$_POST['loc'];
    $errors = array();
$sql=mysqli_query($con,"select uid from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    $errors['email'] = "Email that you have entered is already exist!";
} else{
    $msg=mysqli_query($con,"INSERT INTO users(fname,name,email,pwd,tel,loc) values('$fname','$name','$email','$pwd','$tel','$loc')");
}

    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO usertable (name, email, pwd, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: alaisetchindou167@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
?>

<?php include_once "includes/header.php"; ?>

<?php include_once "includes/navbar.php"; ?>

<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main >
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
<h2 align="center">Registration and Login System</h2>
<hr />
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="fname" type="text" placeholder="Enter your first name" required />
<label for="inputFirstName">First name</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="name" type="text" placeholder="Enter your last name" required />
 <label for="inputLastName">Last name</label>
</div>
</div>
</div>


<div class="col md-6">
<div class="form-floating mb-3">
<input class="form-control" id="email" name="email" type="email" placeholder="phpgurukulteam@gmail.com" required />
<label for="inputEmail">Email address</label>
</div>
 
<div class="col md-6">
<div class="form-floating mb-3">
<input class="form-control" id="contact" name="tel" type="text" placeholder="22899099967" required pattern="[0-9]{11}" title="Seulement les chiffres et inclure l'indice telephonique"  maxlength="11" required />
<label for="inputcontact">Contact Number</label>
</div>
</div>
        


<div class="row mb-3">
<div class="col-md-6">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="pwd" name="pwd" type="password" placeholder="Creer un mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
<label for="inputPassword">Password</label>
</div>
</div>
                                                

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="cpwd" name="cpwd" type="password" placeholder="Confirmez le mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
<label for="inputPasswordConfirm">Confirm Password</label>
</div>
</div>
</div>

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="loc" name="loc" type="text" placeholder="Votre localité"   required />
<label for="loc">Pays</label>
</div>
</div>

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="age" name="age" type="number" placeholder="Votre age"   required />
<label for="age">Age</label>
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="pays" name="pays" type="text" placeholder="Votre sexe"   required />
<label for="pays">Pays</label>

</div>
</div>
</div>
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" id="log" name="submit">Envoyer</button></div>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
 <div class="small"><a href="login.php">Avez-vous déjâ un compte? Se coonecter</a></div>
  <div class="small"><a href="index.php">Retour à la page d'accueil</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php include_once "includes/footer.php"; ?>
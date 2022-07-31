                  
<?php
/*---------------------------------------------------------------*/
/*
    Titre : Moteur de recherche simple - MySQLi                                                                           
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=441
    Auteur           : freemh                                                                                             
    Date édition     : 02 Aout 2008                                                                                       
    Date mise à jour : 18 Sept 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - refactoring du code en PHP 7                                                                                        
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/?>
<!--   Exécuter cette requête dans votre base de données
    
    CREATE TABLE IF NOT EXISTS `site` (
      `id` int(10) unsigned NOT NULL auto_increment,
     `nom_site` varchar(100) character set latin1 NOT NULL,
     `adresse_site` varchar(100) character set latin1 NOT NULL,
    `description_site` varchar(100) character set latin1 NOT NULL,
    PRIMARY KEY  (`id`)
   ) ENGINE=MyISAM  DEFAULT CHARSET=latin7 AUTO_INCREMENT=4 ;


  INSERT INTO `site` (`id`, `nom_site`, `adresse_site`, `description_site`)
 VALUES 
(1, 'Annonce Voiture', '<a href="mehdi">voiture</a>', 'trouver tous les
 voitures'),
(2, '', '', ''),
(3, 'voiture mercedes', '<a href="mercedes">Mercedes car</a>', 'Voiture
 mercedes');

-->

<?php require ('includes/config.php');?>

<?php include_once "includes/header.php"; ?>
       
<?php include_once "includes/navbar.php"; ?>

<?php
     
    // Connexion à la base donnée
     
    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'pradoc';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


    if ( isset($_POST['requete']) )
    $requete = htmlentities($conn->real_escape_string($_POST['requete']));


    if (!empty($requete))
    {
        $req = "SELECT * FROM users WHERE name or fname or email LIKE '%$requete%'"; 
        $exec = $con->query($req);                            
// exécuter la requête
        $nb_resultats = $exec->num_rows;              // compter les résultats


    if($nb_resultats != 0) 
    {

      echo '<center><font color="blue"><h4>Résultat de votre recherche </h4></font><br/></center>
            <font size="5px">'.$nb_resultats.'</font>';


    if($nb_resultats > 1)
    {
        echo ' <font size="5px" color="red">résultats</font> ';
    }
        else
        {
            echo ' <font size="5px" color="red">résultats trouvé</font>  ';
        } 

       echo  '<font size="5px">dans notre base de données :</font><br/><br/>';



    while($donnees = mysqli_fetch_array($exec))
    {
    ?>

    <?php
          
          echo '<div class="result">'; 
          echo '<font size="4px">'. $donnees['name'] .'</font><br>';
          echo  '<font size="4px">'. $donnees['fname'] .'</font><br>';
          echo '<font size="4px">'. $donnees['pwd'].'</font><br>';
          echo '</div>';
    ?>

    <?php
    } // fin de la boucle
    ?>


    <?php
    }


    else {
        echo '<center>';
        echo '<h5><br><br>Pas de résultats</h5>';
        echo '<pre>Nous n avons trouver aucun résultats pour votre requête
              <font color="blue">' .$_POST['requete'].'</font></pre>';
      
     }
    }
    
?>

<?php include_once "includes/footer.php"; ?>
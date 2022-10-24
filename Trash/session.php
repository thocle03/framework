<!DOCTYPE html>
<html>
<head>
<title>Test méthode POST</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<?php 
    session_start();
    if($_POST){
    	setcookie("firstname",$_POST["firstname"], time()+(250));
   		setcookie("lastname",$_POST["lastname"],time()+(250));
    	setcookie("age",$_POST["age"], time()+(250));
	}
    if(key_exists("age",$_COOKIE) && key_exists("firstname",$_COOKIE) && key_exists("lastname", $_COOKIE)){
        echo "Bienvenue {$_COOKIE['firstname']} {$_COOKIE['lastname']}, vous avez {$_COOKIE['age']} ans  !";

        unset($_COOKIE);
        session_destroy();
        session_write_close();
    }
    else{
        echo "Vous n'etes pas connecte";
    }

    ?>
<form action="session.php" method="POST">
<select name="titre">
<option>Mlle</option><option>Mme</option><option selected>M.</option>
</select>
<label for="nom"> Nom : </label><input type="text" name="lastname" id="lastname" placeholder="Entrez votre nom" /><br/><br/>
<label for="prenom">Prénom : </label><input type="text" name="firstname" id="firstname" value="Thomas" /><br/><br/>
<label for="sexe">Sexe : </label>
<input type="radio" name="sexe" id="sexe" value="H" checked /> Masculin
<input type="radio" name="sexe" value="F" /> Féminin
<br/><br/>
<label for="age">Age : 1 </label>
<input type="range" name="age" id="age" min="1" max="99" step="1" value="18" /> 99
<br/><br/>
<input type="checkbox" name="bDebutant" checked="checked" /> Je débute en PHP<br/><br/>
<input type="submit" name="btOK" value="OK">
</form>
<?php
            if(isset($_COOKIE['user_id'])){
                echo 'Votre ID de session est le ' .$_COOKIE['user_id'];
            }
?>
</body>
</html>
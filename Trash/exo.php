<?php 
function bissextile($annee) {
	$r = 0;
	$vécu = array();
	for ($i=$annee; $i <= 2022; $i++) { 
		if(($i % 400) == 0 || ($i % 4) == 0 || ($i % 100) == 0 || ($i % 100) == 0)
			array_push($vécu, $i);
			$r ++;
	}
	echo "Vous avez vécu $r années bissextile.<br>";
	print_r($vécu);
}
bissextile(2000);

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<br>
	<br>
	<form>
		<label for="pays">Sélectionnez une année</label><br />
		<select name="année", id="année">
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option selected>2023</option>

		</select><br>
		<input class="btn btn-primary" type="submit" value="Envoyer"><br>
	</form>
	<?php
	if($_GET){
		echo "bonjour {$_GET['gender']} {$_GET['first_name']}";	
	}
	else{
			?>
	}
	<form action="exo.php" method="GET">
		<select name="gender">
		<option>Mlle</option><option>Mme</option><option selected>M.</option>
		</select>
		<label for="lastname"> Nom : </label><input type="text" name="lastname" id="lastname" placeholder="Entrez votre nom" /><br/><br/>
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
</body>

</html>
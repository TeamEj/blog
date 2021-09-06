<?php
//$conn=mysqli_connect("'localhost';root;'';'blog'");

//$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
	
$connexion = mysqli_connect("localhost", " ",  " ","blog");
					
		
		
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		//$ville=$_POST['ville'];
		//$pays=$_POST['pays'];
		//$adresse=$_POST['adresse'];
		//$heure=date('H:i');
		//$date=date('Y-m-d'); 
		
		
		$requet=" INSERT INTO mes_contacts(nom,)VALUES('$nom')";
		$resultat=$connexion->query($requet);
 
        require('category.html');

?>
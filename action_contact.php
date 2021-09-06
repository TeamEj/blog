<?php
//$conn=mysqli_connect("'localhost';root;'';'blog'");

//$connexion= mysqli_connect("localhost","eliajimm_ejhost","j'utiliseLGsmartTV","eliajimm_payement");
	
$connexion = mysqli_connect("127.0.0.1", "root ",  " ","blog");
					
		
		
		$nom=$_POST['nom'];
		$surname=$_POST['surname'];
		$email=$_POST['email'];
		//$ville=$_POST['ville'];
		//$pays=$_POST['pays'];
		//$adresse=$_POST['adresse'];
		//$heure=date('H:i');
		//$date=date('Y-m-d'); 
		
		
		$requet=" INSERT INTO mes_contacts(nom,)VALUES('$nom')";
		$resultat=$connexion->query($requet);
 
        require('category.html');

?>
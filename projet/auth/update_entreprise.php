
<?php
 
 session_start();
include_once('../database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nom_complet = $_POST['nom_complet'];
    $Raison = $_POST['Raison'];
    $ville_entreprise = $_POST['ville_entreprise'];
    $adresse = $_POST['adresse'];
    $domaine = $_POST['domaine']; 
    $entreprise_id=$_SESSION["entreprise_id"] ;
	
	


    

 
    $sql = "UPDATE entreprise SET nom_complet='$nom_complet', ville_entreprise='$ville_entreprise', adresse='$adresse', domaine='$domaine',Raison='$Raison' WHERE entreprise_id='$entreprise_id '";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../pages/Entreprise/ModifierProfil.page.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    
}


$conn->close();
?>

<?php
 
 session_start();
include_once('../database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nom_complet = $_POST['nom_complet'];
    $université = $_POST['université'];
    $telephone = $_POST['telephone'];
    $ville = $_POST['ville'];
    $adresse = $_POST['adresse'];
    $cv = $_POST['cv']; 
    $client_id=$_SESSION["client_id"] ;
	
	


    

 
    $sql = "UPDATE clients SET nom_complet='$nom_complet', telephone='$telephone', ville='$ville', adresse='$adresse', cv='$cv',université='$université' WHERE client_id='$client_id '";
    if ($conn->query($sql) === TRUE) { 
        header("Location: ../index.php");//lien vers son profil
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    
}


$conn->close();
?>
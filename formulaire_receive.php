<?php

// var_dump($_POST);

$nom  = $_POST["nom"];

$genre = $_POST["genre"];   //les value en html sont les données qui s'afficheront

$nationality  = $_POST["nationality"];    

$pays  = $_POST["pays"];                //les value en html sont les données qui s'afficheront
$langue  = $_POST["langue"];            //les value en html sont les données qui s'afficheront







echo "<strong> nom : </strong>".$nom. "<br> <strong> nationalité : </strong>".$nationality. "<br> <strong>genre : </strong>" .$genre. "<br>";

echo "<strong> Pays visités : </strong>";
foreach ($pays as $valeur) {
    echo $valeur.", ";
}
echo "<br>";
echo "<strong> langues parlées :</strong>";
foreach ($langue as $value) {
    echo $value.", ";
}

/*
pays à visiter : <?php
if(isset($_POST['pays'])){
    foreach ($_POST['pays'] as $value){
        echo $value. " ; ";
    }  
} else{
    echo "aucun pays sélectionnés";
}
*/
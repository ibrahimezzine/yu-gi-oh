<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Vérifiez si le fichier est déjà présent
if (file_exists($target_file)) {
    echo "Désolé, le fichier existe déjà.";
    $uploadOk = 0;
}

// Téléchargement du fichier
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Le fichier ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " a été téléchargé.";
    } else {
        echo "Désolé, une erreur est survenue lors du téléchargement.";
    }
}
?>
<br><a href="index.html">Retourner à l'accueil</a>

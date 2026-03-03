<?php
require 'config.php';

$messageAlerte = "";
$typeAlerte = "";

if (
    isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['telephone'],
        $_POST['date_naissance'],
        $_POST['email'],
        $_POST['message']
    ) &&
    !empty($_POST['nom']) &&
    !empty($_POST['prenom']) &&
    !empty($_POST['telephone']) &&
    !empty($_POST['date_naissance']) &&
    !empty($_POST['email']) &&
    !empty($_POST['message'])
) {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $date_naissance = $_POST['date_naissance'];
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    try {

        $sql = "INSERT INTO utilisateurs 
                (nom, prenom, telephone, date_naissance, email, message) 
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $nom,
            $prenom,
            $telephone,
            $date_naissance,
            $email,
            $message
        ]);

        $messageAlerte = " Votre formulaire a été accepté avec succès 🎉 Merci de la confiance ";
        $typeAlerte = "alert alert-success";

    } catch (PDOException $e) {

        $messageAlerte = "Une erreur est survenue lors de l'enregistrement.";
        $typeAlerte = "alert alert-danger";
    }

} else {

    $messageAlerte = "Veuillez remplir correctement tous les champs avant soumission.";
    $typeAlerte = "alert alert-danger";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">

    <div class="<?= $typeAlerte ?>">
        <?= $messageAlerte ?>
    </div>

    
    <br>
    <hr>
    <br>
    
    

    
    <a href="index.php"><button href="index.php" class="btn"> Retour au formulaire </button></a>


</div>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="container">
        <h2>Contactez-nous</h2>

        <form action="traitement.php" method="POST">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="telephone">Numéro de téléphone</label>
                <input type="tel" id="telephone" name="telephone" placeholder="+228 90 12 34 56"  pattern="^\+228[0-9]{8}$" required >
            </div>

            <div class="form-group">
                <label for="date_naissance">Date de naissance</label>
                <input type="date" id="date_naissance" name="date_naissance" max="2010-12-31" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="ex: nom.prenom@gmail.com" name="email" required >
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button class="btn" type="submit">Envoyer</button>

        </form>
    </div>

    <script>
document.getElementById('telephone').addEventListener('input', function () {
    this.value = this.value.replace(/[^0-9+]/g, '');
});
</script>
</body>
</html>
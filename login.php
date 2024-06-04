<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="account_management.php" method="post">
        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>

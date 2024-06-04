<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
</head>
<body>
    <h2>Créer un compte pour un employé</h2>
    <form action="account_management.php" method="post">
        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="hidden" name="action" value="create_employee_account">
        <input type="submit" value="Créer le compte">
    </form>
</body>
</html>

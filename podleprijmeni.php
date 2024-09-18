<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odstraňování Pojištěnců</title>
</head>
<body>
    <h2>Odstraňování Pojištěnců</h2>

    <?php

        require_once('Db.php');
        Db::connect('127.0.0.1', 'databaze_pojistencu', 'root', '');
        $prijmeni = $_POST['prijmeni'];
        if ($_POST) {
            Db::query("DELETE FROM pojistenci WHERE jmeno LIKE '$prijmeni'");

            echo('<p>Záznam byl úspěšně odstraněn.</p>');
        }
    ?>

    <form action="" method="post">
        <p>
        Zadejte příjmení:<br />
        <input type="text" name="prijmeni">
        </p>
        <input type="submit" value="Odstraň">
        </form>

    <p><a href="index.php">Hlavní stránka</a></p>
</body>
</html>
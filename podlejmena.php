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
        $jmeno = $_POST['jmeno'];
        if ($_POST) {
            Db::query("DELETE FROM pojistenci WHERE jmeno LIKE '$jmeno'");

            echo('<p>Záznam byl úspěšně odstraněn.</p>');
        }
    ?>

    <form action="" method="post">
        <p>
        Zadejte jméno:<br />
        <input type="text" name="jmeno">
        </p>
        <input type="submit" value="Odstraň">
        </form>

    <p><a href="index.php">Hlavní stránka</a></p>
</body>
</html>
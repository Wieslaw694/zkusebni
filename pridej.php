<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidávání Pojištěnců</title>
</head>
<body>
    <h2>Přidávání Pojištěnců</h2>

    <?php

        require_once('Db.php');
        Db::connect('127.0.0.1', 'databaze_pojistencu', 'root', '');
        if ($_POST) {
            $datum = date("Y-m-d", strtotime($_POST['datum']));
            Db::query('INSERT INTO pojistenci (jmeno, prijmeni, datum) VALUES (?, ?, ?)
            ', $_POST['jmeno'], $_POST['prijmeni'], $datum);

            echo('<p style="color:green;">Záznam byl úspěšně přidán.</p>');
        }
        ?>

    <form action="" method="post">
        <p>
        Jméno:<br />
        <input type="text" name="jmeno" required>
        </p>
        <p>
        Příjmení:<br />
        <input type="text" name="prijmeni" required>
        </p>
        <p>
        Datum narození:<br />
        <input type="date" name="datum" required>
        </p>
        <input type="submit" value="Přidej">
    </form>
    <p><a href="index.php">Hlavní stránka</a></p>
</body>
</html>

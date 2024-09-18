<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td {
            border: 1px solid black;
            padding: 5px;
            border-collapse:collapse;
            }
    </style>
    <title>Evidence Pojištěnců</title>
</head>
<body>
    <h2>Evidence Pojištěnců</h2>
    <p><a href="pridej.php">Přidat záznam</a>&nbsp;<a href="odstran.php">Odstraň záznam</a></p>
    
    <?php

        require_once('Db.php');
        Db::connect('127.0.0.1', 'databaze_pojistencu', 'root', '');
        $pojistenci = Db::queryAll('SELECT * FROM pojistenci');
        echo('<table>');
            foreach ($pojistenci as $pojistenec) {
            echo('<tr><td>' . htmlspecialchars($pojistenec['jmeno']));
            echo('</td><td>' . htmlspecialchars($pojistenec['prijmeni']));
            echo('</td><td>' . $datum = date("d.m.Y", strtotime($pojistenec['datum'])));
            echo('</td></tr>');
        }
        echo('</table>');
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>

<body>
    <h1><?= $data['title']; ?></h1>
    <h3>Naam: <?= $data['naam']; ?></h3>
    <h3>Datum in dienst: <?= $data['InDienst']; ?></h3>
    <h3>Aantal sterren: <?= $data['Sterren']; ?></h3>
    <button>Toevoegen Voertuig</button>
    <table>
        <thead>
            <th>TypeVoertuig</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijscategorie</th>
            <th>Wijzigen</th>
        </thead>
        <tbody>
            <?= $data['tableRows']; ?>
        </tbody>
    </table>
    <a href="../../Instructeur/overzichtinstructeur">Terug</a>
</body>
</html>
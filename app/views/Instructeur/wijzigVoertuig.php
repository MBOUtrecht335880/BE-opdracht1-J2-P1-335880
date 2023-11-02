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
    <h1>Wijzigen voertuiggegevens</h1>
    <form action="">
        <label for="Instructeur-select">Instructeur:</label>
        <select name="Instructeur" id="Instructeur-select">
            <option value=""><?= $data['naam']; ?></option>
            <option value="">Bert van Sali</option>
            <option value="">Li Zhan</option>
            <option value="">Yoeri van Veen</option>
            <option value="">Leroy Boerhaven</option>
            <option value=""> Mohammed El Yassidi </option>
        </select> <br><br>

        <label for="TypeVoertuig-select">TypeVoertuig:</label>
        <select name="TypeVoertuig" id="TypeVoertuig-select">
            <option value=""><?= $data['TypeVoertuig']; ?></option>
            <option value="">Personenauto</option>
            <option value="">Vrachtwagen</option>
            <option value="">Bus</option>
            <option value="">Bromfiets</option>
        </select> <br><br>

        <label for="Type-input">Type:</label>
        <input type="text" id="Type-input" name="Type" value="<?= $data['Type']; ?>"> <br><br>

        <label for="Bouwjaar-date">Bouwjaar:</label>
        <input type="date" id="Bouwjaar-date" name="Bouwjaar" value="<?= $data['Bouwjaar']; ?>"> <br><br>

        <label for="Brandstof-radio">Brandstof:</label>
        <input type="radio" id="Diesel" name="Brandstof" value="Diesel" <?= $data['Brandstof'] == 'Diesel' ? 'checked' : '' ?>>
        <label for="Brandstof-radio">Diesel</label>
        <input type="radio" id="Benzine" name="Brandstof" value="Benzine" <?= $data['Brandstof'] == 'Benzine' ? 'checked' : '' ?>>
        <label for="Brandstof-radio">Benzine</label>
        <input type="radio" id="Elektrisch" name="Brandstof" value="Elektrisch" <?= $data['Brandstof'] == 'Elektrisch' ? 'checked' : '' ?>>
        <label for="Brandstof-radio">Elektrisch</label> <br><br>

        <label for="Kenteken-input">Kenteken:</label>
        <input type="text" id="Kenteken-input" name="Kenteken" value="<?= $data['Kenteken']; ?>"> <br><br>

        <button type="submit" class="button">Wijzigen</button>
    </form>
    <a href="../../overzichtvoertuigen/<?= $data['Id']; ?>">Terug</a>
</body>

</html>
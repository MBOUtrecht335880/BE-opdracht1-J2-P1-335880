<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css?v=<?php echo time(); ?>">
    <title>Homepage</title>
</head>

<body>
    <h1><?= $data['title']; ?></h1>
    <a href="<?= URLROOT; ?>/Instructeur/overzichtinstructeur">Instructeurs in dienst</a>
</body>

</html>
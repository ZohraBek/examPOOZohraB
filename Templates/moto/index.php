<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de motos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="http://localhost/examPOOZohraB/index.php/moto/add" class="btn btn-success">Ajouter une nouvelle moto</a>
        <a href="http://localhost/examPOOZohraB/index.php/moto" class="btn btn-primary">Toutes</a>
        <a href="http://localhost/examPOOZohraB/index.php/moto/Enduro"  class="btn btn-primary">Enduro</a>
        <a href="http://localhost/examPOOZohraB/index.php/moto/Custom" class="btn btn-primary">Custom</a>
        <a href="http://localhost/examPOOZohraB/index.php/moto/Sportive" class="btn btn-primary">Sportive</a>
        <a href="http://localhost/examPOOZohraB/index.php/moto/Roadster" class="btn btn-primary">Roadster</a>

        <h1>Liste de motos</h1>
        <?php foreach ($motos as $moto): ?>
        <li>
            <strong>Marque :</strong> <?php echo $moto->getBrand(); ?><br>
            <strong>Modèle :</strong> <?php echo $moto->getModel(); ?><br>
            <strong>Type :</strong> <?php echo $moto->getType(); ?><br>
            <strong>Prix :</strong> <?php echo $moto->getPrice(); ?><br>
            <img src="<?php echo $moto->getImage(); ?>" alt="Image de la moto"><br>
            <a href="http://localhost/examPOOZohraB/index.php/moto/<?php echo($moto->getId());?>">Voir les détails</a>
        </li>
    <?php endforeach; ?>




        <table class="table">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Type</th>
                    <th>Prix</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contenu du tableau -->
            </tbody>
        </table>


    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

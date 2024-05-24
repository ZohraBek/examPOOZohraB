<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la moto</title>
    <!-- Intégration de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Détails de la moto</h1>

        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Marque :</strong> <?php echo $moto->getBrand(); ?></p>
                <p class="card-text"><strong>Modèle :</strong> <?php echo $moto->getModel(); ?></p>
                <p class="card-text"><strong>Type :</strong> <?php echo $moto->getType(); ?></p>
                <p class="card-text"><strong>Prix :</strong> <?php echo $moto->getPrice(); ?></p>
                <img src="<?php echo $moto->getImage(); ?>" class="img-fluid" alt="Image de la moto">
            </div>
            <div class="card-footer">
                <a href="edit.html?id=<?php echo $moto->getId(); ?>" class="btn btn-primary">Éditer</a>
                <a href="delete.php?id=<?php echo $moto->getId(); ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une moto</title>
    <!-- Intégration de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulaire d'ajout d'une nouvelle moto :</h1>
        <form action="/moto/add" method="post">
            <div class="form-group">
                <label for="brand">Marque :</label>
                <input type="text" class="form-control" id="brand" name="brand">
            </div>
            <div class="form-group">
                <label for="model">Modèle :</label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
            <div class="form-group">
                <p> Type <p>
                <select name="type" id="type" class="form-control">
                    <option value=""></option>
                    <option value="Enduro">Enduro</option>
                    <option value="Custom">Custom</option>
                    <option value="Sportive">Sportive</option>
                    <option value="Roadster">Roadster</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

    <!-- Intégration de Bootstrap JavaScript pour les fonctionnalités avancées -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

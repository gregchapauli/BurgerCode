<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Burger Code</title>
    </head>

    <body>
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong>Liste des items </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>item 1</td>
                            <td>Description 1</td>
                            <td>Prix 1</td>
                            <td>Catégorie 1</td>
                            <td width=300>
                            <a class="btn btn-default" href="view.php?id=1"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                            <a class="btn btn-primary" href="update.php?id=1"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                            <a class="btn btn-danger" href="delete.php?id=1"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>item 2</td>
                            <td>Description 2</td>
                            <td>Prix 2</td>
                            <td>Catégorie 2</td>
                            <td width=300>
                            <a class="btn btn-default" href="view.php?id=2"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>
                            <a class="btn btn-primary" href="update.php?id=2"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                            <a class="btn btn-danger" href="delete.php?id=2"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </body>

</html>
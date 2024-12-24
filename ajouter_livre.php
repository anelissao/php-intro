<?php require_once 'connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $titre = $conn->real_escape_string($_POST["titre"]);
    $auteur = $conn->real_escape_string($_POST["auteur"]);
    $categorie = $conn->real_escape_string($_POST["categorie"]);
    $date_ajout = date("Y-m-d");
    $disponible = isset($_POST["disponible"]) ? 1 : 0;

    $sql = "INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) 
            VALUES ('$titre', '$auteur', '$categorie', '$date_ajout', '$disponible')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add a New Book</h1>
    <form method="POST" action="">
        <label for="titre">Title:</label><br>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="auteur">Author:</label><br>
        <input type="text" id="auteur" name="auteur" required><br><br>

        <label for="categorie">Category:</label><br>
        <input type="text" id="categorie" name="categorie" required><br><br>

        <label for="disponible">Available:</label>
        <input type="checkbox" id="disponible" name="disponible"><br><br>

        <button type="submit">Add Book</button>
    </form>
    <button><a  href="liste_livres.php">View Books</a></button>
</body>
</html>




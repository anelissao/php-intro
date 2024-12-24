<?php require_once 'connection.php';

$res = mysqli_query($conn, "SELECT * FROM livres");

if ($res) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Book</th>
            <th>Author</th>
            <th>Category</th>
            <th>Availability</th>
          </tr>";

    while ($row = mysqli_fetch_row($res)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row[1]) . "</td>"; // Book Title
        echo "<td>" . htmlspecialchars($row[2]) . "</td>"; // Author
        echo "<td>" . htmlspecialchars($row[3]) . "</td>"; // Category
        echo "<td>" . ($row[5] ? "Available" : "Unavailable") . "</td>"; // Availability
        echo "</tr>";
    }

    echo "</table>";
    echo '<button><a href="ajouter_livre.php">Add Book</a></button>';
} else {
    echo "No results found.";
}
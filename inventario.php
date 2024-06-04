<?php
// Dettagli della connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broukdb";

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Query per selezionare tutti gli articoli dell'inventario
$sql = "SELECT id, nome_articolo, categoria, quantita, data_acquisto, stato, prezzo, descrizione FROM inventario_palestra";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Palestra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        form {
            display: block;
            text-align: center;
        }
        input[type="submit"] {
            background-color: #f44336;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-block;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #d32f2f;
        }
        .return-link {
            text-align: center;
            margin-top: 20px;
        }
        .return-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Inventario Palestra</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome Articolo</th>
            <th>Categoria</th>
            <th>Quantità</th>
            <th>Data Acquisto</th>
            <th>Stato</th>
            <th>Prezzo</th>
            <th>Descrizione</th>
        </tr>
        <?php
        if ($result && $result->num_rows > 0) {
            // Stampa i dati di ogni riga
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["nome_articolo"]. "</td>
                        <td>" . $row["categoria"]. "</td>
                        <td>" . $row["quantita"]. "</td>
                        <td>" . $row["data_acquisto"]. "</td>
                        <td>" . $row["stato"]. "</td>
                        <td>" . $row["prezzo"]. "</td>
                        <td>" . $row["descrizione"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Nessun articolo trovato</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <form action="rifornisci_inventario.php" method="post">
        <input type="submit" value="Rifornisci Inventario">
    </form>
    <div class="return-link">
        <a href="dashboard.html">Torna alla Dashboard</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifornisci Inventario</title>
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
        .success-message {
            text-align: center;
            margin-top: 20px;
            color: green;
            font-size: 18px;
        }
        .link-back {
            text-align: center;
            margin-top: 20px;
        }
        .link-back a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "broukdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nuova_quantita = $_POST["quantita"];

        $sql = "UPDATE inventario_palestra SET quantita = quantita + $nuova_quantita WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>La quantità è stata aggiornata con successo.</h1>";
            echo "<div class='link-back'><a href='inventario.php'>Torna alla pagina dell'inventario</a></div>";
        } else {
            echo "Errore durante l'aggiornamento della quantità: " . $conn->error;
        }

        $conn->close();
        exit();
    }
    ?>
</body>
</html>


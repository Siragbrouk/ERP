<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "broukdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$sql = "SELECT nome, messaggio FROM messaggi";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaggi</title>
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
    <div class="container">
        <h1>Messaggi</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Messaggio</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["nome"] . "</td>
                            <td>" . $row["messaggio"] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nessun messaggio trovato</td></tr>";
            }
            ?>
        </table>
		<div class="return-link">
        <a href="dashboard.html">Torna alla Dashboard</a>
    </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>

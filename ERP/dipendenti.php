<?php
// Dettagli della connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broukdb";

// Crea la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$sql = "SELECT  nome, cognome, email, tariffa_oraria, orari_lavoro, ruolo FROM dipendenti";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dipendenti</title>
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
    <h1>Lista Dipendenti</h1>
    <table>
        <tr>
            <th>Email</th>
			<th>Nome</th>
            <th>Cognome</th>
            <th>Tariffa Oraria</th>
            <th>Orari Lavoro</th>
            <th>Ruolo</th>
            <th>Azioni</th> 
        </tr>
        <?php
        if ($result && $result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["email"]. "</td>
						<td>" . $row["nome"]. "</td>
                        <td>" . $row["cognome"]. "</td>
                        <td>" . $row["tariffa_oraria"]. "</td>
                        <td>" . $row["orari_lavoro"]. "</td>
                        <td>" . $row["ruolo"]. "</td>
                        <td><form method='post' action='elimina_dipendente.php'>
                            <input type='hidden' name='email' value='" . $row["email"] . "'>
                            <input type='submit' value='Elimina'>
                        </form></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Nessun dipendente trovato</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <div class="return-link">
        <a href="dashboard.html">Torna alla Dashboard</a>
    </div>
</body>
</html>

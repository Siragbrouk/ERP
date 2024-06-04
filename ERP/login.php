<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Utente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background-color: #fff;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .success-message {
            color: green;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .return-link {
            margin-top: 20px;
        }
        .return-link a {
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "broukdb";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

$email = $_GET['email'];
$password1 = $_GET['password'];

// Verifica nella tabella utenti
$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$password1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        $_SESSION['email'] = $email_utente; // Salva l'email dell'utente in sessione
        header("Location: pagina_utente.php");
    }
else {
    $sql = "SELECT * FROM dipendenti WHERE email = '$email' AND password = '$password1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
		$_SESSION['nome'] = $email;
        header("Location: dashboard.html");
        exit;
    } else {
        echo "Login fallito, se non hai un account <h1><a href='benvenuto1.php'>Registrati</a></h1>";
    }
}

$conn->close();
?>
</div>
<div class="return-link">
            <a href="ERP.php">Torna alla Home</a>
        </div>
</body>
</html>

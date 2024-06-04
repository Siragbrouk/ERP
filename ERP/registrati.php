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
        $db_Host = "localhost";
        $db_User = "root";
        $db_Password = "";
        $db_name = "broukdb";

        $conn = new mysqli($db_Host, $db_User, $db_Password, $db_name) or die ("Connessione fallita");

        $nome = $_GET['nome'];
        $cognome = $_GET['cognome'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Registrazione avvenuta con successo</h1>";
        } else {
            echo "<h1>Errore nell'inserimento dei dati nel database</h1>";
        }

        $conn->close();
        ?>    
    </div>
	<div class="return-link">
            <a href="login1.php">Torna al login</a>
        </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvenuto</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg, #e0f7fa, #80deea);
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 2em;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.1em;
            font-weight: bold;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 1em;
            color: #333;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .register-link {
            margin-top: 15px;
            font-size: 1em;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .return-link {
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
        }
        .return-link a {
            color: #007bff;
            text-decoration: none;
        }
        .return-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "broukdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            echo "<p class='error-message'>Connessione fallita: " . $conn->connect_error . "</p>";
        }

$sql = "CREATE TABLE IF NOT EXISTS messaggi (
	id INT AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(255) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    messaggio TEXT NOT NULL,
    data_ora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nome']) && isset($_POST['messaggio']) && isset($_POST['email'])) {
                $nome = htmlspecialchars($_POST['nome']);
                $messaggio = htmlspecialchars($_POST['messaggio']);
                $email = htmlspecialchars($_POST['email']);

                $email_esc = $conn->real_escape_string($email); 
                $check_email_query = "SELECT * FROM utenti WHERE email = '$email_esc'";
                $result = $conn->query($check_email_query);
                
                if ($result->num_rows > 0) {
                    $sql = "INSERT INTO messaggi (nome, messaggio) VALUES ('$nome', '$messaggio')";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "<h2>Il tuo messaggio è stato inviato con successo!</h2>";
                    } else {
                        echo "<p class='error-message'>Errore durante l'invio del messaggio: " . $conn->error . "</p>";
                    }
                } else {
                    $email_esc1 = $conn->real_escape_string($email); 
                    $check_email_query1 = "SELECT * FROM dipendenti WHERE email = '$email_esc1'";
                    $result1 = $conn->query($check_email_query1);
                    
                    if ($result1->num_rows > 0) {
                        $sql = "INSERT INTO messaggi (nome, messaggio) VALUES ('$nome', '$messaggio')";
                        
                        if ($conn->query($sql) === TRUE) {
                            echo "<h2>Il tuo messaggio è stato inviato con successo!</h2>";
                        } else {
                            echo "<p class='error-message'>Errore durante l'invio del messaggio: " . $conn->error . "</p>";
                        }
                    } else {
                        echo "<p class='error-message'>Errore: L'email non è registrata. Non hai un account? <a href='registrati1.php' class='register-link'>Registrati qui</a>.</p>";
                    }
                }
            } else {
                echo "<p class='error-message'>Si è verificato un errore. Assicurati di compilare tutti i campi necessari.</p>";
            }
        } else {
            echo "<p class='error-message'>Errore: Il form non è stato inviato correttamente.</p>";
        }

        $conn->close();
        ?>
    </div>
    <div class="return-link">
        <a href="ERP.php">Torna alla home</a>
    </div>
</body>
</html>

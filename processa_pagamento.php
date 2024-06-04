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
            echo "<h1>Pagamento avvenuto con successo</h1>";
        ?>    
    </div>
	<div class="return-link">
            <a href="ERP.php">Torna alla Home</a>
        </div>
</body>
</html>

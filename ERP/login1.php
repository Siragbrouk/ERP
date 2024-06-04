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
            padding: 4px;
            margin-bottom: 4px;
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
            width: 100%; /* Ridimensiona il pulsante al 80% della larghezza */
			margin-left: auto; /* Allinea il pulsante a sinistra */
			margin-right: auto; /* Allinea il pulsante a destra */
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
        <h1>Accedi</h1>
        <form action="login.php" method="get">
            <label>Email:</label>
            <input type="email" id="email" name="email" required>
            <label>Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Accedi</button>
        </form>
        <div class="register-link">
            Non hai un account? <a href="registrati1.php">Registrati</a>.
        </div>
        <div class="return-link">
            <a href="ERP.php">Torna alla home</a>
        </div>
    </div>
</body>
</html>

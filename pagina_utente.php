<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Palestra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .option {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden; /* Per risolvere il problema di altezze diverse */
            display: flex; /* Disposizione in flessione */
            flex-direction: column; /* Disposizione in colonna */
        }
        .option img {
            max-width: 150px; /* Larghezza massima */
            border-radius: 5px; /* Angoli arrotondati */
            margin-bottom: 10px; /* Margine inferiore */
        }
        .trainer-info {
            flex-grow: 1; /* Per far espandere il contenuto */
            margin-bottom: 10px; /* Margine inferiore tra le diverse row */
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 20px auto;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
         .return-links {
            text-align: center;
            margin-top: 20px;
        }
        .return-links a {
            color: #007bff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="option">
            <h2>Tipo di Abbonamento</h2>
            <?php
     
            $servername = "localhost";
            $username = "root";
            $password = ""; 
            $dbname = "broukdb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connessione fallita: " . $conn->connect_error);
            }

            $sql = "SELECT tipo, descrizione, sconto,costo FROM Abbonamenti";
            $result1 = $conn->query($sql);

            if ($result1->num_rows > 0) {
 
                while($row = $result1->fetch_assoc()) {
                    echo "<p><strong>" . $row["tipo"] . ":</strong> " . $row["descrizione"] . " - <strong>Sconto:</strong> " . $row["sconto"] . " - <strong>Costo:</strong> " . $row["costo"] . "</p>";
                }
            } else {
                echo "Nessun abbonamento trovato";
            }

            $conn->close();
            ?>
        </div>
        <div class="option">
            <h2>Personal Trainer</h2>
            <div class="trainer-info">
                <img src="trainer1.jpg" alt="Personal Trainer 1">
                <p>Nome: Francesco</p>
                <p>Cognome: Gialli</p>
                <p>Email: francesco.gialli@gmail.com</p>
            </div>
            <div class="trainer-info">
                <img src="trainer2.jpg" alt="Personal Trainer 2">
                <p>Nome: Paolo</p>
                <p>Cognome: Rossi</p>
                <p>Email: paolo.rossi@gmail.com</p>
            </div>
            <div class="trainer-info">
                <img src="trainer3.jpg" alt="Personal Trainer 3">
                <p>Nome: Davide</p>
                <p>Cognome: Blu</p>
                <p>Email: davide.blu@gmail.com</p>
            </div>
        </div>
        <div class="option">
            <h2>Corsi Singoli</h2>
             <?php
   
            $servername = "localhost";
            $username = "root";
            $password = ""; 
            $dbname = "broukdb";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connessione fallita: " . $conn->connect_error);
            }

  
            $sql = "SELECT tipo, costo FROM corsi";
            $result2 = $conn->query($sql);

            if ($result2->num_rows > 0) {

                while($row = $result2->fetch_assoc()) {
                    echo "<p><strong>" . $row["tipo"] . ":</strong> " . $row["costo"] . " €</p>";
                }
            } else {
                echo "Nessun corso trovato";
            }

            $conn->close();
            ?>
        </div>
        <form action="acquista.php" method="POST">
            <input type="submit" value="Acquista">
            <div class="return-links">
                <a href="ERP.php">Torna alla home</a>
            </div>
        </form>
    </div>
</body>
</html>

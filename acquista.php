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
            margin: 50px auto; 
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
        }
        .option img {
            float: left; /* Posiziona le immagini a sinistra */
            max-width: 150px; /* Larghezza massima */
            margin-right: 20px; /* Spazio tra le immagini */
            border-radius: 5px; /* Angoli arrotondati */
        }
        .trainer-info {
            float: left; /* Posiziona le informazioni a sinistra */
        }
        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%; /* Occupa tutta la larghezza del container */
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
        <label for="tipo_abbonamento">Tipo di Abbonamento:</label>
        <select name="tipo_abbonamento" id="tipo_abbonamento">
            <option value="Mensile">Mensile</option>
            <option value="Trimestrale">Trimestrale</option>
            <option value="Semestrale">Semestrale</option>
            <option value="Annuale">Annuale</option>
            <option value="Giornaliero">Giornaliero</option>
        </select>

        <label for="trainer">Trainer:</label>
        <select name="trainer" id="trainer">
            <option value="1">Francesco Gialli</option>
            <option value="2">Paolo Rossi</option>
            <option value="3">Davide Blu</option>
        </select>

        <label for="corso_singolo">Corso Singolo:</label>
        <select name="corso_singolo" id="corso_singolo">
            <option value="Corso 1">Corso Tai-Chi</option>
            <option value="Corso 2">Corso Nuoto</option>
            <option value="Corso 3">Corso Yoga</option>
			<option value="Corso 4">Corso Zumba</option>
			<option value="Corso 5">nessuno</option>
        </select>
    </div>

    <form action="Pagamento.php" method="POST">
        <input type="submit" value="Paga">
    </form>
	<div class="return-links">
		 <a href="pagina_utente.php">torna indietro</a>
        <a href="ERP.php">Torna alla home</a>
    </div>
</body>
</html>

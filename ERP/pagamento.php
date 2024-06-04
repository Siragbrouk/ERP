<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo di Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .payment-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .payment-option {
            display: flex;
            align-items: center;
        }
        .payment-option img {
            margin-left: 10px;
            width: 120px;
            height: 60px;
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
        <h2>Modulo di Pagamento</h2>
        <form action="processa_pagamento.php" method="POST">
            <label for="nome_carta">Nome sulla Carta:</label>
            <input type="text" id="nome_carta" name="nome_carta" required>

            <label for="numero_carta">Numero della Carta:</label>
            <input type="text" id="numero_carta" name="numero_carta" required>

            <label for="scadenza_carta">Scadenza della Carta:</label>
            <input type="text" id="scadenza_carta" name="scadenza_carta" placeholder="MM/YY" required>

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv" min="100" max="9999" required>

            <label>Tipo di Pagamento:</label>
            <div class="payment-options">
                <div class="payment-option">
                    <input type="radio" id="postepay" name="tipo_pagamento" value="postepay" required>
                    <label for="postepay"></label>
                    <img src="postepay.png" alt="Postepay">
                </div>
                <div class="payment-option">
                    <input type="radio" id="mastercard" name="tipo_pagamento" value="mastercard" required>
                    <label for="mastercard"></label>
                    <img src="master_card.png" alt="mastercard">
                </div>
            </div>

            <input type="submit" value="Paga Ora">
        </form>
    </div>
    <div class="return-links">
        <a href="acquista.php">Torna indietro</a>
        <a href="ERP.php">Torna alla home</a>
    </div>
</body>
</html>

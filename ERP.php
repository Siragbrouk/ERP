<html lang="en">
<head>
    <title>Dynamic</title>
    <style>
        body {
            font-family: Agency FB, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
		
        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        nav {
            text-align: center;
            background-color: #007bff;
            padding: 10px 0;
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 15px 30px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #0056b3;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #007bff;
        }

        .hero-section {
            text-align: center;
            padding: 100px 0;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('gym.jpg');
            background-size: cover;
            color: #fff;
        }

        .hero-section h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero-section p {
            font-size: 36px;
            margin-bottom: 30px;
            color: #fff;
        }

        .cta-buttons {
            text-align: center;
            margin-top: 30px;
        }

        .cta-buttons a {
            color: #fff;
            text-decoration: none;
            padding: 15px 30px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #0056b3;
            font-size: 25px;
            transition: background-color 0.3s ease;
        }

        .cta-buttons a:hover {
            background-color: #007bff;
        }

        .info-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            font-size: 25px;
            text-align: left;
        }

        .info-section img {
            max-width: 300px;
            margin-right: 20px;
            border-radius: 10px;
        }

        .info-section h2 {
            font-size: 42px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .info-section2 {
            text-align: center;
            padding: 50px 0;
            font-size: 25px;
        }

        .info-section2 h2 {
            font-size: 42px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .testimonial {
            margin-top: 30px;
            text-align: center;
        }

        .testimonial img {
            border-radius: 50%;
            width: 100px;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        ul li {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.jpg" alt="Logo" style="max-width: 300px;">
        <nav>
            <a href="login1.php">Accedi</a>
            <a href="registrati1.php">Registrati</a>
        </nav>
    </header>

    <div class="hero-section">
        <h1>Benvenuti alla Dynamic</h1>
        <p>Scopri il tuo potenziale, raggiungi i tuoi obiettivi di fitness e trasforma il tuo stile di vita.</p>
        <div class="cta-buttons">
            <a href="informazioni.html">Scopri di più</a>
        </div>
    </div>

    <div id="servizi" class="info-section">
        <img src="servizi.jpg" alt="Servizi">
        <div>
            <h2>Servizi Offerti</h2>
            <p>Presso la Dynamic offriamo una vasta gamma di servizi per aiutarti a raggiungere i tuoi obiettivi di fitness:</p>
            <ul>
                <li>Corsi di allenamento personalizzati</li>
                <li>Personal Training</li>
                <li>Corsi di gruppo (Yoga, Pilates, Zumba)</li>
                <li>Sale pesi e cardio</li>
                <li>Area sauna e benessere</li>
                <li>Piscina</li>
            </ul>
        </div>
    </div>

    <div id="programmi" class="info-section">
        <img src="programmi.jpg" alt="Programmi di Allenamento">
        <div>
            <h2>Programmi di Allenamento</h2>
            <p>I nostri programmi di allenamento sono progettati per adattarsi alle esigenze individuali di ogni cliente:</p>
            <ul>
                <li>Schede di allenamento personalizzate</li>
                <li>Consigli di esercizio</li>
                <li>Programmi di allenamento settimanali</li>
                <li>Sessioni di monitoraggio dei progressi</li>
                <li>Istruttori sempre presenti e pronti a intervenire</li>
            </ul>
        </div>
    </div>
    <footer>
        <div id="contatti" class="info-section2" style="background-color: #333; color: #fff; padding: 60px 0;">
            <h2 style="font-size: 38px; margin-bottom: 20px;">Contattaci</h2>
            <p style="font-size: 20px; margin-bottom: 15px;">Hai domande?desideri darci qualche feedback? Compila il modulo di contatto qui sotto.</p>
            <form action="messaggi.php" method="post" style="max-width: 600px; margin: auto;">
                <input type="text" name="nome" placeholder="Nome e Cognome" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;" required><br>
                <input type="email" name="email" placeholder="Email" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;" required><br>
                <input type="tel" name="telefono" placeholder="Numero di Telefono" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;" required><br>
                <textarea name="messaggio" placeholder="Messaggio" rows="4" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;" required></textarea><br>
                <button type="submit" style="padding: 12px 24px; background-color: #fff; color: #007bff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Invia</button>
            </form>
        </div>
    </footer>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = ""; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
$sql = "DROP DATABASE IF EXISTS broukdb";
$conn->query($sql);

$sql = "CREATE DATABASE IF NOT EXISTS broukdb";
$conn->query($sql);

$conn->select_db("broukdb");

$sql = "CREATE TABLE IF NOT EXISTS utenti (
    email VARCHAR(255) NOT NULL PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sql);

$sql = "INSERT INTO utenti (email, nome, cognome, password) VALUES
    ('rossi@gmail.com', 'mario', 'rossi', 'password123'),
    ('viola@gmail.com', 'francesco', 'viola', 'segreto456'),
    ('sirag.brouk@gmail.com', 'sirag', 'brouk', '123456789')";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS inventario_palestra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_articolo VARCHAR(50) NOT NULL,
    categoria VARCHAR(30) NOT NULL,
    quantita INT NOT NULL,
    data_acquisto DATE NOT NULL,
    stato VARCHAR(20) NOT NULL,
    prezzo DECIMAL(10, 2) NOT NULL,
    descrizione TEXT
)";
$conn->query($sql);

$sql = "INSERT INTO inventario_palestra (nome_articolo, categoria, quantita, data_acquisto, stato, prezzo, descrizione) VALUES
    ('Tapis Roulant', 'Cardio', 5, '2023-01-15', 'Nuovo', 1200.00, 'Tapis roulant professionale con diverse modalità di corsa'),
    ('Manubri', 'Pesi', 20, '2022-11-20', 'Usato', 50.00, 'Set di manubri da 5 kg a 25 kg'),
    ('Cyclette', 'Cardio', 3, '2023-02-10', 'Nuovo', 700.00, 'Cyclette con display digitale e monitoraggio della frequenza cardiaca'),
    ('Tappetini Yoga', 'Accessori', 15, '2023-03-05', 'Nuovo', 20.00, 'Tappetini per yoga antiscivolo'),
    ('Bilanciere Olimpico', 'Pesi', 10, '2022-10-25', 'Usato', 150.00, 'Bilanciere olimpico con pesi regolabili')";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS dipendenti (
    email VARCHAR(255) NOT NULL PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    cognome VARCHAR(30) NOT NULL,
    tariffa_oraria DECIMAL(10, 2) NOT NULL,
    orari_lavoro VARCHAR(100) NOT NULL,
    ruolo VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$conn->query($sql);

$sql = "INSERT INTO dipendenti (nome, cognome, email, tariffa_oraria, orari_lavoro, ruolo, password) VALUES
    ('Luca', 'Bianchi', 'luca.bianchi@gmail.com', 20.00, 'Lun-Ven 9-17', 'Istruttore Fitness', '123456789'),
    ('Francesco', 'Gialli', 'francesco.gialli@gmail.com', 25.00, 'Lun-Mer-Ven 8-16', 'Personal Trainer', '123456789'),
    ('Giovanni', 'Rossi', 'giovanni.rossi@gmail.com', 22.50, 'Mar-Gio 10-18', 'Istruttore Yoga', '123456789'),
    ('Anna', 'Neri', 'anna.neri@gmail.com', 18.00, 'Lun-Ven 14-20', 'Receptionist', '123456789'),
    ('Marco', 'Gialli', 'marco.gialli@gmail.com', 30.00, 'Lun-Mer-Ven 12-20', 'Manager', '123456789'),
    ('Davide', 'Blu', 'davide.blu@gmail.com', 27.00, 'Lun-Ven 10-18', 'Personal Trainer', '123456789'),
    ('Paolo', 'Rossi', 'paolo.rossi@gmail.com', 28.50, 'Lun-Mer-Ven 9-17', 'Personal Trainer', '123456789')";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS Abbonamenti (
    Tipo VARCHAR(20),
    Descrizione VARCHAR(255),
    Sconto VARCHAR(10),
	Costo int
)";
$conn->query($sql);

$sql = "INSERT INTO Abbonamenti (Tipo, Descrizione, Sconto, Costo) VALUES
    ('Mensile', 'Accesso illimitato alla palestra per un mese.', 'Nessuno', 30),
    ('Trimestrale', 'Accesso illimitato alla palestra per tre mesi con sconto del 10%.', '10%', 70),
    ('Semestrale', 'Accesso illimitato alla palestra per sei mesi con sconto del 20%.', '20%', 120),
    ('Annuale', 'Accesso illimitato alla palestra per un anno con sconto del 30%', '30%',200)";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS corsi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(50) NOT NULL,
    costo int NOT NULL
)";
$conn->query($sql);

$sql = "INSERT INTO corsi (tipo, costo) VALUES
    ('Yoga', 30),
    ('Nuoto', 35),
    ('Tai-Chi', 25),
    ('Zumba', 20)";
$conn->query($sql);

$conn->close();
?>

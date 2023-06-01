<?php
include("database.php");

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $mansione = $_POST['mansione'];
    $stato = $_POST['stato'];

    $statoInt = $stato === 'true' ? 'Attivo' : 'Non attivo';

    $sql = "UPDATE operators SET nome='$nome', cognome='$cognome', mansione='$mansione', username='$username', password='$password', stato='$statoInt' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="text-center text-danger fs-3 mt-3"> Operatore aggiunto con successo! </div>';
    } else {
        echo '<div class="text-center text-danger fs-3 mt-3"> Errore durante l\'aggiunta dell\'operatore: </div>' . $conn->error;
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Modifica operatore</title>
</head>

<body>

    <div class="app d-flex flex-column align-items-center py-4">
        <h2 class="text-uppercase">Modifica dati</h2>
        <form id="edit-form" method="post">
            <div class="mb-3">
                <label for="name" class="form-label" value="nome">Nome</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label" value="cognome">Cognome</label>
                <input type="text" class="form-control" id="lastname">
            </div>
            <div class="mb-3">
                <label for="job" class="form-label" value="mansione">Mansione</label>
                <input type="text" class="form-control" id="job">
            </div>
            <h4>Stato:</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    value="true">
                <label class="form-check-label" for="flexRadioDefault1">
                    Attivo
                </label>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                    value="false" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Non attivo
                </label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Modifica</button>
            <button class='btn btn-danger'><a href='operators.php'>Indietro</a></button>
        </form>
    </div>

    <!-- SCRIPT JS -->
    <!-- <script src="script.js"></script> -->
</body>

</html>
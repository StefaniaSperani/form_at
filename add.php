<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Aggiungi operatore</title>
</head>

<body>

    <div class="app d-flex flex-column align-items-center py-4">
        <h2 class="text-uppercase">Aggiungi operatore</h2>
        <form id="edit-form" method="post">
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="lastname">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Mansione</label>
                <input type="text" class="form-control" id="job">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">User ID</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Conferma Password</label>
                <input type="password" class="form-control" id="password_confirm">
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>

    <!-- SCRIPT JS -->
    <script src="script.js"></script>
</body>

</html>
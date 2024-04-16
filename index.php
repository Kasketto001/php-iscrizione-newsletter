<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione alla newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Iscrizione alla newsletter</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Indirizzo email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Inserisci il tuo indirizzo email" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="submit">Iscriviti</button>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $messaggio = "Grazie per esserti iscritto alla newsletter con l'indirizzo: $email";
                echo "<p class='mt-3'>$messaggio</p>";
            } else {
                echo "<p class='mt-3 text-danger'>L'indirizzo email inserito non è valido.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

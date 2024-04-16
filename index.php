
<?php
        
        include './helpers/functions.php';
        $message = handleSubscription();
?>

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

                <!-- The type is set to text to check the proper functioning of the email validate filter. :D -->
                <input type="text" class="form-control" id="email" name="email" placeholder="Inserisci il tuo indirizzo email" value="<?php echo old('email'); ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="submit">Iscriviti</button>
        </form>

        <?php
        if ($message['success']) {
            header('Location: thankyou.php');
            exit();
        } elseif (!empty($message['message'])) {

            echo "<div class='alert alert-danger mt-3' role='alert'>" . $message['message'] . "</div>";
        }
        ?>
    </div>
</body>
</html>

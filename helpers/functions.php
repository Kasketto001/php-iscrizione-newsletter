<?php
function handleSubscription() {
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $messaggio = "Grazie per esserti iscritto alla newsletter con l'indirizzo:<span class='fw-bolder'> $email </span>";
            echo "<p class='mt-3 text-success'>$messaggio</p>";
        } else {
            echo "<p class='mt-3 text-danger'>L'indirizzo email inserito non è valido.</p>";
        }
    }
}
?>

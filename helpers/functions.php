<?php
function handleSubscription() {
    $response = array('success' => false, 'message' => '');

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $messaggio = "Grazie per esserti iscritto alla newsletter con l'indirizzo: $email";
            $response['success'] = true;
            $response['message'] = $messaggio;
        } else {
            $response['success'] = false;
            $response['message'] = "L'indirizzo email inserito non è valido.";
        }
    }
    return $response;
}
?>

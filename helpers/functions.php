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

            $response['message'] = "L'indirizzo email inserito non è valido.";
            $_GET['email'] = $email;
        }
    }
    return $response;
}

function old($input_email) {
    if(isset($_GET[$input_email])) {
        return $_GET[$input_email];
    } else {
        return '';
    }
}
?>
<?php

    $error = "";

    if ($_POST) {

        if (empty($_POST["subject"])) {
            $error .= "Please enter your email.<br>";
        }

        if (empty($_POST["email"])) {
            $error .= "Please enter your email.<br>";
        }

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false && !empty($_POST["email"]) ) {
            $error .= "Email is invalid!<br>";
        }

        if (!empty($_POST["phone"]) && !is_numeric($_POST["phone"])) {
            $error .= "Phone number must be numeric!<br>";
        }

        if (empty($_POST["message"])) {
            $error .= "Please enter a message.<br>";
        }

        if ($error != "") {
            $error = "<div class='alert alert-danger' role='alert'><strong>There are errors in your form!</strong><br>" . $error . "</div>";
        } else {

            $to = "me@domain.com";
            $headers = "From: " . $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            if (mail($to, $subject, $message, $headers)) {
                $error = "<div class='alert alert-success' role='alert'>Message sent!</div>";
            } else {
                $error = "<div class='alert alert-danger' role='alert'>Message not sent!</div>";
            }

        }

    }

?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']

    $email_from = "mlpalmer99@gmail.com";

    $email_subject = "Submission From Ransomware Detector Form";

    $email_body = "User Name: $name./n",
                "User Email: $email./n",
                    "User Message: $message./n";

    $to = "mlpalmer99@gmail.com";

    $headers = "From: $email_from /r/n";

    $headers = "Reply-To: $email /r/n'";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>
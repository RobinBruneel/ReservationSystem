	
<div class="wrapper style2">
    <section class="container">

        <header class="major">
            <h2>Contact</h2>
            <span class="byline"></span>
        </header>         

        <form  class="contactform" name="contactform">
            <?php
            if (isset($_POST['email'])) {

                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "25rbruneel@gmail.com";
                $email_subject = "Bericht van Site";

                function died($error) {
                    // your error code can go here
                    echo "Het bericht werd <b>niet</b> verstuurd omdat er velden geen of verkeerde gegevens bevatten. <br /><br />";
                    echo $error . "<br /><br />";
                    echo "<a href='javascript: history.go(-1)'>Ga terug</a> om uw gegevens te controleren.<br /><br />";
                    die();
                }

                // validation expected data exists
                if (!isset($_POST['last_name']) ||
                        !isset($_POST['email']) ||
                        !isset($_POST['comments'])) {
                    died('We are sorry, but there appears to be a problem with the form you submitted.');
                }

                $last_name = $_POST['last_name']; // required
                $email_from = $_POST['email']; // required
                $comments = $_POST['comments']; // required

                $error_message = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                if (!preg_match($email_exp, $email_from)) {
                    $error_message .= 'Gelieve een geldig e-mail adres in te geven.<br />';
                }
                $string_exp = "/^[A-Za-z .'-]+$/";
                if (!preg_match($string_exp, $last_name)) {
                    $error_message .= 'Gelieve een geldige naam in te geven.<br />';
                }
                if (strlen($comments) < 2) {
                    $error_message .= 'Gelieve een geldig bericht in te geven.<br />';
                }
                if (strlen($error_message) > 0) {
                    died($error_message);
                }
                $email_message = "Bericht verzonden van de contactpagina van Robin\n\n";

                function clean_string($string) {
                    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                    return str_replace($bad, "", $string);
                }

                $email_message .= "Naam: " . clean_string($last_name) . "\n";
                $email_message .= "E-mail: " . clean_string($email_from) . "\n";
                $email_message .= "Bericht: " . clean_string($comments) . "\n";


                // create email headers
                $headers = 'From: ' . $email_from . "\r\n" .
                        'Reply-To: ' . $email_from . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
                ?>
                <!-- include your own success html here -->
                <p>Bedankt voor uw bericht.<br> Robin</p>
                <?php
            }
            ?>
        </form> 

    </section>
</div>


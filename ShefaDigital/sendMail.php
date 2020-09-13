        // Mail sending Logic
        <!-- $to_email = 'kahkashanhamid3@gmail.com';
        $subject = 'Patient Form Submitted';
        $headers =
            'From: ziahamid93@gmail.com' .
            "\r\n" .
            'X-Mailer: PHP/' .
            phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body =
            '<html><body style="font-family:calibri">
            <p>Thank you for contacting Shefa Digital X-Ray</p>
            <p><strong> Patient Name: </strong>' .
            $patientName .
            '</p>
            <p><strong> Date: </strong>' .
            $date .
            '</p>
            <p><strong> Part of X-Ray: </strong>' .
            $partsOf .
            '</p>
            <p><strong> Referred by Doctor: </strong>' .
            $refByDoctor .
            '</p>
            <p><strong> Amount: </strong>' .
            $amount .
            '</p>
            <p><strong> Due: </strong>' .
            $due .
            '</p>
            <p><strong> Report: </strong>' .
            $report .
            '</p>
            </body></html>';
        ?>
    <?php if (mail($to_email, $subject, $body, $headers)) { ?>
            <script>
                console.log("Email successfully sent");
            </script>
        <?php } else { ?>
            <script>
                console.log("Email sending failed");
            </script>
        <?php }
    } ?> -->
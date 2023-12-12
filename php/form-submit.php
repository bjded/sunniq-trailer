<?php
    if (isset($_POST["submit"])) {
        $data = array(
            'secret' => "",
            'response' => $_POST['cf-turnstile-response']
        );
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://challenges.cloudflare.com/turnstile/v0/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $response_data = json_decode($response);

        // Turnstile Verification
        if ($response_data -> success) {
            // Data
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $company = $_POST['company'] ? $_POST['company'] : 'N/A';
            $trailer = $_POST['trailers'];
            $pickup_date = $_POST['pickup-date'];
            $dropoff_date = $_POST['dropoff-date'];

            // Trailer Name
            switch ($trailer) {
                case 2:
                    $trailer_name = "20' Lacosta (2023)";
                    break;
                default:
                    $trailer_name = "N/A";
                    break;
            }

            // Format Email
            $to = "sunniqtrailers@gmail.com";
            $subject = "SunniQ Trailer Rental Request";
            $message = "
                <html>
                    <body>
                        <h1>SunniQ Trailer Rental</h1>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Name: </span>".$name."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Phone: </span>".$phone."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Email: </span>".$email."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Company: </span>".$company."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Trailer: </span>".$trailer_name."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Pickup Date: </span>".$pickup_date."</p>
                        <p style='font-size: 18px;'><span style='font-weight: 600;'>Drop-off Date: </span>".$dropoff_date."</p>
                        <br>
                        <p style='font-size: 16px;'>&copy; 2023 SunniQ Trailer Rental</p>
                    </body>
                </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
            $headers .= 'From: "SunniQ Trailer" <no-reply@sunniqtrailer.com>' . "\r\n";

            mail($to, $subject, $message, $headers);

            // Redirect on success.
            header('Location: ../?success');
            exit();
        }
        else {
            header('Location: ../');
            exit();
        }
    }
    else {
        header("Location: ../");
        exit();
    }
?>

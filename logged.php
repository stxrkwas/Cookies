<?php

    if (!isset($_COOKIE[$cookie_email])) {
        echo "Cookie named '" . $cookie_email . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_email . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_email];
    }

    ?>
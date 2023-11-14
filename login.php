<?php

$cookie_email = "user";
$cookie_value = "maluZ";
setcookie($cookie_email, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login com Cookies</title>
</head>

<body>
    <form method="POST" action=">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <?php

    if (!isset($_COOKIE[$cookie_email])) {
        echo "Cookie named '" . $cookie_email . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_email . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_email];
    }

    ?>

</body>

</html>
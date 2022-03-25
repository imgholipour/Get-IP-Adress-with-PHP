<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your IP Addresses</title>
    </head>
    <body>
        <p>Your IP addresses follows.</p>
        <div style="background: #ccc; border: 1px solid #999; font-weight: bold; font-size: 20pt ">
            Your IP Adress: <span style=" color:red">
            <?php
            echo    $_SERVER['REMOTE_ADDR'];
            ?>
            </span>
        </div>

    </body>
</html>
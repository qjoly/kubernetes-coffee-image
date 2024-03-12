<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Café !</title>
    <link rel="stylesheet" href="css/style.css">

    <style>

        .ip-hostname, h1 {
            font-family: Geneva, Tahoma, Verdana, sans-serif;
        }

        body {
            height: 100%;
            width: 100%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <center>
        <br>
        <img src="img/cafe.png" alt="Café" height="200px">

        <footer style="padding-top: 10px">
            <div class="ip-hostname">
                <p>IP Address:
                    <?php echo $_SERVER['SERVER_ADDR']; ?>
                </p>
                <p>Pod:
                    <?php echo gethostname(); ?>
                </p>
            </div>
        </footer>
    </center>
</body>

</html>
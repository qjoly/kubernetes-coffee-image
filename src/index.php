<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Café !</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .cup-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="cup-container">
        <div class="cup">
            <span class="steam"></span>
            <span class="steam"></span>
            <span class="steam"></span>
            <div class="cup-handle"></div>
        </div>
        <br> <br>
        
        <div class="ip-hostname">
            <p>IP Address: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
            <p>Pod: <?php echo gethostname(); ?></p>
        </div>
    </div>

</body>

</html>

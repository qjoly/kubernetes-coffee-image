<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Café !</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .cup-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

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
        <div class="cup-container center" style="padding-top: 5%">
            <div class="cup">
                <span class="steam "></span>
                <span class="steam "></span>
                <span class="steam "></span>
                <div class="cup-handle "></div>
            </div style="margin-bottom: 10px;">
        </div>


        <?php
        $api_url = $_ENV["COFFEE_SERVER_API"];

        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        $response = curl_exec($ch);
        curl_close($ch);

        $json_data = json_decode($response, true);

        if (isset($json_data['number'])) {
            $number = $json_data['number'];
            echo "<h1> Number of coffees allowed today : " . $number . " </h1>";
        } else {
            echo "<p>Unable to fetch data from API</p>";
        }
        ?>

        <footer style="padding-top: 10px">
            <div class="ip-hostname">

                <?php 
                if (isset($json_data['hostname'])) {
                    echo "<i>Response from : " . $json_data['hostname'] . "</i>";
                }
                ?>

                <p>IP Address:
                <?php echo getenv('POD_IP') ?: $_SERVER['SERVER_ADDR']; ?>
                </p>
                <p>Pod:
                    <?php echo gethostname(); ?>
                </p>
                <p>Backend:
                    <?php echo getenv('COFFEE_SERVER_API'); ?>
                </p>
            </div>
        </footer>
    </center>
</body>

</html>

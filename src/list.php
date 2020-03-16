<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="ca">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./lib/normalize.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
    <title>List of VideoForums</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $name  = "";
    $nameErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1><?php echo $name; ?></h1>
    <span class="error"><?php echo $nameErr; ?></span>
    <h1>Què vols fer?</h1>
    <ul>
        <li><a href="rec.php">Gravar Pregunta</a></li>
    </ul>
</body>

</html>
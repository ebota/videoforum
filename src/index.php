<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta lang="ca">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./lib/normalize.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline&display=swap" rel="stylesheet">
    <title>Llistat de Videofòrums</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $name  = "";
    $nameErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Quina classe vols veure?";
            //Si el paràmetre nom de la classe està buit mostrem el formulari
    ?>

            <div class="content">
                <form action="./index.php" id="login" method="post">
                    <label form="name"> Quin videofòrum vols? </label>
                    <input type="text" id="name" name="name">
                    <input type="submit" value="Entrar-hi!!!">
                </form>
            </div>
            <?php
        } else {
            //sinó, comprovem que només tingui lletres i números
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Els noms només poden tenir lletres i números    ";
            } else {
                //Si tot correcte, oferim opcions
            ?>
                <h1>Benvinguts als reptes de la classe <?php echo $name; ?></h1>

                <h2>Què vols fer?</h2>
                <ul>
                    <li><a href="#">Veure els reptes proposats?</a></li>
                    <li><a href="rec.php">Gravar un nou repte?</a></li>

                </ul>
    <?php
            }
        }
    }
    //netegem el paràmetre
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <span class="error"><?php echo $nameErr; ?></span>

</body>

</html>
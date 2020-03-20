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
    echo "Test";
    ?>
    <h1>Record video</h1>


    <div class="left">
        <div id="startButton" class="button">
            Start
        </div>
        <h2>Preview</h2>
        <video id="preview" width="160" height="120" autoplay muted></video>
    </div>

    <div class="right">
        <div id="stopButton" class="button">
            Stop
        </div>
        <h2>Recording</h2>
        <video id="recording" width="160" height="120" controls></video>
        <a id="downloadButton" class="button">
            Download
        </a>
    </div>
    <div id="log">
        Log:
    </div>
    <script src="./js/recorder.js"></script>
</body>

</html>
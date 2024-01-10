<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'MusicReader.php';
    require_once 'Mp3.php';
    require_once 'Ogg.php';

    function it($m, $p)
    {
        echo "\033[3", $p ? '2m✔︎' : '1m✘' . register_shutdown_function(function () {
            die(1);
        }), " $m\033[0m\n";
    }

    $mp3File = 'wannabee.mp3';
    $mp3Reader = new Mp3($mp3File);

    it('On écoute un fichier Mp3', $mp3Reader->listen() === 'Lecture du fichier Mp3 wannabee.mp3');

    $oggFile = 'happy.ogg';
    $oggReader = new Ogg($oggFile);

    it('On écoute un fichier Ogg', $oggReader->listen() === 'Lecture du fichier Ogg happy.ogg');
    ?>
</body>

</html>
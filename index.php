<?php
// Descrizione:
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
?>

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
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam vitae necessitatibus eos fuga. Inventore corporis rem obcaecati eveniet dolor impedit. Asperiores cumque voluptate totam? Doloremque illo earum non optio quas."
    ?>

    <h2>Paragrafo originale</h2>
    <h4>Testo del paragrafo</h4>
    <p>
        <?php
        echo $paragraph;
        ?>
    </p>
    <h4>Lunghezza del paragrafo è</h4>
    <p>
        <?php
        echo strlen($paragraph);
        ?>
        caratteri
    </p>

    <h2>Paragrafo censurato</h2>
    <h4>Testo del paragrafo</h4>
    <p>
        <?php
        $badword = $_GET["badword"];
        $paragraph_censured = str_replace($badword, "***", $paragraph);
        echo $paragraph_censured;
        ?>
    </p>
    <h4>Lunghezza del testo censurato è</h4>
    <p>
        <?php
        echo strlen($paragraph_censured);
        ?>
        caratteri;
    </p>
    
</body>
</html>
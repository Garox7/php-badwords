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
        $paragraph = 'Il web developer è una figura chiave in azienda: lo sviluppatore web infatti si occupa di costruire siti e applicazioni web nella loro interezza, creando l\'interfaccia che vede l\'utente e tutti i meccanismi invisibili che permettono al sistema di funzionare. Il metodo Boolean ti permetterà di farlo con un mix di teoria e pratica, attraverso esercizi che replicano le richieste del mondo del lavoro e con un programma sempre aggiornato studiato da sviluppatori professionisti.';
        $string_len = strlen($paragraph);
        $badword = trim($_GET['cancelled_word']);
        $replace = '***';
        
        $new_paragraph = str_ireplace (
            $badword,
            $replace,
            $paragraph,
        );
        $new_string_len = strlen($new_paragraph);
    ?>

    <p><?php echo $paragraph; ?></p>
    <p><?php echo $string_len; ?> Caratteri</p>

    <form action="" method="get">
        <label for="badword">Cancella la parola</label>
        <input type="text" name="cancelled_word" id="badword">
        <button>Cancella</button>
    </form>

    <p><?php echo $new_paragraph; ?></p>
    <p><?php echo $new_string_len; ?> Caratteri</p>

</body>
</html>
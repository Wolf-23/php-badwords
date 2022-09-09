<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Second Page</title>
    </head>
    <body>
        <?php 
            $badword = $_POST['badword'];
            $badword = trim(strtolower($badword));
            $parag = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore, omnis tenetur accusantium at ad quidem laboriosam nobis deleniti? Ut sint quas, consequatur odio aut deleniti asperiores eligendi rerum recusandae.';
            $parag = strtolower($parag);
            $newParag = str_replace($badword, '***', $parag);
            $newParag = ucfirst($newParag);
        ?>
        <p>
            <h3> La lunghezza del paragrafo è: <?php echo strlen($newParag)?></h3>
            <?php echo  $newParag;?>
        </p>
    </body>
</html>
<?php

$paragraph = "Tyger tyger burning bright in the forests of the night: what immortal hand or eye could frame thy fearful symmetry?";
$paragraphLength = strlen($paragraph);

if(!empty($_GET['censored'])) {
    $censoredWord = $_GET['censored'];
    $censoredParagraph = str_ireplace($censoredWord, '***', $paragraph);
    $censoredParagraphLength = strlen($censoredParagraph);
    $check = true;
} else {
    $check = false;
}


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
    <h1>Paragrafo:</h1>
    <p><?php echo $paragraph ?></p>
    <h4>Il paragrafo è composto da <?php echo $paragraphLength ?> caratteri</h4>
    
    <?php if($check) {?>
        <br><br>

        <h1>Paragrafo censurato:</h1>
        <p><?php echo $censoredParagraph ?></p>
        <h4>Il paragrafo censurato è composto da <?php echo $censoredParagraphLength ?> caratteri</h4>
    <?php } ?>
    
    
</body>
</html>
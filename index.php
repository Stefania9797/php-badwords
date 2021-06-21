<?php 
$text= "Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur veniam Lorem ipsum dolor Lorem adipisicing elit. Dolorum, Lorem illo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, eligendi. Lorem Molestiae?";
$censored_word = $_GET["censored_word"];
$censored_paragraph = str_replace($censored_word,"***",$text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
<h1>PHP INTRO</h1>
<h2>Paragrafo normale</h2>
<p><?php echo $text; ?></p>
<p>Il paragrafo è lungo: <?php echo strlen($text); ?> caratteri</p>

<h2>Paragrafo Censurato</h2>
<p><?php echo $censored_paragraph; ?></p>
<p>Il paragrafo censurato è lungo: <?php echo strlen($censored_paragraph); ?> caratteri</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>

<?php
 $badword = $_GET["badword"];
 $paragrafo = "Lorem ipsum elit dolor sit amet, consectetur adipisicing amet elit. Quas tempora pariatur quaerat elit tempora error elit amet repellat atque  elit doloribus, aspernatur elit nobis corrupti corporis amet tempora dignissimos, elit tempora nihil amet non perferendis fugit.";
?>
<h1>il paragrafo è lungo: <?php echo strlen($paragrafo) ?></h1>
<p><?php echo $paragrafo ?></p>

<?php 
$paragrafo2 = str_replace($badword, "***", $paragrafo); 
?>
<h1>Il paragrafo 2 è lungo: <?php echo strlen($paragrafo2) ?></h1>
<p><?php echo $paragrafo2 ?></p>


    
</body>
</html>
<?php $wordChanged = $_GET["phrase"];
$censored = str_replace("peto", "***", $wordChanged);
?>

<h1>Monello, si dice: <?php echo $censored ?></h1>


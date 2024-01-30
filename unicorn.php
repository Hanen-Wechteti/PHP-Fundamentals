<?php

$creature = isset($_GET['creature'])?$_GET['creature'] : '';
$gif = ($creature == "Human") ? '<iframe src="https://giphy.com/embed/adg7CpC5U575yNPbOK" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/MontreuxComedy-adg7CpC5U575yNPbOK">via GIPHY</a></p>' 
    : (($creature == "Cat") ? '<iframe src="https://giphy.com/embed/SrAO8XBZ7mPSWzpERP" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/tonrakht-cat-cute-beluga-SrAO8XBZ7mPSWzpERP">via GIPHY</a></p>' 
    : '<iframe src="https://giphy.com/embed/I7splHKcXJ6Yj7qaFL" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/unicorn-licorne-sarupinku-I7splHKcXJ6Yj7qaFL">via GIPHY</a></p>');
echo $gif;

?>

 <!-- Form -->

<form method="get" action="">
<input type="radio" name="creature" value="Human">
        <input type="radio" name="creature" value="Cat">
        <input type="radio" name="creature" value="Unicorne">

        <input type="submit" value="Confirmer">
</form>
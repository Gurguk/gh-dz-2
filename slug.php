<?php
require __DIR__ . '/vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();   

?>
<form action="slug.php" method="post">
    <input type="text" name="text_for_slug" placeholder="write text to convert"/>
    <input type="submit" />
</form>
<textarea><?php echo $slugify->slugify($_POST['text_for_slug']);?></textarea>

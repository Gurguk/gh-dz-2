<?php
require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

$birthday = '';
if($_POST['date']!='')
    $birthday = Carbon::parse($_POST['date'])->format('l');
?>

<?php if($birthday==''){ ?>
    <h1>In which day you born</h1>
    <p>Tips: put your date of born in yyyy/mm/dd format</p>
    <form action="carbon.php" method="post">
        <label for="date" style="150px; display: block;">First date</label>
        <input type="text" placeholder="yyyy/mm/dd" name="date" id="date"/>
        <br/><br/>
        <input type="submit" />
    </form>
<?php } else { ?>
    <h2>You born on <?php echo $birthday;?></h2>
<?php }?>
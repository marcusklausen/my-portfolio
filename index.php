<?php require_once('header.php'); ?>
<?php 

if(isset($_GET['p'])) {

    $p = $_GET['p'];

    switch ($p) {
        case 'work' : require_once('work.php');
        break;
        case 'home' : require_once('frontpage.php');
        break;
    }
} else { require_once('frontpage.php'); }


?>
<?php require_once('sidebar.php'); ?>
<?php require_once('footer.php'); ?>
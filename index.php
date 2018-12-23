<?php

require 'functions.php';

?>

<html>
    <head></head>

    <body>
    <?php
    switch ($_REQUEST['action']) {
        case 'new':
            actionNew();
            break;
        case 'list':
        default:
            actionList();
            break;
    }
    ?>

    <ul>
        <li><a href="?action=list">List</a></li>
        <li><a href="?action=new">Add new</a></li>
    </ul>

    </body>
</html>
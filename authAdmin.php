<?php

$adminID = $_POST['uname'];
$adminPass = $_POST['psw'];

if($adminID == 'aptadmin' && $adminPass == 'admin@123')
{
    echo('
    <h1>check</h1>
    ');
}


?>
<!-- Connect to DB -->
<?php

$connection = mysqli_connect('localhost', 'root','');
if(!$connection){

die("Database Connection Failed". mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'jkengineers');

if(!$select_db){

die("Database selection failed" . mysqli_error($connection));

}


?>
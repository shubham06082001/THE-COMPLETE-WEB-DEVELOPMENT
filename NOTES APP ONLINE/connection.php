<?php
//connect to database

$link = mysqli_connect("locahost", "mathswe1_notes", "eWvAzpbf", "mathswe1_onlinenotes");
if(mysqli_connect_error()){
    die("ERROR: Unable to connect:" . mysqli_connect_error());
}
    ?>

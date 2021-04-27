<?php

function hoosonbaina($field)
{
    if ($field == "") {
        return true; // 1
    }
    return false; // 0
}

// if (isset($_GET['haanaas']) && $_GET['haanaas'] != "") {
//     echo "Origin: " . " ";
// }


/* count() - toolox value-g ni hevleh*/
if (count($_POST) > 0) {
    print_r("<br>");
    foreach ($_POST as $index => $medeelel) {
        if (hoosonbaina($medeelel)) {
            echo "$index hooson baina! :) ";
            die();
        }
        echo "$index : $medeelel <br>";
    }
    $password = $_POST['password'];
}

// $too = [12,5,2,1,85,85,2,5,54,2,4,4,];
// foreach($too as $in => $to){
//     echo "$in : $to <br>";
// }
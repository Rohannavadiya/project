<?php
    $firstname = "Ivan Bayross";
    unset($firstname);
    if(isset($firstname))
    {
        echo '$firstname is set';
    }
    ?>
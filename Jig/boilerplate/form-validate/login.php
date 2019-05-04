<?php

    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }

?>
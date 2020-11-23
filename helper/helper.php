<?php 

function isAdmin() {
    if (!isset($_SESSION['admin'])){
        return false;
    } else {
        return true;
    }
}

?>
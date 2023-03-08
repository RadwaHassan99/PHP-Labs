<?php
    function remember_val($var){
        if(isset($_POST[$var]) && !empty($_POST[$var])){
            return $_POST[$var];
        }
    }
?>

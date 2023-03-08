<?php
    function Validate_Form($var){
        if(isset($_POST[$var]) && !empty($_POST[$var])){
            return $_POST[$var];
        }
    }
?>
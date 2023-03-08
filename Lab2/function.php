<?php
function validate_form()
{
    if (!empty($_POST)) {
        if (empty($_POST["name"]) && empty($_POST["email"]) && empty($_POST["message"])) {
            return "Empty fields";
        } else if (empty($_POST["name"]) && empty($_POST["email"])) {
            return "empty name and email";
        } else if (empty($_POST["email"]) && empty($_POST["message"])) {
            return "empty email and message";
        } else if (empty($_POST["name"]) && empty($_POST["message"])) {
            return "empty name and message";
        } else if (empty($_POST["name"])) {
            return "empty name";
        } else if (empty($_POST["email"])) {
            return "empty email";
        } else if (empty($_POST["message"])) {
            return "empty messgae";
        } else if (strlen($_POST["name"]) > __MAX_NAME_LENGTH_) {
            return "Name must be less than 100 charachters";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            return "Email is Invalid";
        } else if (strlen($_POST["message"]) > __MAX_MESSAGE_LENGTH_) {
            return "message must be less than 255 charachters";
        } else {
            return "";
        }
    }
}

function remember_value($var)
{
    if (isset($_POST[$var]) && !empty($_POST[$var])) {
        return $_POST[$var];
    } else {
        return "";
    }
}

function print_confirmation_page()
{
    echo "<center><h2>" . _WELCOME_MSG_ . "</H2></center>";
    echo str_repeat("*", 50);
    foreach ($_POST as $key => $value) {
        $value = strtolower(trim($value));
        echo "<br/><strong> $key </strong> : $value";
    }
}

function save_to_file() {
    $fp = fopen(_Saving_File_, "a+");
    $data_string = implode(" , ",[$_POST["email"],$_POST["name"]]);
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Africa/Cairo');
    $date = date('F j Y g:i a');
    $written_string = implode(" , ",[$date,$visitor_ip,$data_string]);
    fwrite($fp, $written_string.PHP_EOL);
    fclose($fp);
}

function read_from_file() {
    return file(_Saving_File_);
}
?>
<?php
require_once("vendor/autoload.php");
$error = "";
if (!empty($_POST)) {
    $error = validate_form();
    if (empty($error)) {
        save_to_file();
        print_confirmation_page();
        exit();
    }
}

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "form"){
    require_once("views/form.php");
}else if($parameter === "users"){
    require_once("views/users.php");
}
else{
    require_once("views/form.php");
}


<?php
$users = read_from_file();

foreach($users as $user){
    $user_details = explode(",",$user);
    $keys = array("Visit Date", "Ip Address" ,"Email", "Name");
    $new_user_details = array_combine($keys, $user_details);
      echo "New User <br/>";
      echo str_repeat("-", 90);
        echo "<Div>";
    foreach($new_user_details as $key => $value){
      echo "<h3><strong> $key </strong>: $value </h3>";
    }
      echo "</div>";
}
?>

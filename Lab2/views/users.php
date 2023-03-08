<?php
$users = read_from_file();
$keys = array("Visit Date", "Ip Address" ,"Email", "Name");
foreach($users as $user){
    $user_details = explode(",",$user);
    $new_user_details = array_combine($keys, $user_details);
      echo "<h3>New User</h3>";
      echo str_repeat("-", 90);
        echo "<Div>";
    foreach($new_user_details as $key => $value){
      echo "<p><strong> $key </strong>: $value </p>";
    }
      echo "</div> <br/>";
}
?>

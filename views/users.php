<?php
$users = read_from_file();
$keys = array("Visit Date", "Ip Address" ,"Email", "Name");
foreach($users as $user){
    $user_details = explode(",",$user);  
      echo "<h3>New User</h3>";
      echo str_repeat("-", 90);
        echo "<div>";
    $new_user_details = array_combine($keys, $user_details);
    foreach($new_user_details as $key => $value){
      echo "<p>$key: $value </p>";
    }
      echo "</div> </br>";
}
?>

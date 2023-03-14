<?php
$title=Counter::get_title();
$counter = new Counter();
$counter->icremeant_and_update();
$count = $counter->get_count();
echo "
<h1>$title</h1>
<h2>Count = $count </h2>";
?>
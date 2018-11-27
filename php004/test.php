<?php 

$time_pre = microtime(true);
$time_post = microtime(true);

$exec_time = $time_post - $time_pre;

echo "$exec_time";
?>
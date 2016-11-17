<?php
  
require('class-Clockwork.php');  
$apikey="7ccc91e3778e3dbe8dc6cbf6db823fdb79bbe65f";
$clockwork = new Clockwork("$apikey");

$message = array('to' => '18583807153', 'message' => 'This is a test message from Jay dep trai');
$done = $clockwork->send($message);

?>
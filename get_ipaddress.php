<?php
// function to get ip address user's
function get_realIP(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){ $ip=$_SERVER['HTTP_CLIENT_IP']; }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; }
    else{ $ip=$_SERVER['REMOTE_ADDR']; }
    return $ip;
}
// how to use?
$obj = get_realIP();
// display results
echo $obj;

?>

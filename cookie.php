<?php
$cookie_name="bca_5";
$cookie_value="bca_student";
setcookie($cookie_name,$cookie_value,time()+1800,"/");
if(!isset($_COOKIE[$cookie_name]))
{
    echo "cookie".$cookie_name."is not set";
}
else
{
    echo "cookie".$cookie_name."is set <br/>";
    echo "value ".$_COOKIE[$cookie_name];
}
?>
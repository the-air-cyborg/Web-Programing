<?php
session_save_path('C:\xampp\htdocs');
session_start();
$sessionTimeout=30;
if(isset($_SESSION['LAST_ACTIVITY']))
{
    $lastActivity=$_SESSION['LAST_ACTIVITY'];
    $currentTime=time();
    $timeSinceLastActivity=$currentTime-$lastActivity;

    if($timeSinceLastActivity>$sessionTimeout)
    {
        session_unset();
        session_destroy();
        echo'session expire please relogin';
    }
    else{
        $_SESSION['LAST_ACTIVITY']=$currentTime();
        echo'session active';
    }
}
    else
    {
        $_SESSION['LAST_ACTIVITY']=time();
        echo 'session started';
    }
?>
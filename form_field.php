<?php
$pattern="/[0-9]/";
$bname=$_POST["bid"];
$btitle=$_POST["btitle"];
$bprice=$_POST["bprice"];
$bcopies=$_POST["bcopies"];

if(empty($bname) || empty($btitle) || empty($bprice) || empty($bcopies))
{
    echo "fileds cannot be empty";
}
elseif(!preg_match($pattern,$bprice))
{
    echo "Price should be numbers";
}
elseif($bprice<=0|| $bcopies<= 0)
{
    echo "Price and copies cannot be negative";
}
else
{
    echo "Form data is validated";
}
?>
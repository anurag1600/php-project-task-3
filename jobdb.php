<?php

$col= mysqli_connect('localhost','root','','job');

if ($col) 
{
 echo "connected";

}

else
{
	echo "not connected";
}
?>
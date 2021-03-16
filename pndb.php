<?php

$col= mysqli_connect('localhost','root','','pninfosys');

if ($col) 
{
 echo "connected";

}

else
{
	echo "not connected";
}
?>
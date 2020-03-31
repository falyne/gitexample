<?php
	include("views/head.php");
	include("views/header.php");

//<a href="#">http://youtube.com?tutorial=2&language=php</a>


if (isset($_GET['page']) && ($_GET['page == addition']))/*Translation: if the variable "tutorial" exists within the current url and its content is NOT empty (the "!" symbol in php means NOT)*/
 {
  echo "$_GET['tutorial']";
}
elseif(isset($_GET['tutorial']) && empty($_GET['tutorial']))
{
  //in case the variable exists but is empty
  echo "<br>
            Error: Your variable should not be empty";
}
else //in case the variable doesn't exist at all
{
  echo "<br>
           Error: we couldn't find the variable TUTORIAL in your current url";
}

//we do the same for the second variable

if (isset($_GET['language']) && !empty($_GET['language'])) {
  echo "<h3>we are learning this programming language :".$_GET['language']."</h3>";
}

elseif(isset($_GET['language']) && empty($_GET['language']))
{
  echo "<br>
          Error : your variable should not be empty";
}
else
{
echo "<br>
        Sorry, but we couldn't find the variable LANGUAGE in your current url";
}






include("views/footer.php");



?>

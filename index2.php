<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="mozilla.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentPHP</title>
</head>
<body>
<form action="index2.php" method ="POST">
Name: <input type="text"  name="name" />
Surname: <input type ="text" name="surname" />
<input  type="submit" name="submit"  />
</form>
<?php 
/*
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer" ;
}
else if( preg_match( "/Netscape/i", "$viewer"  ) )
{
$browser = "Netscape";
}
elseif(preg_match('/Chrome/i' , "$viewer"))
{
$browser = 'Google Chrome';
}
else  if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla" ;
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
}
$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
$platform = "Windows!";
}
else if ( preg_match( "/Linux/i", "$viewer"  ) )
{
$platform = "Linux!";
}
else if  ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
echo("You are using $browser on $platform");
   */
if( isset($_POST['submit']))
{
if( $_POST["name" ] && $_POST["surname"] )
{
echo "Welcome ". $_POST[ 'name']. " ". $_POST['surname'];
}
else{
echo "Please insert name and surname!";
}
}
  ?>
    
</body>
</html>
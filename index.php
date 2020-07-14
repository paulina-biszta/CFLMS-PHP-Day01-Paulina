<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocumentPHP</title>
    <?php 

    //ex 1

    /*$name = "Paulina";
    echo "<h1>My name is $name!</h1>"*/

    //ex 2

    /*$d=date("D");
    if ($d=="Mon" )
    echo "<h1>Happy Monday</h1>!";
    else
    echo "<h1>Have a nice day!</h1>" ;*/

    //ex 3

   /* $d=date("D");
    if ($d=="Mon" )
    echo "Have a nice Monday!";
    elseif ($d=="Tue" )
    echo "Have a nice Tuesday!";
    elseif ($d=="Wed" )
    echo "Have a nice Wednesday!";
    elseif ($d=="Thu" )
    echo "Have a nice Thursday!";
    elseif ($d=="Fri" )
    echo "Have a nice Friday!";
    elseif ($d=="Sat" )
    echo "Have a nice Saturday!";
    else
    echo "Have a nice Sunday!" ; */

    //ex 4

// for loop

/*for( $i=0; $i< 51; $i++ )
{
$name = "Paulina";
echo ("$name ");
}*/

//while loop

/*$i = 0;
$name = "Paulina";
while( $i < 51)
{  
$i ++;
echo ("$name, " );
}*/

//do...while

/*$i = 0;
$name = "Paulina";
do
{
$i++;
echo ("<p>$name</p>" );
} while( $i < 51 );*/

//foreach loop

/*$array = array( 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
foreach( $array as $value )
{
echo "Value is $value <br />";
}*/

//ex6 
/*

$marks = array(
"mark" => array
(
"physics" => 35,
"maths" => 30,
"chemistry"  => 39
),
"anthony" =>  array
(
"physics" => 30,
"maths" => 32,
"chemistry"  => 29
),
"eric" =>  array
(
"physics" => 31 ,
"maths" => 22,
"chemistry" => 39
)
);
//Accessing multidimensional array values 
echo "Marks for mark in physics : ";
echo $marks[ 'mark']['physics'] . "<br />" ;
echo "Marks for anthony in maths : ";
echo $marks[ 'anthony']['maths'] . "<br />" ;
echo "Marks for eric in chemistry : " ;
echo $marks['eric']['chemistry'] .  "<br />";
//Output:
//Marks for mark in physics : 35
//Marks for anthony in maths : 32
//Marks for eric in chemistry : 39
*/


//weather 


function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	echo ("$celsius ");



    ?>
</head>
<body>
    
</body>
</html>
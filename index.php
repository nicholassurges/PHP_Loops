<?php

// Part-1

echo "While Loop Displays Odd Numbers 1-15:";
echo "<br>";

$num = 1;
while ( $num <= 15 ) {
  print "$num<br />";
  $num += 2;
}

echo "<br>";
// Part-2
echo "For Loop Displays Numbers 10-20:";
echo "<br>";
for( $i=10; $i<=20; $i++ )
{
echo $i;
echo "<br>";
}      

    
// Part-3
echo "<br>";
echo "Use of if/elseif statment to figure out the bonus percentage for a sales person:";
echo "<br>";
$sales = 5000;

if($sales>=2000 && $sales<=3000)

$bonus_pct = 0.10;

else if($sales>=3001 && $sales<=4000)

$bonus_pct = 0.20;

else if($sales>4000)

$bonus_pct = 0.30;

else

$bonus_pct = 0;

echo "Sales of 4000 or more will reciece a bonus of: ".$bonus_pct;
echo '%';


echo "<br />";

//Part-4
echo "<br />";
echo "Use a Switch statment to dispay the state name of a particular city:";
echo "<br>";

$city = "Chicago";

switch($city){

case "Boston":

echo "Massachusetts";

break;

case "Chicago":

echo "The State for Chicago is: Illinois";

break;

case "Miami":

echo "Florida";

break;

case "New York":

echo "New York";

break;

default:

echo "United States";

break;

}

?>

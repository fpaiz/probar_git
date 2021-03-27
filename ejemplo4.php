<?php


echo "<br>";

$position="dba";    /// we assigned a value for a string variable
/// Here we assigned a value to the string variable but in practical cases it can come from user input or from database 

switch($position)
{
case "member":
echo "Welcome Member"; 
break;

case "siteadmin":
echo "Welcome siteadmin";
break;

case "designer":
echo "Welcome Designer";
break;

case "dba":
echo "Welcome dba"; 
break;

default:
echo "Welcome you all others ";
break;
}



echo "<br><br><br> <br><br><br>";




$tm=time();
//$today=getdate(mktime(0,0,0,2,03,2008));
//Use the above line and comment below line for changing the days and test the script. 
$today=getdate($tm);
echo "Day of the Week (name) = $today[weekday]<br><br>";

//switch($today[weekday])
// el correcto es
 switch($today['weekday'])
{

case "Sunday":
echo "Hi today is Sunday , Enjoy";
break;

case "Monday":
echo "Hi today is Monday, Good luck for a productive week";
break;

case "Tuesday":
echo "Hi today is Tuesday";
break;

case "Wednesday":
echo "Hi today is Wednesday ";
break;

case "Thursday":
echo "Hi today is Thursday , two more days for a weekend";
break;

case "Friday":
echo "Hi today is Friday , Tomorrow your weekend starts";
break;

case "Saturday":
echo "Hi today is Saturday, Are you still working ?";
break;

default:
echo "Sorry nothing matches , some problem is there";

}

?>
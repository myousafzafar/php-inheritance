<!DOCTYPE html>
<html>
<head> <title> inheritance example </title> </head>

<body>

<?php

class Chef
{
    function makedish()
    {
    echo "the chef is making chicken. what else would you like?";
    }

function danceWithMe()
{
        echo "would you like to dance?";
}


function makeBBQ()
{
        echo "Chef, please make BBQ for me";
}

}

class noobChef extends Chef
{
 // nothing here
}


$chef = new Chef();
$chef->danceWithMe();

echo "<br>";

$noobchef = new noobChef(); // now even a noob chef can dance ;)
$noobchef->danceWithMe();  // through the use of inheritance, the noobChef class can access Chef class functions



?>



</body>
</html>

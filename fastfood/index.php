<?php

  $name = $_GET['name'];
  $phone = $_GET['phone'];

echo "The name is " . $phone;
echo "<br>";
if(strlen($phone) == 12 && substr($phone, 0, 3) == "998") {
echo "The phone number is " . $phone;
}else {
    echo "Eror";
}
echo "<br>";

$code = substr($phone, 3, 2);

if($code == "99") {
    echo "Company is Uzmobile";
} else if($code == "33") {
    echo "Company is Humans";
} else if($code == "90" || $code == "91") {
    echo "Company is Beeline";
} else if($code == "93" || $code == "94") {
    echo "Company is Ucell"; 
} else if($code == "97" || $code == "98") {
    echo "Company is MobiUz";
} else if($code == "98") {
    echo "Company is Perfectum";
} else {
    echo "Your company is not in our list";
}

?>
<h1> condition </h1>

<?php

$age = 17;
if ($age >=18) {
    echo "Legal age";
}else if ($age >= 0 && $age <= 10){
    echo "something";
}else{
    echo "Minor";
}


//sh

//echo ($age >= 18) ? '18+' : '17-';

$ageLabel =($age>=18) ? '18+' : '17-'


/*
switch ($role) {
    case 'admin':
        #code...
        break;
    case 'student':
        #code...
        break;
    case 'instructor':
        #code...
        break;
}
*/


?>
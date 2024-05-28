<?php

$arrCourses = ['php','Lavarel','JS','CSS'];

foreach ($arrCourses as $course) {
    print_r($arrCourses);
    echo $course . "\n";
    array_shift($arrCourses);//  la funzione array_shift(), rimuove il primo elemento di un array()

}





if (!$arrCourses) {// dato che un array vuoto da sempre false come valore booleano se metto davanti ! cambia valore da false a true
   echo 'nessun corso disponibile';
}
<?php

$arrCourses = ['php','Lavarel','JS','CSS'];

$arrCourses[] = 'HTML';

$arrCourses[2] = 'Javascript';

foreach ($arrCourses as $key => $course) {
    echo "$key: $course \n";
}
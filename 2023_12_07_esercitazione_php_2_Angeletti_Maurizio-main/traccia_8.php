<?php

$arrCourses = ['php','Lavarel','JS','CSS'];

$search = 'JS';

foreach ($arrCourses as $course) {
    if ($course == $search) {
        echo 'trovato '.$search; 
    }
}
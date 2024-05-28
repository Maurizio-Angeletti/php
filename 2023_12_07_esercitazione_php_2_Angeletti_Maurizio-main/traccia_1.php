<?php
$temperature = 26;

if ($temperature < 15) {
    echo 'fa freddo';
}else if ($temperature >= 15 && $temperature < 26) {
    echo 'fa caldo';
}else{
    echo 'fa molto caldo';
}
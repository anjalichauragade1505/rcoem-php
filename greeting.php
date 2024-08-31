<?php
date_default_timezone_set('Asia/Kolkata');

$currentTimeAmPm = date('g:i a'); 


$dateTime = DateTime::createFromFormat('g:i a', $currentTimeAmPm);


$currentHour = (int) $dateTime->format('H');


include 'templates/greeting.view.php';
?>
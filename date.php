<?php
$dateInitial = '2005-07-20';
$dateNow = date('o-m-d H:i:s');
$dateNowDifference = new DateTime($dateNow);
$dateFinalDifference = new DateTime($dateInitial);
$intervalBetweenDates = $dateNowDifference->diff($dateFinalDifference);
echo $intervalBetweenDates->format("%Y years");  

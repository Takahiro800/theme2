<?php

$TODAY = strtotime(date('Y-m-d'));
function check_new_post($date) {
  global $TODAY;
  $date = strtotime($date);
  $dayDiff = abs($TODAY - $date) / 86400;
  return ($dayDiff < 1) ;
}
?>
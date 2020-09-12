<?php

require_once("../wp-load.php");


$postType = 'post'; // set to post or page
// $userID = 1; // set to user id
$categoryID = '4'; // set to category id.
$postStatus = 'publish';  // set to future, draft, or publish

$leadTitle = 'Exciting new post today: '.date("n/d/Y");

$leadContent = '<h1>Vacations</h1><p>Vacations are the best thing in this life.</p>';
$leadContent .= ' <!--more--> <p>Expensive they are, but they are totally worth it.</p>';



$timeStamp = $minuteCounter = 0;  // set all timers to 0;
$iCounter = 1; // number use to multiply by minute increment;
$minuteIncrement = 1; // increment which to increase each post time for future schedule
$adjustClockMinutes = 0; // add 1 hour or 60 minutes - daylight savings

// CALCULATIONS
$minuteCounter = $iCounter * $minuteIncrement; // setting how far out in time to post if future.
$minuteCounter = $minuteCounter + $adjustClockMinutes; // adjusting for server timezone

$timeStamp = date('Y-m-d H:i:s', strtotime("+$minuteCounter min")); // format needed for WordPress



$new_post = array(
   'post_title' => $leadTitle,
   'post_content' => $leadContent,
   'post_status' => $postStatus,
   'post_date' => $timeStamp,
   
   'post_type' => $postType,
   'post_category' => array($categoryID)
   );









   $post_id = wp_insert_post($new_post);

   /*******************************************************
   ** SIMPLE ERROR CHECKING
   *******************************************************/
   
   $finaltext = '';
   
   if($post_id){
   
   $finaltext .= 'Yay, I made a new post.<br>';
   
   } else{
   
   $finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';
   
   }
   
   echo $finaltext;

?>




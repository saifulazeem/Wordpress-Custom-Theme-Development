<?php
require_once("../wp-load.php");
include("connection.php");

// $qury=$con->prepare("SELECT * FROM main_urls");
// $qury->execute();
// $reslt=$qury->get_result();

// while($row=$reslt->fetch_assoc())
// {
    



$post_type="post";
$user_id=3;
$category_id=5;
$post_status='publish';



$page_title='URLS LIST';

// $A=array("a" => "orange");

$my_qry=$con->prepare("SELECT * FROM main_urls");
$my_qry->execute();
$reeslt=$my_qry->get_result();

while($row=$reeslt->fetch_assoc())
{
$A=array("a" => $row['url']);

}
$post_content=" Here Are Urls".$A['a'];
$new_post=array(

    'post_title' => $page_title,
    'post_content' => $post_content,
    'post_status' => $post_status,
    'post_author' => $user_id,
    'post_type' => $post_type,
    'post_category' => array($category_id)


);
// }


$post_des="</p>Lets Get started with Scraping</p>";





$post_id = wp_insert_post($new_post);


$finaltext = '';
   
if($post_id){

$finaltext .= 'Yahoo!!! Sucessfuly Posted.<br>';

} else{

$finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';

}

echo $finaltext;







?>
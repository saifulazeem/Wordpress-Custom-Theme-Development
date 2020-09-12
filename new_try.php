<?php


// This file will be used for the insertion of post under the Category of #


require_once("../wp-load.php");
include("connection.php");


$qury=$con->prepare("SELECT * FROM file_extensions,file_types WHERE file_extensions.exe_id=file_types.typ_id");
$qury->execute();
$reslts=$qury->get_result();

while($rows=$reslts->fetch_assoc())
{

                                $ary=explode("\n",$rows['rating']);

                                


                            // $postType = 'post';
                            // $categoryID = '4';
                            // $postStatus = 'publish';

                            echo '<h1> File Extension TABLE 1 </h1>';
                            echo $leadTitle = $rows['exe_name'];
                            echo $dev=$rows['developer'];
                            echo $categry=$rows['category'];
                            echo $format=$rows['format'];
                            // echo $sub_url=$rows['sub_url_id'];
                            echo $abt=$rows['about'];

                            echo '<br>';
                            echo '<br>';
                            echo '<br>';
                            echo '<br>';
                            echo '<br>';

                            // echo $rows['sub_url_id'];
                            echo '<h3> File Types TABLE 2 </h3>';
                            echo $rows['types_name'];
                            echo $rows['type_des'];
                            echo $rows['typ_dec_head'];
                            echo $os_infos=trim($rows['os_info']," ");





                            // $Second_query=$con->prepare("SELECT * FROM file_types WHERE sub_url_id=?");
                            // $Second_query->bind_param("s",$sub_url);
                            // $Second_query->execute();
                            // $reslt=$Second_query->get_result();
                            // $count=0;
                            // while($row=$reslt->fetch_assoc())
                            // {
                            // $count++;
                            //     echo '<h3>ROW #'.$count.' File Types TABLE 2 </h3>';
                            // echo $os_infos=trim($row['os_info']," ");
                            // $arys=explode(" ",$os_infos);

                            // echo $row['sub_url_id'];
                            // echo $row['types_name'];
                            // echo $row['type_des'];
                            // echo $row['typ_dec_head'];



                                
                                
                            // }






}

// $Second_query->close();
$qury->close();
echo '<h1>Code Exit</h1>';




?>






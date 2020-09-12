<?php


// This file will be used for the insertion of post under the Category of #


require_once("../wp-load.php");
include("connection.php");


$qury=$con->prepare("SELECT * FROM file_extensions,file_types WHERE file_extensions.exe_id=file_types.typ_id AND file_extensions.exe_id BETWEEN 2785 AND 3288 ");
$qury->execute();
$reslts=$qury->get_result();

while($rows=$reslts->fetch_assoc())
{

            $ary=explode("\n",$rows['rating']);

            


        $postType = 'post';
        $categoryID = '10';
        $postStatus = 'publish';


        $leadTitle = $rows['exe_name'];
        $dev=$rows['developer'];
        $categry=$rows['category'];
        $format=$rows['format'];
        // $sub_url=$rows['sub_url_id'];
        $abt=$rows['about'];

        $os_infos=trim($rows['os_info']);
        // $arys=explode(" ",$os_infos);

        $myString=$os_infos;
        if (strstr( $myString, 'Mac' ) AND strstr( $myString, 'Linux' ) )
        {
            $arys=explode("Mac","$myString");
             $os_win= $arys[0];
            


            $arrys=explode("Linux","$arys[1]");
             $os_mac=$arrys[0];
            
             $os_lin=$arrys[1];
            $c1=1;
        }  
        else {
            //Text not found for condition 1
            
            $c1=0;
            
            }


        if ( strstr( $myString, 'Windows' ) AND strstr( $myString, 'Linux' ) AND !strstr( $myString, 'Mac' ) )  
        {//2 are present

            $arys=explode("Linux","$myString");
            $os_win=$arys[0];
           
            $os_lin=$arys[1];
            $os_mac="N/A";


             $c2=1;

             
            } else {
              //Text not found condition 2
            
              $c2=0;
              }


              if ( strstr( $myString, 'Windows' ) AND strstr( $myString, 'Mac' ) AND !strstr( $myString, 'Linux' ) )  
              {//3 are present
      
                  $arys=explode("Mac","$myString");
                  $os_win=$arys[0];
                  $os_mac=$arys[1];
                  $os_lin="N/A";
                   $c3=1;
      
                  } else {
                    //Text not found condition 3
                    
                    $c3=0;
                    }
            
             if($c1==0 AND $c2==0 AND $c3==0)
                {
                    
                    if(strstr( $myString, 'Windows' ))
                    {
                            $os_win=$myString;
                            $os_mac="N/A";
                            $os_lin="N/A";
                    }
                    else if(strstr( $myString, 'Linux' ))
                    {
                            $os_win="N/A";
                            $os_mac="N/A";
                            $os_lin=$myString;
                    }
                    else if(strstr( $myString, 'Mac' ))
                    {
                            $os_win='N/A';
                            $os_mac=$myString;
                            $os_lin="N/A";
                    }
                    // $myString;
                      
                    }




// $Second_query=$con->prepare("SELECT * FROM file_types WHERE sub_url_id=?");
// $Second_query->bind_param("s",$sub_url);
// $Second_query->execute();
// $reslt=$Second_query->get_result();

// while($row=$reslt->fetch_assoc())
// {




// if($arys[0]=="Windows")
// {
//     if(sizeof($arys)==4)
//     {
//     $os=$arys[0];
//     $prog=$arys[3];
//     }
//     elseif(sizeof($arys)>4)
//     {

//     }
// }
// if($arys[0]=="Linux")
// {
//     $os=$arys[0];
//     $prog=$arys[3];
// }
// if($arys[0]=="Mac")
// {
//     $os=$arys[0];
//     $prog=$arys[3];
// }



        $leadContent = '<div class="container">
                                <section>
                                        <article>
                                            <h2 style="color: #4d4d4d;">'.$rows['types_name'].'</h2>
                                            <table class="table table-striped table-bordered table-hover table-condensed">
                                        
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Developer</th>
                                                            <td>'.$dev.'</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Category</th>
                                                            <td>'.$categry.'</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Format</th>
                                                            <td>'.$format.'</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Ratings</th>
                                                            <td>'.$ary[0].$ary[1].$ary[2].'</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h2 style="color: #4d4d4d;" >.'.$rows['typ_dec_head'].'</h2>
                                            <p class="web-intro" style="text-align: justify;">'.$rows['type_des'].'</p>

                                            <div class="osinfo">
                                            <table class="table table-striped table-bordered table-hover table-condensed">
                                                <!-- <thead>
                                                <tr>
                                                    <th>OS</th>
                                                    <th>Programs Information</th>
                                                </tr>
                                                </thead> -->
                                                <tbody>
                                                <tr>
                                                    <th scope="row">OS</th>
                                                    <td>Windows</td>
                                                    <td>Mac</td>
                                                    <td>Linux</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th scope="row">Programs Information</th>
                                                    <td>'.$os_win.'</td>
                                                    <td>'.$os_mac.'</td>
                                                    <td>'.$os_lin.'</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>


                                        </article>
                                
                                </section>

                                <h2 style="color: #4d4d4d;">About</h2>
                                <div class="web-intro" style="text-align: justify;"><p>'.$abt.'</p></div>

                        </div> ';






$new_post = array(
    'post_title' => $leadTitle,
    'post_content' => $leadContent,
    'post_status' => $postStatus,
    'post_type' => $postType,
    'post_category' => array($categoryID)
    );



    $post_id = wp_insert_post($new_post);

   /*******************************************************
    ** SIMPLE ERROR CHECKING
    *******************************************************/
    
    $finaltext = '';
    
    if($post_id)
    {
        
        $finaltext .= 'Yay, I made my new custom post.<br>';
        
    } 
    else
    {
        
        $finaltext .= 'Something went wrong and I didn\'t insert a new post.<br>';
        
    }
        
        echo $finaltext;

    
    
// }






}

// $Second_query->close();
$qury->close();




?>





<!-- <div class="container">
                <div class="row">
                    <div class="col-8">
                    
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>Extension Name</th>
                                <th>Extension Type</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                    <tr>

                    <td>Bt File Extension</td>
                    <td>ABCD Programs</td>
                    </tr>
                    <tr>

                    <td>Btf File Extension</td>
                    <td>ABCD Programs</td>
                    </tr>
                    <tr>

                    <td>xyz File Extension</td>
                    <td>ABCD Programs</td>
                    </tr>
                    <tr>
                    <td>4 File Extension</td>
                    <td>ABCD Programs</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    
                    <div class="col-4></div>
                    </div>
                    </div> -->
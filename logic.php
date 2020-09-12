<?php
$myString="Windows The Ur-Quan MastersPaid Linux The Ur-Quan MastersPaid ";
if (strstr( $myString, 'Mac' ) AND strstr( $myString, 'Linux' ) )  

	{//3 are present

            $arys=explode("Mac","$myString");
            echo $arys[0];
            echo '<br>';


            $arrys=explode("Linux","$arys[1]");
            echo 'Mac '.$arrys[0];
            echo '<br>';
            echo 'Linux : '.$arrys[1];

            echo '<br>';
            $c1=1;
              
            } else {
              echo "Text not found for condition 1";
              $c1=0;
              echo '<br>';
              }


if ( strstr( $myString, 'Windows' ) AND strstr( $myString, 'Linux' ) AND !strstr( $myString, 'Mac' ) )  
        {//2 are present

            $arys=explode("Linux","$myString");
            echo $arys[0];
            echo '<br>';
            echo 'Linux : '.$arys[1];


            echo '<br>';
             $c2=1;

             
            } else {
              echo "Text not found condition 2";
              $c2=0;
              echo '<br>';
        }

if ( strstr( $myString, 'Windows' ) AND strstr( $myString, 'Mac' ) AND !strstr( $myString, 'Linux' ) )  
        {//2 are present

            $arys=explode("Mac","$myString");
            echo $arys[0];
            echo '<br>';
            echo 'Mac : '.$arys[1];


            echo '<br>';
             $c3=1;

            } else {
              echo "Text not found condition 3";
              $c3=0;
              echo '<br>';
        }
        
  if($c1==0 AND $c2==0 AND $c3==0)
  {
  
  	echo $myString;
    
  }







?> 

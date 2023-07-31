<?php include "connect.php" ?>


<?php


//check connectoin
   if(!$con){
      echo 'Connection error: '.mysqli_connect_error();
      exit;
   }

   //////////////HOME
 //-----CURRENT YEAR
 //Columbus
   $ytd1DE = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL < 1";
   $ytd2DE = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ytd3DE = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $ytdOver3DE = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL >= 3";
    $result1 = mysqli_query($con, $ytd1DE);
    $result1 = mysqli_fetch_array($result1);
    $colytd1DE = $result1[0];
    $result1 = mysqli_query($con, $ytd2DE);
    $result1 = mysqli_fetch_array($result1);
    $colytd2DE = $result1[0];
    $result1 = mysqli_query($con,$ytd3DE);
    $result1 = mysqli_fetch_array($result1);
    $colytd3DE = $result1[0];
    $result1 = mysqli_query($con, $ytdOver3DE);
    $result1 = mysqli_fetch_array($result1);
    $colytdOver3DE = $result1[0];

//Deforest
    $dfytd1DE = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE FIRST_PULL < 1";
    $dfytd2DE = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE FIRST_PULL >= 1 AND FIRST_PULL < 2";
    $dfytd3DE = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE FIRST_PULL >= 2 AND FIRST_PULL < 3";
    $dfytdOver3DE = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE FIRST_PULL >= 3";
    $result1 = mysqli_query($con, $dfytd1DE);
    $result1 = mysqli_fetch_array($result1);
    $dfytd1DE = $result1[0];
    $result1 = mysqli_query($con, $dfytd2DE);
    $result1 = mysqli_fetch_array($result1);
    $dfytd2DE = $result1[0];
    $result1 = mysqli_query($con,$dfytd3DE);
    $result1 = mysqli_fetch_array($result1);
    $dfytd3DE = $result1[0];
    $result1 = mysqli_query($con, $dfytdOver3DE);
    $result1 = mysqli_fetch_array($result1);
    $dfytdOver3DE = $result1[0];


//-----TRENDING
 //Columbus
    $coltrend1 = "SELECT CAT_A, count(*) as COUNT FROM col_running_cmi WHERE CAT_A is not null  AND WK_NUM = WEEK(CURDATE())  GROUP BY CAT_A ORDER BY COUNT DESC";
    $coltrendTtl = "SELECT count(FORM_NUM) FROM col_running_cmi WHERE WK_NUM = WEEK(CURDATE())";
    $result1 = mysqli_query($con, $coltrend1);
    $result1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    $CAT_A = array();
    $COUNT = array();
    $CAT_A = array_fill(0,7,'Nothing yet!');
    $COUNT = aRray_fill(0,7,0);

    $i = 0;
    foreach ($result1 as $row) {
       $CAT_A[$i] = $row["CAT_A"];
       $COUNT[$i]=$row["COUNT"];
       //printf ("%s (%s)\n", $row["CAT_A"], $row["COUNT"]);
       $i++;
      }
      
    $result2 = mysqli_query($con, $coltrendTtl);
    $result2 = mysqli_fetch_array($result2);
    $coltrendTtl = $result2[0];

    if ($coltrendTtl == 0) {
      $trendPcnt = 0;
    }else {
         $trendPcnt = round(($COUNT[0]/$coltrendTtl) * 100,1);
      }
    
 //Deforest
     $deftrend1 = "SELECT CAT_A, count(*) as COUNT FROM def_running_cmi WHERE CAT_A is not null  AND WK_NUM = WEEK(CURDATE()) GROUP BY CAT_A ORDER BY COUNT DESC";
     $deftrendTtl = "SELECT count(FORM_NUM) FROM def_running_cmi WHERE WK_NUM = WEEK(CURDATE())";
     $result1 = mysqli_query($con, $coltrend1);
     $result1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

     $CAT_A_DEF = array();
     $COUNT_DEF = array();
     $CAT_A_DEF = array_fill(0,7,'Nothing yet!');
     $COUNT_DEF = aRray_fill(0,7,0);

   $i = 0;
   foreach ($result1 as $row) {
      $CAT_A_DEF[$i] = $row["CAT_A"];
      $COUNT_DEF[$i]=$row["COUNT"];
      //printf ("%s (%s)\n", $row["CAT_A"], $row["COUNT"]);
      $i++;
      }

   $result2 = mysqli_query($con, $deftrendTtl);
   $result2 = mysqli_fetch_array($result2);
   $deftrendTtl = $result2[0];

   if ($deftrendTtl == 0) {
      $trendPcntDf = 0;
    }else {
      $trendPcntDf = round(($COUNT_DEF[0]/$deftrendTtl) * 100,1);
      }
    

 //-----YEAR IN HISTORY 3de
 //Columbus
   $yr4_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2019 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $yr3_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2020 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $yr2_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2021 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $yr1_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2022 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $yr_curr = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";

   $yr4_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2019 WHERE WEEK_NUM < week(curdate())";
   $yr3_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2020 WHERE WEEK_NUM < week(curdate())";
   $yr2_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2021 WHERE WEEK_NUM < week(curdate())"; 
   $yr1_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2022 WHERE WEEK_NUM < week(curdate())";  
   $curr_ttl = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE WEEK_NUM < week(curdate())";
 
   $result4 = mysqli_query($con, $yr4_in_H);
   $result4 = mysqli_fetch_array($result4);
   $yr4_in_H = $result4[0];
   $result3 = mysqli_query($con, $yr3_in_H);
   $result3 = mysqli_fetch_array($result3);
   $yr3_in_H = $result3[0];
   $result2 = mysqli_query($con, $yr2_in_H);
   $result2 = mysqli_fetch_array($result2);
   $yr2_in_H = $result2[0];
   $result1 = mysqli_query($con, $yr1_in_H);
   $result1 = mysqli_fetch_array($result1);
   $yr1_in_H = $result1[0];
   $result1 = mysqli_query($con, $yr_curr);
   $result1 = mysqli_fetch_array($result1);
   $yr_curr = $result1[0];

   $result4 = mysqli_query($con, $yr4_ttl);
   $result4 = mysqli_fetch_array($result4);
   $yr4_ttl = $result4[0];
   $result3 = mysqli_query($con, $yr3_ttl);
   $result3 = mysqli_fetch_array($result3);
   $yr3_ttl = $result3[0];
   $result2 = mysqli_query($con, $yr2_ttl);
   $result2 = mysqli_fetch_array($result2);
   $yr2_ttl = $result2[0];
   $result1 = mysqli_query($con, $yr1_ttl);
   $result1 = mysqli_fetch_array($result1);
   $yr1_ttl = $result1[0];
   $result1 = mysqli_query($con, $curr_ttl);
   $result1 = mysqli_fetch_array($result1);
   $curr_ttl = $result1[0];

   $yr4_in_H = round(($yr4_in_H / $yr4_ttl) * 100, 2);
   $yr3_in_H = round(($yr3_in_H / $yr3_ttl) * 100, 2);
   $yr2_in_H = round(($yr2_in_H / $yr2_ttl) * 100, 2);
   $yr1_in_H = round(($yr1_in_H / $yr1_ttl) * 100, 2);
   $yr_curr = round(($yr_curr / $curr_ttl) * 100, 2);

//Deforest
   $dfyr4_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2019 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $dfyr3_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2020 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $dfyr2_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2021 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $dfyr1_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2022 WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";
   $dfyr_curr = "SELECT COUNT(FIRST_PULL) FROM DEF_curr_yr WHERE FIRST_PULL >= 3 and WEEK_NUM < week(curdate())";

   $dfyr4_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2019 WHERE WEEK_NUM < week(curdate())";
   $dfyr3_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2020 WHERE WEEK_NUM < week(curdate())";
   $dfyr2_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2021 WHERE WEEK_NUM < week(curdate())"; 
   $dfyr1_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2022 WHERE WEEK_NUM < week(curdate())";  
   $dfcurr_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_curr_yr WHERE WEEK_NUM < week(curdate())";

   $result4 = mysqli_query($con, $dfyr4_in_H);
   $result4 = mysqli_fetch_array($result4);
   $dfyr4_in_H = $result4[0];
   $result3 = mysqli_query($con, $dfyr3_in_H);
   $result3 = mysqli_fetch_array($result3);
   $dfyr3_in_H = $result3[0];
   $result2 = mysqli_query($con, $dfyr2_in_H);
   $result2 = mysqli_fetch_array($result2);
   $dfyr2_in_H = $result2[0];
   $result1 = mysqli_query($con, $dfyr1_in_H);
   $result1 = mysqli_fetch_array($result1);
   $dfyr1_in_H = $result1[0];
   $result1 = mysqli_query($con, $dfyr_curr);
   $result1 = mysqli_fetch_array($result1);
   $dfyr_curr = $result1[0];

   $result4 = mysqli_query($con, $dfyr4_ttl);
   $result4 = mysqli_fetch_array($result4);
   $dfyr4_ttl = $result4[0];
   $result3 = mysqli_query($con, $dfyr3_ttl);
   $result3 = mysqli_fetch_array($result3);
   $dfyr3_ttl = $result3[0];
   $result2 = mysqli_query($con, $dfyr2_ttl);
   $result2 = mysqli_fetch_array($result2);
   $dfyr2_ttl = $result2[0];
   $result1 = mysqli_query($con, $dfyr1_ttl);
   $result1 = mysqli_fetch_array($result1);
   $dfyr1_ttl = $result1[0];
   $result1 = mysqli_query($con, $dfcurr_ttl);
   $result1 = mysqli_fetch_array($result1);
   $dfcurr_ttl = $result1[0];

   $dfyr4_in_H = round(($dfyr4_in_H / $dfyr4_ttl) * 100, 2);
   $dfyr3_in_H = round(($dfyr3_in_H / $dfyr3_ttl) * 100, 2);
   $dfyr2_in_H = round(($dfyr2_in_H / $dfyr2_ttl) * 100, 2);
   $dfyr1_in_H = round(($dfyr1_in_H / $dfyr1_ttl) * 100, 2);
   $dfyr_curr = round(($dfyr_curr / $dfcurr_ttl) * 100, 2);









//-----WEEK IN HISTORY
//Columbus
   $wkyr4_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2019 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $wkyr3_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2020 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $wkyr2_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2021 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $wkyr1_in_H = "SELECT COUNT(FIRST_PULL) FROM COL_2022 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $wk_curr = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";

   $wkyr4_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2019 WHERE WEEK_NUM = week(curdate()) - 1";
   $wkyr3_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2020 WHERE WEEK_NUM = week(curdate()) - 1";
   $wkyr2_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2021 WHERE WEEK_NUM = week(curdate()) - 1"; 
   $wkyr1_ttl = "SELECT COUNT(FIRST_PULL) FROM COL_2022 WHERE WEEK_NUM = week(curdate()) - 1";  
   $wk_ttl = "SELECT COUNT(FIRST_PULL) FROM col_curr_yr WHERE WEEK_NUM = week(curdate()) - 1";

   $result4 = mysqli_query($con, $wkyr4_in_H);
   $result4 = mysqli_fetch_array($result4);
   $wkyr4_in_H = $result4[0];
   $result3 = mysqli_query($con, $wkyr3_in_H);
   $result3 = mysqli_fetch_array($result3);
   $wkyr3_in_H = $result3[0];
   $result2 = mysqli_query($con, $wkyr2_in_H);
   $result2 = mysqli_fetch_array($result2);
   $wkyr2_in_H = $result2[0];
   $result1 = mysqli_query($con, $wkyr1_in_H);
   $result1 = mysqli_fetch_array($result1);
   $wkyr1_in_H = $result1[0];
   $result1 = mysqli_query($con, $wk_curr);
   $result1 = mysqli_fetch_array($result1);
   $wk_curr = $result1[0];

   $result4 = mysqli_query($con, $wkyr4_ttl);
   $result4 = mysqli_fetch_array($result4);
   $wkyr4_ttl = $result4[0];
   $result3 = mysqli_query($con, $wkyr3_ttl);
   $result3 = mysqli_fetch_array($result3);
   $wkyr3_ttl = $result3[0];
   $result2 = mysqli_query($con, $wkyr2_ttl);
   $result2 = mysqli_fetch_array($result2);
   $wkyr2_ttl = $result2[0];
   $result1 = mysqli_query($con, $wkyr1_ttl);
   $result1 = mysqli_fetch_array($result1);
   $wkyr1_ttl = $result1[0];
   $result1 = mysqli_query($con, $wk_ttl);
   $result1 = mysqli_fetch_array($result1);
   $wk_ttl = $result1[0];

   $wkyr4_in_H = round(($wkyr4_in_H / $wkyr4_ttl) * 100, 2);
   $wkyr3_in_H = round(($wkyr3_in_H / $wkyr3_ttl) * 100, 2);
   $wkyr2_in_H = round(($wkyr2_in_H / $wkyr2_ttl) * 100, 2);
   $wkyr1_in_H = round(($wkyr1_in_H / $wkyr1_ttl) * 100, 2);
   if($wk_curr == 0){
      $wk_curr = 0;
   } else {
      $wk_curr = round(($wk_curr / $wk_ttl) * 100, 2);
   }

//Deforest
   $dfwkyr4_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2019 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $dfwkyr3_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2020 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $dfwkyr2_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2021 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $dfwkyr1_in_H = "SELECT COUNT(FIRST_PULL) FROM DEF_2022 WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";
   $dfwk_curr = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE FIRST_PULL >= 3 and WEEK_NUM = week(curdate()) - 1";

   $dfwkyr4_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2019 WHERE WEEK_NUM = week(curdate()) - 1";
   $dfwkyr3_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2020 WHERE WEEK_NUM = week(curdate()) - 1";
   $dfwkyr2_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2021 WHERE WEEK_NUM = week(curdate()) - 1"; 
   $dfwkyr1_ttl = "SELECT COUNT(FIRST_PULL) FROM DEF_2022 WHERE WEEK_NUM = week(curdate()) - 1";  
   $dfwk_ttl = "SELECT COUNT(FIRST_PULL) FROM def_curr_yr WHERE WEEK_NUM = week(curdate()) - 1";

   $result4 = mysqli_query($con, $dfwkyr4_in_H);
   $result4 = mysqli_fetch_array($result4);
   $dfwkyr4_in_H = $result4[0];
   $result3 = mysqli_query($con, $dfwkyr3_in_H);
   $result3 = mysqli_fetch_array($result3);
   $dfwkyr3_in_H = $result3[0];
   $result2 = mysqli_query($con, $dfwkyr2_in_H);
   $result2 = mysqli_fetch_array($result2);
   $dfwkyr2_in_H = $result2[0];
   $result1 = mysqli_query($con, $dfwkyr1_in_H);
   $result1 = mysqli_fetch_array($result1);
   $dfwkyr1_in_H = $result1[0];
   $result1 = mysqli_query($con, $dfwk_curr);
   $result1 = mysqli_fetch_array($result1);
   $dfwk_curr = $result1[0];

   $result4 = mysqli_query($con, $dfwkyr4_ttl);
   $result4 = mysqli_fetch_array($result4);
   $dfwkyr4_ttl = $result4[0];
   $result3 = mysqli_query($con, $dfwkyr3_ttl);
   $result3 = mysqli_fetch_array($result3);
   $dfwkyr3_ttl = $result3[0];
   $result2 = mysqli_query($con, $dfwkyr2_ttl);
   $result2 = mysqli_fetch_array($result2);
   $dfwkyr2_ttl = $result2[0];
   $result1 = mysqli_query($con, $dfwkyr1_ttl);
   $result1 = mysqli_fetch_array($result1);
   $dfwkyr1_ttl = $result1[0];
   $result1 = mysqli_query($con, $dfwk_ttl);
   $result1 = mysqli_fetch_array($result1);
   $dfwk_ttl = $result1[0];

   $dfwkyr4_in_H = round(($dfwkyr4_in_H / $dfwkyr4_ttl) * 100, 2);
   $dfwkyr3_in_H = round(($dfwkyr3_in_H / $dfwkyr3_ttl) * 100, 2);
   $dfwkyr2_in_H = round(($dfwkyr2_in_H / $dfwkyr2_ttl) * 100, 2);
   $dfwkyr1_in_H = round(($dfwkyr1_in_H / $dfwkyr1_ttl) * 100, 2);
   if($dfwk_curr == 0){
      $dfwk_curr = 0;
   } else {
      $dfwk_curr = round(($dfwk_curr / $dfwk_ttl) * 100, 2);
   }



//-----FLEX CHART (YEAR TO DATE CATEGORES)
//Columbus
   $colflex = "SELECT CAT_A, count(*) as COUNT FROM col_running_cmi where CAT_A IS NOT NULL GROUP BY CAT_A ORDER BY COUNT DESC LIMIT 3";
   $colflexTtl = "SELECT ID FROM col_running_cmi order by ID DESC LIMIT 1";
   $result1 = mysqli_query($con, $colflex);
   $result1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

   $result2 = mysqli_query($con, $colflexTtl);
   $result2 = mysqli_fetch_array($result2);
   $colflexTtl = $result2[0];

   $colflex = array();
   $colflexCount = array();
   $colflex = array_fill(0,3,'Nothing yet!');
   $colflexCount = array_fill(0,3,0);

   $i = 0;
   foreach ($result1 as $row) {
      $colflex[$i] = $row["CAT_A"];
      $colflexCount[$i]=$row["COUNT"];
      //printf ("%s (%s)\n", $row["CAT_A"], $row["COUNT"]);
      $i++;
   }

   $colflexCount[0] = round(($colflexCount[0] / $colflexTtl) * 100, 2);
   $colflexCount[1] = round(($colflexCount[1] / $colflexTtl) * 100, 2);
   $colflexCount[2] = round(($colflexCount[2] / $colflexTtl) * 100, 2);


//Deforest
   $dfflex = "SELECT CAT_A, count(*) as COUNT FROM def_running_cmi where CAT_A IS NOT NULL GROUP BY CAT_A ORDER BY COUNT DESC LIMIT 3";
   $dfflexTtl = "SELECT ID FROM def_running_cmi order by ID DESC LIMIT 1";
   $result1 = mysqli_query($con, $dfflex);
   $result1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);

   $result2 = mysqli_query($con, $dfflexTtl);
   $result2 = mysqli_fetch_array($result2);
   $dfflexTtl = $result2[0];

   $dfflex = array();
   $dfflexCount = array();
   $dfflex = array_fill(0,3,'Nothing yet!');
   $dfflexCount = array_fill(0,3,0);

   $i = 0;
   foreach ($result1 as $row) {
      $dfflex[$i] = $row["CAT_A"];
      $dfflexCount[$i]=$row["COUNT"];
      $i++;
   }

   $dfflexCount[0] = round(($dfflexCount[0] / $dfflexTtl) * 100, 2);
   $dfflexCount[1] = round(($dfflexCount[1] / $dfflexTtl) * 100, 2);
   $dfflexCount[2] = round(($dfflexCount[2] / $dfflexTtl) * 100, 2);





//-----CURRENT WEEK DE
//Columbus 
    $currwk1DE = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL < 1";
    $currwk2DE = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
    $currwk3DE = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
    $currwkOver3 = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 3";
    $currwkTotal = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())";
    $result1 = mysqli_query($con, $currwk1DE);
    $result1 = mysqli_fetch_array($result1);
    $currwk1DE = $result1[0];
    $result1 = mysqli_query($con, $currwk2DE);
    $result1 = mysqli_fetch_array($result1);
    $currwk2DE = $result1[0];
    $result1 = mysqli_query($con, $currwk3DE);
    $result1 = mysqli_fetch_array($result1);
    $currwk3DE = $result1[0];
    $result1 = mysqli_query($con, $currwkOver3);
    $result1 = mysqli_fetch_array($result1);
    $currwkOver3 = $result1[0];
    $result1 = mysqli_query($con, $currwkTotal);
    $result1 = mysqli_fetch_array($result1);
    $currwkTotal = $result1[0];

//Deforest
   $dfcurrwk1DE = "SELECT COUNT(FIRST_PULL) FROM def_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL < 1";
   $dfcurrwk2DE = "SELECT COUNT(FIRST_PULL) FROM def_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $dfcurrwk3DE = "SELECT COUNT(FIRST_PULL) FROM def_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $dfcurrwkOver3 = "SELECT COUNT(FIRST_PULL) FROM def_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 3";
   $dfcurrwkTotal = "SELECT COUNT(FIRST_PULL) FROM def_running_cmi WHERE WK_NUM = week(curdate())";
   $result1 = mysqli_query($con, $dfcurrwk1DE);
   $result1 = mysqli_fetch_array($result1);
   $dfcurrwk1DE = $result1[0];
   $result1 = mysqli_query($con, $dfcurrwk2DE);
   $result1 = mysqli_fetch_array($result1);
   $dfcurrwk2DE = $result1[0];
   $result1 = mysqli_query($con, $dfcurrwk3DE);
   $result1 = mysqli_fetch_array($result1);
   $dfcurrwk3DE = $result1[0];
   $result1 = mysqli_query($con, $dfcurrwkOver3);
   $result1 = mysqli_fetch_array($result1);
   $dfcurrwkOver3 = $result1[0];
   $result1 = mysqli_query($con, $dfcurrwkTotal);
   $result1 = mysqli_fetch_array($result1);
   $dfcurrwkTotal = $result1[0];








/*
// grabbing this week's categories data
   $colQc = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND CAT_A = 'QC'";
   $colPress = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $colStandard = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $colNos = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 3";
   $colTrial = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())";
   $colCyl = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL < 1";
   $colProj = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $colOth = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
 
//QC
   $result2 = mysqli_query($con, $colQc);
   $result2 = mysqli_fetch_array($result2);
   $colQc = $result2[0];

//PRESS
   $result2 = mysqli_query($con, $colPress);
   $result2 = mysqli_fetch_array($result2);
   $colPress = $result2[0];
//STANDARDS
   $result2 = mysqli_query($con, $colStandard);
   $result2 = mysqli_fetch_array($result2);
   $colStandard = $result2[0];
//NO SAMPLE
   $result2 = mysqli_query($con, $colNos);
   $result2 = mysqli_fetch_array($result2);
   $colNos = $result2[0];
//TRIAL
   $result2 = mysqli_query($con, $colTrial);
   $result2 = mysqli_fetch_array($result2);
   $colTrial = $result2[0];
//CYLINDER
   $result2 = mysqli_query($con, $colCyl);
   $result2 = mysqli_fetch_array($result2);
   $colCyl = $result2[0];
//PROJECT
   $result2 = mysqli_query($con, $colProj);
   $result2 = mysqli_fetch_array($result2);
   $colProj = $result2[0];
//OTHER
   $result2 = mysqli_query($con, $colOth);
   $result2 = mysqli_fetch_array($result2);
   $colOth = $result2[0];


//LAST WEEK
   $OneDELW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) - 1 AND FIRST_PULL < 1";
   $TwoDELW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) - 1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDELW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) - 1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3LW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) - 1 AND FIRST_PULL >= 3";
   $TotalLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate()) - 1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDELW);
   $result1 = mysqli_fetch_array($result1);
   $OneDELW = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDELW);
   $result1 = mysqli_fetch_array($result1);
   $TwoDELW = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDELW);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDELW = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3LW);
   $result1 = mysqli_fetch_array($result1);
   $Over3LW = $result1[0];
//total
   $result1 = mysqli_query($con, $TotalLW);
   $result1 = mysqli_fetch_array($result1);
   $TotalLW = $result1[0];


// grabbing last week's categories data
   $colQcLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND CAT_A = 'QC'";
   $colPressLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $colStandardLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $colNosLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL >= 3";
   $colTrialLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1";
   $colCylLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL < 1";
   $colProjLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $colOthLW = "SELECT COUNT(FIRST_PULL) FROM col_running_cmi WHERE WK_NUM = week(curdate())-1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";

//QC
   $result2 = mysqli_query($con, $colQcLW);
   $result2 = mysqli_fetch_array($result2);
   $colQcLW = $result2[0];

//PRESS
   $result2 = mysqli_query($con, $colPressLW);
   $result2 = mysqli_fetch_array($result2);
   $colPressLW = $result2[0];
//STANDARDS
   $result2 = mysqli_query($con, $colStandardLW);
   $result2 = mysqli_fetch_array($result2);
   $colStandardLW = $result2[0];
//NO SAMPLE
   $result2 = mysqli_query($con, $colNosLW);
   $result2 = mysqli_fetch_array($result2);
   $colNosLW = $result2[0];
//TRIAL
   $result2 = mysqli_query($con, $colTrialLW);
   $result2 = mysqli_fetch_array($result2);
   $colTrialLW = $result2[0];
//CYLINDER
   $result2 = mysqli_query($con, $colCylLW);
   $result2 = mysqli_fetch_array($result2);
   $colCylLW = $result2[0];
//PROJECT
   $result2 = mysqli_query($con, $colProjLW);
   $result2 = mysqli_fetch_array($result2);
   $colProjLW = $result2[0];
//OTHER
   $result2 = mysqli_query($con, $colOthLW);
   $result2 = mysqli_fetch_array($result2);
   $colOthLW = $result2[0];





//LAST MONTH







//grabbing from past CMIs
   $formulaNum1= "SELECT * FROM col_running_cmi WHERE STATUS LIKE 'NOT COMP' LIMIT 1";
   $result_cmi = mysqli_query($con,$formulaNum1);
   $formulaNum1 = mysqli_fetch_array($result_cmi);

   if (empty($formulaNum1)){
      
   } else {
   
   $formulaNum = $formulaNum1['FORM_NUM'];
   $SPEC = $formulaNum1['SPEC'];
   $ColorName = $formulaNum1['COLOR_DESC'];
   $JobNum = $formulaNum1['JOB_NUM'];
   $RunDate = $formulaNum1['RUN_DATE'];
   $FirstPull = $formulaNum1['FIRST_PULL'];
   $Customer=$formulaNum1['CUST'];
   $ID = $formulaNum1['ID'];
   $RECEIVED = $formulaNum1['WT_SMPL_RCD'];
  

   $formulaNum1= '"' . $formulaNum . '"';
   $all_Runs_2022 ="SELECT COUNT(TRUNC_COLOR) FROM COL_2022 WHERE TRUNC_COLOR= $formulaNum1";
   $result_cmi = mysqli_query($con,$all_Runs_2022);
   $result_cmi = mysqli_fetch_array($result_cmi);
   $all_Runs_2022 = $result_cmi[0];
   $all_Runs_2021 ="SELECT COUNT(TRUNC_COLOR) FROM COL_2021 WHERE TRUNC_COLOR=$formulaNum1";
   $result_cmi2 = mysqli_query($con,$all_Runs_2021);
   $result_cmi2 = mysqli_fetch_array($result_cmi2);
   $all_Runs_2021 = $result_cmi2[0];
   $cmi_Runs = $all_Runs_2022 + $all_Runs_2021;


//History for specific cmi color
//2022
   $OneDEcmi22 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL < 1";
   $TwoDEcmi22 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDEcmi22 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3cmi22 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 3";
   $Totalcmi22 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDEcmi22);
   $result1 = mysqli_fetch_array($result1);
   $OneDEcmi22 = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDEcmi22);
   $result1 = mysqli_fetch_array($result1);
   $TwoDEcmi22 = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDEcmi22);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDEcmi22 = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3cmi22);
   $result1 = mysqli_fetch_array($result1);
   $Over3cmi22 = $result1[0];
//total
   $result1 = mysqli_query($con, $Totalcmi22);
   $result1 = mysqli_fetch_array($result1);
   $Totalcmi22 = $result1[0];

//2021
   $OneDEcmi21 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL < 1";
   $TwoDEcmi21 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDEcmi21 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3cmi21 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 3";
   $Totalcmi21 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDEcmi21);
   $result1 = mysqli_fetch_array($result1);
   $OneDEcmi21 = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDEcmi21);
   $result1 = mysqli_fetch_array($result1);
   $TwoDEcmi21 = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDEcmi21);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDEcmi21 = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3cmi21);
   $result1 = mysqli_fetch_array($result1);
   $Over3cmi21 = $result1[0];
//total
   $result1 = mysqli_query($con, $Totalcmi21);
   $result1 = mysqli_fetch_array($result1);
   $Totalcmi21 = $result1[0];

//2020
   $OneDEcmi20 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL < 1";
   $TwoDEcmi20 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDEcmi20 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3cmi20 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 3";
   $Totalcmi20 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDEcmi20);
   $result1 = mysqli_fetch_array($result1);
   $OneDEcmi20 = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDEcmi20);
   $result1 = mysqli_fetch_array($result1);
   $TwoDEcmi20 = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDEcmi20);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDEcmi20 = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3cmi20);
   $result1 = mysqli_fetch_array($result1);
   $Over3cmi20 = $result1[0];
//total
   $result1 = mysqli_query($con, $Totalcmi20);
   $result1 = mysqli_fetch_array($result1);
   $Totalcmi20 = $result1[0];


//2019
   $OneDEcmi19 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL < 1";
   $TwoDEcmi19 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDEcmi19 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3cmi19 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 3";
   $Totalcmi19 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDEcmi19);
   $result1 = mysqli_fetch_array($result1);
   $OneDEcmi19 = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDEcmi19);
   $result1 = mysqli_fetch_array($result1);
   $TwoDEcmi19 = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDEcmi19);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDEcmi19 = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3cmi19);
   $result1 = mysqli_fetch_array($result1);
   $Over3cmi19 = $result1[0];
//total
   $result1 = mysqli_query($con, $Totalcmi19);
   $result1 = mysqli_fetch_array($result1);
   $Totalcmi19 = $result1[0];


//2018
   $OneDEcmi18 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL < 1";
   $TwoDEcmi18 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 1 AND FIRST_PULL < 2";
   $ThreeDEcmi18 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 2 AND FIRST_PULL < 3";
   $Over3cmi18 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1 AND FIRST_PULL >= 3";
   $Totalcmi18 = "SELECT COUNT(FIRST_PULL) FROM col_2022 WHERE TRUNC_COLOR = $formulaNum1";
//under 1 de col
   $result1 = mysqli_query($con, $OneDEcmi18);
   $result1 = mysqli_fetch_array($result1);
   $OneDEcmi18 = $result1[0];
//over 1 less than Two
   $result1 = mysqli_query($con, $TwoDEcmi18);
   $result1 = mysqli_fetch_array($result1);
   $TwoDEcmi18 = $result1[0];
//over Two less 3
   $result1 = mysqli_query($con, $ThreeDEcmi18);
   $result1 = mysqli_fetch_array($result1);
   $ThreeDEcmi18 = $result1[0];
// over 3
   $result1 = mysqli_query($con, $Over3cmi18);
   $result1 = mysqli_fetch_array($result1);
   $Over3cmi18 = $result1[0];
//total
   $result1 = mysqli_query($con, $Totalcmi18);
   $result1 = mysqli_fetch_array($result1);
   $Totalcmi18 = $result1[0];

   $OneDEcmi = $OneDEcmi22 + $OneDEcmi21 + $OneDEcmi20 + $OneDEcmi19 + $OneDEcmi18;
   $TwoDEcmi = $TwoDEcmi22 + $TwoDEcmi21 + $TwoDEcmi20 + $TwoDEcmi19 + $TwoDEcmi18;
   $ThreeDEcmi = $ThreeDEcmi22 + $ThreeDEcmi21 + $ThreeDEcmi20 + $ThreeDEcmi19 + $ThreeDEcmi18;
   $Over3cmi = $Over3cmi22 + $Over3cmi21 + $Over3cmi20 + $Over3cmi19 + $Over3cmi18;
   $Totalcmi = $Totalcmi22 + $Totalcmi21 + $Totalcmi20 + $Totalcmi19 + $Totalcmi18;


//grabbing averages
//3m
   $cmi_avg3m1 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2022 WHERE MONTH_NUM > MONTH(CURDATE())-3 AND TRUNC_COLOR LIKE $formulaNum1";
   $result_avg3m1 = mysqli_query($con,$cmi_avg3m1);
   $result_avg3m1 = mysqli_fetch_array($result_avg3m1);
   $cmi_avg3m1 = $result_avg3m1[0];

   $cmi_avg3m2 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2021 WHERE MONTH_NUM > 12 + MONTH(CURDATE())-3 AND TRUNC_COLOR LIKE $formulaNum1";
   $result_avg3m2 = mysqli_query($con,$cmi_avg3m2);
   $result_avg3m2 = mysqli_fetch_array($result_avg3m2);
   $cmi_avg3m2 = $result_avg3m2[0];

   $cmi_avg3m = $cmi_avg3m1 + $cmi_avg3m2;

//6m
   $cmi_avg6m1 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2022 WHERE MONTH_NUM > MONTH(CURDATE())-6 AND TRUNC_COLOR LIKE $formulaNum1";
   $result_avg6m1 = mysqli_query($con,$cmi_avg6m1);
   $result_avg6m1 = mysqli_fetch_array($result_avg6m1);
   $cmi_avg6m1 = $result_avg6m1[0];

   $cmi_avg6m2 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2021 WHERE MONTH_NUM > 12 + MONTH(CURDATE())-6 AND TRUNC_COLOR LIKE $formulaNum1";
   $result_avg6m2 = mysqli_query($con,$cmi_avg6m2);
   $result_avg6m2 = mysqli_fetch_array($result_avg6m2);
   $cmi_avg6m2 = $result_avg6m2[0];

   $cmi_avg6m = $cmi_avg6m1 + $cmi_avg6m2;


//12M
   $cmi_avg12m1 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2022 WHERE TRUNC_COLOR LIKE $formulaNum1";
   $result_avg12m1 = mysqli_query($con,$cmi_avg12m1);
   $result_avg12m1 = mysqli_fetch_array($result_avg12m1);
   $cmi_avg12m1 = $result_avg12m1[0];

   $cmi_avg12m2 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2021 WHERE MONTH_NUM > MONTH(CURDATE()) AND TRUNC_COLOR LIKE $formulaNum1";
   $result_avg12m2 = mysqli_query($con,$cmi_avg12m2);
   $result_avg12m2 = mysqli_fetch_array($result_avg12m2);
   $cmi_avg12m2 = $result_avg12m2[0];

   $cmi_avg12m = $cmi_avg12m1 + $cmi_avg12m2;



//18M
$cmi_avg18m1 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2022 WHERE TRUNC_COLOR LIKE $formulaNum1";
$result_avg18m1 = mysqli_query($con,$cmi_avg18m1);
$result_avg18m1 = mysqli_fetch_array($result_avg18m1);
$cmi_avg18m1 = $result_avg18m1[0];

$cmi_avg18m2 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2021 WHERE MONTH_NUM > MONTH(CURDATE()) - 6 AND TRUNC_COLOR LIKE $formulaNum1";
$result_avg18m2 = mysqli_query($con,$cmi_avg18m2);
$result_avg18m2 = mysqli_fetch_array($result_avg18m2);
$cmi_avg18m2 = $result_avg18m2[0];

$cmi_avg18m3 ="SELECT TRUNCATE(avg(FIRST_PULL),2) AS MYAVG FROM COL_2020 WHERE MONTH_NUM > 12 + MONTH(CURDATE()) - 6 AND TRUNC_COLOR LIKE $formulaNum1";
$result_avg18m3 = mysqli_query($con,$cmi_avg18m3);
$result_avg18m3 = mysqli_fetch_array($result_avg18m3);
$cmi_avg18m3 = $result_avg18m3[0];
$cmi_avg18m = $cmi_avg18m1 + $cmi_avg18m2 + $cmi_avg18m3;

$avgs=$cmi_avg18m."  |  ".$cmi_avg12m."  |  ".$cmi_avg6m."  |  ".$cmi_avg3m;


//resets
   $cmi_reset1 ="SELECT COUNT(COLOR_RST) FROM col_running_cmi WHERE FORM_NUM LIKE $formulaNum1";
   $result_reset1 = mysqli_query($con,$cmi_reset1);
   $result_reset1 = mysqli_fetch_array($result_reset1);
   $cmi_reset1 = $result_reset1[0];


//grab CMIs
   $cmi_grab ="SELECT RUN_DATE,SPEC, CYL_NUM, ENGR, FTG,FIRST_PULL,CAT_A, COLOR_RST FROM col_running_cmi WHERE FORM_NUM LIKE $formulaNum1 ORDER BY RUN_DATE DESC";
   $result = mysqli_query($con, $cmi_grab);
   $grab = mysqli_fetch_all($result, MYSQLI_ASSOC);

//spec history
//2022
   $spec_his ="SELECT SPEC, RUN_DATE, ROUND(FIRST_PULL,2), CUST FROM col_2022 WHERE TRUNC_COLOR LIKE $formulaNum1 ORDER BY RUN_DATE DESC LIMIT 25";
   $result = mysqli_query($con, $spec_his);
   $spec_h = mysqli_fetch_all($result, MYSQLI_ASSOC);
   $result = mysqli_query($con, $spec_his);
   $spec_hh = mysqli_fetch_array($result);

   

//2021
   $spec_his ="SELECT SPEC, RUN_DATE, ROUND(FIRST_PULL,2), CUST FROM col_2021 WHERE TRUNC_COLOR LIKE $formulaNum1 ORDER BY RUN_DATE DESC LIMIT 15";
   $result = mysqli_query($con, $spec_his);
   $spec_h2 = mysqli_fetch_all($result, MYSQLI_ASSOC);



   mysqli_free_result($result);
   mysqli_close($con);

}
*/
//problem category A
   $cata="SELECT DISTINCT CAT_A FROM CATEGORIES";
   $cata_result = mysqli_query($con,$cata);
   $cata_result = mysqli_fetch_all($cata_result);
      if(isset($_POST['data22'])){
         $data =$_POST['data'];
         $data="'". $data . "'";
         $catb="SELECT CAT_B FROM CATEGORIES WHERE CAT_A LIKE $data ";
         $catb_result = mysqli_query($con,$catb);
         $catb_result = mysqli_fetch_all($catb_result);
         echo json_encode($catb_result);
      }


global $catb_result;  
            
//Tech names
   $techs = "SELECT CONCAT(TECH_FIRST,', ', TECH_LAST) FROM TECHS WHERE SITE LIKE 'COLUMBUS'";
   $techs_result = mysqli_query($con,$techs);
   $techs_result = mysqli_fetch_all($techs_result);




if(isset($_POST['skipData1'])){
   $action=$_POST['skipData'];
   $ID = $_POST['ID'];
   
   switch($action){
           case 'save':
               $spec = "'". $SPEC. "'";
               $ColorName = "'". $ColorName. "'";
               $JobNum = "'". $JobNum. "'";
               $RunDate = "'". $RunDate. "'";
               $FirstPull = "'". $FirstPull. "'";

               $data ="'". $_POST['formulaNum']. "'";

               $SendDE = $_POST['SendDE'];
               $BrlDE = $_POST['BrlDE'];
               $BrlVis = $_POST['BrlVis'];
               $BrlV36 = $_POST['BrlV36'];
               $SumpDE = $_POST['SumpDE'];
               $SumpVis = $_POST['SumpVis'];
               $SumpV36 = $_POST['SumpV36'];
               $Press = $_POST['Press'];
               $send_date = $_POST['send_date'];
               $batch_date = $_POST['batch_date'];
               $cyl_no = $_POST['cyl_no'];
               $cyl_eng = $_POST['cyl_eng'];
               $cata = $_POST['cata'];
               $catb = $_POST['catb'];
               $FirstP = $_POST['FirstP'];
               $Resetswitch = $_POST['Resetswitch'];
               $tech = $_POST['tech'];
               
               $comments = "'".$_POST['comments']."'";

               $con = mysqli_connect($host,$un,$pw,$db);
               $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SAVED' WHERE ID LIKE $ID";
               mysqli_query($con,$skipping);
               $skipping="UPDATE COL_RUNNING_CMI SET COMMENTS = $comments WHERE ID LIKE $ID";
               mysqli_query($con,$skipping);
               




               break;

           case 'skip':
               $con = mysqli_connect($host,$un,$pw,$db);
               $skipping="UPDATE COL_RUNNING_CMI SET STATUS = 'SKIP' WHERE ID LIKE $ID";
               mysqli_query($con,$skipping);
               //header('refresh:0');
               
               break;
              //default:


      }

          
   };

     










              

?>




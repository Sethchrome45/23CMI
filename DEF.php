<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI OUTLOOK</title>
   
    <link rel="stylesheet" href="Def.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="DefJS.js"></script>
    <script src="JSMain.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body>

    <?php include "connect.php"; ?>
    <?php include "phpfunct.php"; ?>
    
    <div id="Main_body">

        <div id="Def_splash">  
            <Header>
                <h1>
                    CMR
                </h1>
            </Header>  

            <div id="welcome">
                Welcome to Deforest!
            </div>

        
            <div class="navbar">
                <div class="dropdown">
                    <div class="dropdown-content">
                        <a href="Main.php" id="Dent">HOME</a>
                        <a href="COL.php">COLUMBUS</a>
                        <a href="DEF.php">DEFOREST</a>
                        <a href="#">REPORTS</a>
                        <a href="#" id="DentEnd">ABOUT</a>
                    </div>
                </div>
            </div>

        </div>
        <!--Main splash div -->
    
      
        <div id="Def-charts">
            <div id="Def-DE">
            </div><!--Col-DE div-->
            <div id="Def-prob">
            </div><!--Col-prob div-->
            <div id="Def-DELW">
            </div><!--Col-DE div-->
            <div id="Def-probLW">
            </div><!--Col-prob div-->
            <div id="dfyr_in_H">
            </div><!--year in history div-->
            <div id="dfwk_in_H">
            </div><!--year in history div-->
            <div id="dfflex_chart">
            </div><!--year in history div-->
            <div id="dfpast_charts">
                
                <div id="def_y4">
                </div>
                <div id="def_y3">
                </div>
                <div id="def_y2">
                </div>
                <div id="def_y1">
                </div>




            </div> <!--past charts div-->







        </div><!--Col-charts div-->
        
        <div id="def-buttons">
            <BUTton id="Def-entry" onclick="window.location='ColEntry.php'">CMI ENTRY</BUTton>
            <BUTton id="Def-report">REPORTS</BUTton>
        </div>
        <!--Columbus buttons-->
    </div>
    <!--Main body div-->

</body>
<footer>
    <div id="footer_banner"></div><!--Footer banner div-->


    
<!--passing variables from php to jquery for now-->
<!--current week outlook charts-->
    <input type="hidden" id="dfcurrwk1DE" value = "<?php echo $dfcurrwk1DE; ?>">
    <input type="hidden" id="dfcurrwk2DE" value = "<?php echo $dfcurrwk2DE; ?>">
    <input type="hidden" id="dfcurrwk3DE" value = "<?php echo $dfcurrwk3DE; ?>">
    <input type="hidden" id="dfcurrwkOv3" value = "<?php echo $dfcurrwkOver3; ?>">
    <input type="hidden" id="dfcurrwkTotal" value = "<?php echo $dfcurrwkTotal; ?>">
<!--categories for this week-->
    <input type="hidden" id="dfcatA1" value = "<?php echo $CAT_A_DEF[0]; ?>">
    <input type="hidden" id="dfcatA2" value = "<?php echo $CAT_A_DEF[1]; ?>">
    <input type="hidden" id="dfcatA3" value = "<?php echo $CAT_A_DEF[2]; ?>">
    <input type="hidden" id="dfcatA4" value = "<?php echo $CAT_A_DEF[3]; ?>">
    <input type="hidden" id="dfcatA5" value = "<?php echo $CAT_A_DEF[4]; ?>">
    <input type="hidden" id="dfcatA6" value = "<?php echo $CAT_A_DEF[5]; ?>">
    <input type="hidden" id="dfcatA7" value = "<?php echo $CAT_A_DEF[6]; ?>">
<!--categories data for this week-->
    <input type="hidden" id="dfcountA1" value = "<?php echo $COUNT_DEF[0]; ?>">
    <input type="hidden" id="dfcountA2" value = "<?php echo $COUNT_DEF[1]; ?>">
    <input type="hidden" id="dfcountA3" value = "<?php echo $COUNT_DEF[2]; ?>">
    <input type="hidden" id="dfcountA4" value = "<?php echo $COUNT_DEF[3]; ?>">
    <input type="hidden" id="dfcountA5" value = "<?php echo $COUNT_DEF[4]; ?>">
    <input type="hidden" id="dfcountA6" value = "<?php echo $COUNT_DEF[5]; ?>">
    <input type="hidden" id="dfcountA7" value = "<?php echo $COUNT_DEF[6]; ?>">
<!-- Year in history-->
    <input type="hidden" id="dfyr1_in_H" value = "<?php echo $dfyr1_in_H; ?>">
    <input type="hidden" id="dfyr2_in_H" value = "<?php echo $dfyr2_in_H; ?>">
    <input type="hidden" id="dfyr3_in_H" value = "<?php echo $dfyr3_in_H; ?>">
    <input type="hidden" id="dfyr4_in_H" value = "<?php echo $dfyr4_in_H; ?>">
    <input type="hidden" id="dfyr_curr" value = "<?php echo $dfyr_curr; ?>">
<!-- week in history-->
    <input type="hidden" id="dfwkyr1_in_H" value = "<?php echo $dfwkyr1_in_H; ?>">
    <input type="hidden" id="dfwkyr2_in_H" value = "<?php echo $dfwkyr2_in_H; ?>">
    <input type="hidden" id="dfwkyr3_in_H" value = "<?php echo $dfwkyr3_in_H; ?>">
    <input type="hidden" id="dfwkyr4_in_H" value = "<?php echo $dfwkyr4_in_H; ?>">
    <input type="hidden" id="dfwk_curr" value = "<?php echo $dfwk_curr; ?>">
<!-- flex chart - ctegories-->
    <input type="hidden" id="dfflex1" value = "<?php echo $dfflex[0]; ?>">
    <input type="hidden" id="dfflex2" value = "<?php echo $dfflex[1]; ?>">
    <input type="hidden" id="dfflex3" value = "<?php echo $dfflex[2]; ?>">
<!-- flex chart - values-->
    <input type="hidden" id="dfflexCt1" value = "<?php echo $dfflexCount[0]; ?>">
    <input type="hidden" id="dfflexCt2" value = "<?php echo $dfflexCount[1]; ?>">
    <input type="hidden" id="dfflexCt3" value = "<?php echo $dfflexCount[2]; ?>">










</footer>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMI OUTLOOK</title>
    <link rel="stylesheet" href="CsMain.css">
    <link rel="stylesheet" href="Col.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ColJS.js"></script>
    <script src="JSMain.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body>

    <?php include "connect.php"; ?>
    <?php include "phpfunct.php"; ?>
    <div id="Main-Splash">
        <Header>
            <h1>
                FLINT GROUP COLOR MATCHING
            </h1>
        </Header>
    </div>
    <!--Main splash div -->
    <div class="navbar">
        <div class="dropdown">
            <div class="dropdown-content">
                <a href="Main.php" id="Dent">HOME</a>
                <a href="#COL.php">COLUMBUS</a>
                <a href="#">DEFOREST</a>
                <a href="#">REPORTS</a>
                <a href="#" id="DentEnd">ABOUT</a>
            </div>
        </div>
    </div>


    <div id="Main-body">
        <div id="welcome">
            Welcome to Columbus!
        </div>
        <div id="Col-charts">
            <div id="Col-DE">
            </div><!--Col-DE div-->
            <div id="Col-prob">
            </div><!--Col-prob div-->
            <div id="Col-DELW">
            </div><!--Col-DE div-->
            <div id="Col-probLW">
            </div><!--Col-prob div-->
            <div id="yr_in_H">
            </div><!--year in history div-->
            <div id="wk_in_H">
            </div><!--year in history div-->
            <div id="flex_chart">
            </div><!--year in history div-->
            <div id="past_charts">
                
                <div id="col_y4">
                </div>
                <div id="col_y3">
                </div>
                <div id="col_y2">
                </div>
                <div id="col_y1">
                </div>




            </div> <!--past charts div-->







        </div><!--Col-charts div-->
        
        <div id="col-buttons">
            <BUTton id="Col-entry" onclick="window.location='ColEntry.php'">CMI ENTRY</BUTton>
            <BUTton id="Col-report">REPORTS</BUTton>
        </div>
        <!--Columbus buttons-->
    </div>
    <!--Main body div-->

</body>
<footer>

<!--passing variables from php to jquery for now-->
<!--current week outlook charts-->
    <input type="hidden" id="currwk1DE" value = "<?php echo $currwk1DE; ?>">
    <input type="hidden" id="currwk2DE" value = "<?php echo $currwk2DE; ?>">
    <input type="hidden" id="currwk3DE" value = "<?php echo $currwk3DE; ?>">
    <input type="hidden" id="currwkOv3" value = "<?php echo $currwkOver3; ?>">
    <input type="hidden" id="currwkTotal" value = "<?php echo $currwkTotal; ?>">
<!--categories for this week-->
    <input type="hidden" id="catA1" value = "<?php echo $CAT_A[0]; ?>">
    <input type="hidden" id="catA2" value = "<?php echo $CAT_A[1]; ?>">
    <input type="hidden" id="catA3" value = "<?php echo $CAT_A[2]; ?>">
    <input type="hidden" id="catA4" value = "<?php echo $CAT_A[3]; ?>">
    <input type="hidden" id="catA5" value = "<?php echo $CAT_A[4]; ?>">
    <input type="hidden" id="catA6" value = "<?php echo $CAT_A[5]; ?>">
    <input type="hidden" id="catA7" value = "<?php echo $CAT_A[6]; ?>">
<!--categories data for this week-->
    <input type="hidden" id="countA1" value = "<?php echo $COUNT[0]; ?>">
    <input type="hidden" id="countA2" value = "<?php echo $COUNT[1]; ?>">
    <input type="hidden" id="countA3" value = "<?php echo $COUNT[2]; ?>">
    <input type="hidden" id="countA4" value = "<?php echo $COUNT[3]; ?>">
    <input type="hidden" id="countA5" value = "<?php echo $COUNT[4]; ?>">
    <input type="hidden" id="countA6" value = "<?php echo $COUNT[5]; ?>">
    <input type="hidden" id="countA7" value = "<?php echo $COUNT[6]; ?>">
<!-- Year in history-->
    <input type="hidden" id="yr1_in_H" value = "<?php echo $yr1_in_H; ?>">
    <input type="hidden" id="yr2_in_H" value = "<?php echo $yr2_in_H; ?>">
    <input type="hidden" id="yr3_in_H" value = "<?php echo $yr3_in_H; ?>">
    <input type="hidden" id="yr4_in_H" value = "<?php echo $yr4_in_H; ?>">
    <input type="hidden" id="yr_curr" value = "<?php echo $yr_curr; ?>">
<!-- week in history-->
    <input type="hidden" id="wkyr1_in_H" value = "<?php echo $wkyr1_in_H; ?>">
    <input type="hidden" id="wkyr2_in_H" value = "<?php echo $wkyr2_in_H; ?>">
    <input type="hidden" id="wkyr3_in_H" value = "<?php echo $wkyr3_in_H; ?>">
    <input type="hidden" id="wkyr4_in_H" value = "<?php echo $wkyr4_in_H; ?>">
    <input type="hidden" id="wk_curr" value = "<?php echo $wk_curr; ?>">
<!-- flex chart - ctegories-->
    <input type="hidden" id="colflex1" value = "<?php echo $colflex[0]; ?>">
    <input type="hidden" id="colflex2" value = "<?php echo $colflex[1]; ?>">
    <input type="hidden" id="colflex3" value = "<?php echo $colflex[2]; ?>">
<!-- flex chart - values-->
    <input type="hidden" id="colflexCt1" value = "<?php echo $colflexCount[0]; ?>">
    <input type="hidden" id="colflexCt2" value = "<?php echo $colflexCount[1]; ?>">
    <input type="hidden" id="colflexCt3" value = "<?php echo $colflexCount[2]; ?>">










</footer>
</html>